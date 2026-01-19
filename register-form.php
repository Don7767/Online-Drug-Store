<?php
require_once "config/Database.php";
require_once "models/User.php";

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $fullname = trim($_POST['fullname']);
    $email    = trim($_POST['email']);
    $password = $_POST['password'];
    $birthday = $_POST['birthday'];
    $gender   = $_POST['gender'] ?? null;

    if (
        empty($fullname) || empty($email) || empty($password) ||
        empty($birthday) || empty($gender)
    ) {
        $error = "All fields are required";
    } else {
        $db = (new Database())->connect();
        $user = new User($db);

        if ($user->register($fullname, $email, $password, $birthday, $gender)) {
            header("Location: login.php");
            exit;
        } else {
            $error = "Registration failed";
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="style_1.css">
    <link rel="icon" type="image/png" href="logo_head.png">
</head>
<body>

<header id="navi">
    <div id="foto1">
        <img src="logo2.png" alt="">
    </div>
    <nav id="elemente">
        <a href="index.php">Home</a>
        <a href="about.php">About us</a>
        <a href="products.php">Products</a>
        <a href="login.php">Log In</a>
    </nav>
</header>

<div class="container">
    <form method="POST">
        <div class="register">
            <h2 id="tit">Register</h2>

            <div class="input-box">
                <label class="info">Full Name</label>
                <input type="text" id="fullname" name="fullname">
                <p class="error-text" id="fullnameError"></p>
            </div>

            <div class="input-box">
                <label class="info">Email</label>
                <input type="text" id="email" name="email">
                <p class="error-text" id="emailError"></p>
            </div>

            <div class="input-box">
                <label class="info">Password</label>
                <input type="password" id="password" name="password">
                <p class="error-text" id="passwordError"></p>
            </div>

            <div class="birthday">
                <label class="info">Birthday</label>
                <input type="date" id="birthday" name="birthday">
                <p class="error-text" id="birthdayError"></p>
            </div>

            <div class="gender-box">
                <label class="info"><input type="radio" name="gender" value="male"> Male</label>
                <label class="info"><input type="radio" name="gender" value="female"> Female</label>
                <p class="error-text" id="genderError"></p>
            </div>

            <button type="submit" id="butoni1">Register</button>
        </div>
    </form>
</div>

<script src="regjister.js"></script>
</body>
</html>
