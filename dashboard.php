<?php
session_start();
include_once "database.php";
include_once "productrepository.php";

$db = new Database();
$conn = $db->getConnection();

$productRepo = new ProductRepository($conn);


$totalUsers = $conn->query("SELECT COUNT(*) FROM user")->fetchColumn();
$totalMale = $conn->query("SELECT COUNT(*) FROM user WHERE Gender='m'")->fetchColumn();
$totalFemale = $conn->query("SELECT COUNT(*) FROM user WHERE Gender='f'")->fetchColumn();
$totalProducts = $conn->query("SELECT COUNT(*) FROM medicines")->fetchColumn();
$totalSales = $conn->query("SELECT SUM(total) FROM sales")->fetchColumn();

$stmt = $conn->prepare("SELECT * FROM user");
$stmt->execute();
$users = $stmt->fetchAll(PDO::FETCH_ASSOC);

$products = $productRepo->getAllProducts();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Dashboard | Online Drug Store</title>
    <link rel="stylesheet" href="dash.css">
</head>
<body>

<header id="navi">
        <div id="foto1">
            <img src="logo2.png" alt="Logo">
        </div>
        <nav id="elemente">
            <?php
                $fullname = $_SESSION['fullname'] ?? '';
                if($fullname === 'Don Plakolli' || $fullname === 'Blend Osmani') {
                    echo '<a href="dashboard.php">Dashboard</a>';
                }
            ?>
            <a href="home.php">Home</a>
            <a href="about_us.php">About us</a>
            <a href="products.php">Products</a>
            <a href="my_prescription.php">My prescription</a>
            <a href="logout.php">Log Out</a>
        </nav>
    </header>

    <div class="dashboardi">
<h1>📊 Admin Dashboard</h1>

<div class="cards">
    <div class="card"><h2><?= $totalUsers ?></h2><p>Total Users</p></div>
    <div class="card"><h2><?= $totalMale ?></h2><p>Male</p></div>
    <div class="card"><h2><?= $totalFemale ?></h2><p>Female</p></div>
    <div class="card"><h2><?= $totalProducts ?></h2><p>Total Products</p></div>
    
    <div class="card"><h2>€<?= number_format($totalSales, 2) ?></h2><p>Total Sales</p></div>
</div>

<h2> Users List</h2>
<div class="table-wrapper">
<table>
    <tr>
        <th>ID</th><th>Name</th><th>Email</th><th>Birthday</th><th>Gender</th>
    </tr>
    <?php foreach ($users as $u): ?>
    <tr>
        <td><?= $u['userID'] ?></td>
        <td><?= $u['FullName'] ?></td>
        <td><?= $u['Email'] ?></td>
        <td><?= $u['Birthday'] ?></td>
        <td><?= strtoupper($u['Gender']) ?></td>
    </tr>
    <?php endforeach; ?>
</table>
</div>

<h2> Products List</h2>
<div id="add">
    <a class="link" href="addProduct.php">Add Product</a>
</div>
<div class="table-wrapper">
<table>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Description</th>
        <th>Price</th>
        <th>Quantity</th>
        <th>Edit</th>
        <th>Delete</th>
    </tr>
    <?php foreach($products as $product): ?>
    <tr>
        <td><?= $product['id'] ?></td>
        <td><?= $product['name'] ?></td>
        <td><?= $product['description'] ?></td>
        <td><?= $product['price'] ?></td>
        <td><?= $product['quantity'] ?></td>
        <td><a class="link" href="editProduct.php?id=<?= $product['id'] ?>">Edit</a></td>
        <td><a class="link" href="deleteProduct.php?id=<?= $product['id'] ?>">Delete</a></td>
    </tr>
    <?php endforeach; ?>
</table>
</div>
</div>

</body>
</html>

