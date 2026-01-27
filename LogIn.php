<?php

session_start();

include_once 'database.php';
include_once 'user.php';

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $db = new Database();
    $connection = $db->getConnection();
    $user = new User(db: $connection);

    $email = $_POST['email'];
    $password = $_POST['password'];

    if($user->login(email: $email, password: $password)){
        $userID = $_SESSION['user_ID'];

        if(isset($_POST['remember'])){
            setcookie("remember_user", $userID, time() + 3600, "/");
        }

        header("Location: home.php");
        exit();
    }else{
        echo "<script>alert('Invalid login credentials!');</script>";
    }
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In</title>
    <link rel="stylesheet" href="LogIn.css">
    <link rel="icon" type="image/png"  href="logo_head.png">
</head>
<body>
    <header id="navi">
        <div id="foto1">
            <img src="logo2.png" alt="">
        </div>
        <nav id="elemente">
            <a href="home.php">Home</a>
            <a href="about_us.php">About us</a>
            <a href="products.php">Products</a>
            <a href="my_prescription.php">My prescription</a>
            <!-- <a href="LogIn.html">Log In</a> -->
        </nav>
    </header>

    <div class="container">
        <form action="login.php" method="POST">
            <div id="foto">
                <div id="tekst">
                    <h4>You don't have an account?</h4>
                    <h3>Create one now</h3>
                    <img src="foto1.webp" alt="Foto" id="pic">
                    <br>
                    <input type="button" name="buton" id="butoni" value="Sign up">
                </div>
            </div>
        </form>

    <form action="LogIn.php" method="POST">
        <div class="login">

            <h2>Log In</h2>

            <div class="form-control">
                <label class="info">Email</label>
                <input type="text" id="username" placeholder="Email" name="email">
                <p class="error-text" id="userError"></p>
            </div>

            <div class="form-control">
                <label class="info">Password</label>
                <input type="password" id="password" placeholder="Password" name="password">
                <p class="error-text" id="passError"></p>
            </div>

            <div class="remember">
                <label id="qeku1">Remember me</label>
                <input type="checkbox" id="qeku" name="remember">
            </div>

            <div class="btn-wrapper">
                <input type="submit" id="butoni1" value="Log In">
            </div>

        </div>
    </form>

</div>

    <footer class="footer">
    <div class="footer-container">

        <div class="footer-section">
            <img src="logo2.png" alt="Health Bloom Logo" class="footer-logo">
            <p class="footer-text">
                Health Bloom — your trusted partner for health, wellness  
                and quality medical products.  
            </p>
        </div>

        <div class="footer-section">
            <h3>About Us</h3>
            <ul>
                <li><a href="about_us.html">Who are we</a></li>
                <li><a href="#">Our products</a></li>
                <li><a href="#">Our locations</a></li>
            </ul>
        </div>

        <div class="footer-section">
            <h3>Contact Us</h3>
            <ul>
                <li><a href="#">Customer care</a></li>
                <li>+383 01 234 567</li>
                <li>Monday - Saturday<br>09:00 - 19:00</li>
            </ul>
        </div>

    </div>

    <div class="footer-bottom">
        <p>© 2025 Health Bloom — All rights reserved.</p>
    </div>
</footer>

<script src="LogIn.js"></script>
</body>
</html>