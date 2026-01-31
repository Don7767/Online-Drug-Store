<?php
include_once 'database.php';
include_once 'productrepository.php';
include_once 'product.php';

$db = new Database();
$conn = $db->getConnection();  // krijo connection

$repo = new ProductRepository($conn);  // kalojmë connection-in

if(isset($_POST['addBtn'])){
    $product = new Product(
        null,
        $_POST['name'],
        $_POST['description'],
        $_POST['price'],
        $_POST['quantity']
    );

    $repo->insertProduct($product);
    header("location:dashboard.php");
    exit();
}
?>

<form method="post">
    <input type="text" name="name" placeholder="Product name"><br><br>
    <textarea name="description" placeholder="Description"></textarea><br><br>
    <input type="number" step="0.01" name="price" placeholder="Price"><br><br>
    <input type="number" name="quantity" placeholder="Quantity"><br><br>
    <input type="submit" name="addBtn" value="Add Product">
</form>
