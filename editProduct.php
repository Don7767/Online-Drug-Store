<?php
include_once "database.php";
include_once "productrepository.php";

$db = new Database();
$conn = $db->getConnection();

$repo = new ProductRepository($conn);

$product = $repo->getProductById($_GET['id']);

if(isset($_POST['editBtn'])){
    $repo->updateProduct(
        $product['id'],
        $_POST['name'],
        $_POST['description'],
        $_POST['price'],
        $_POST['quantity']
    );
    header("location:dashboard.php");
    exit();
}
?>

<form method="post">
    <input type="text" name="name" value="<?=$product['name']?>"><br><br>
    <textarea name="description"><?=$product['description']?></textarea><br><br>
    <input type="number" step="0.01" name="price" value="<?=$product['price']?>"><br><br>
    <input type="number" name="quantity" value="<?=$product['quantity']?>"><br><br>
    <input type="submit" name="editBtn" value="Save">
</form>
