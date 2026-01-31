<?php
session_start();
require_once "Database.php";
require_once "ProductRepository.php";

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
<div class="table-wrapper">
<table>
    <tr>
        <th>ID</th><th>Name</th><th>Price</th>
    </tr>
    <?php foreach ($products as $p): ?>
    <tr>
        <td><?= $p['id'] ?></td>
        <td><?= $p['name'] ?></td>
        <td>€<?= number_format($p['price'], 2) ?></td>
        
    </tr>
    <?php endforeach; ?>
</table>
</div>

</body>
</html>

