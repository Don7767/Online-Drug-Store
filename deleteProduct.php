<?php
include_once "database.php";
include_once "productrepository.php";

$db = new Database();
$conn = $db->getConnection();

$repo = new ProductRepository($conn);
$repo->deleteProduct($_GET['id']);

header("location:dashboard.php");
exit();
?>