<?php

session_start();

if(!isset($_SESSION['user_ID']) && isset($_COOKIE['remember_user'])){
    $_SESSION['user_ID'] = $_COOKIE['remember_user'];
}

if(!isset($_SESSION['user_ID'])){
    header("Location: login.php");
    exit();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Prescription</title>
    <link rel="stylesheet" href="my_prescription.css">
    <link rel="icon" type="image/png"  href="logo_head.png">
</head>
<body>

<header id="navi">
    <div id="foto1">
        <img src="logo2.png" alt="Logo">
    </div>
    <nav id="elemente">
        <a href="home.php">Home</a>
        <a href="about_us.php">About us</a>
        <a href="products.php">Products</a>
        <a href="my_prescription.php">My prescription</a>
        <a href="logout.php">Log Out</a>
    </nav>
</header>

<h1 class="title">Would you like to add your prescription?</h1>

<div class="cards-wrapper">

    <div class="container">

        <div class="card">
            <h2>Submit your ID card</h2>
            <div class="card-content">
                <img src="id-card-3.jpg" alt="ID card">
                <ul class="checklist">
                    <li>Identity Number / ID</li>
                    <li>First and Last Name</li>
                    <li>Date of Birth</li>
                    <li>Personal Photo</li>
                    <li>Assess print quality</li>
                    <li>Inspect security features</li>
                    <li>Match photo to person</li>
                </ul>
            </div>
            <div class="submitt">
                <p>Please present your valid ID card to access our services.</p>
                <input type="button" id="button1" value="Submit">
            </div>
        </div>

        <div class="card2">
            <h2>Add your Identity Number / ID</h2>
            <img src="id_two.jpg" alt="ID image">
            <div class="id-button">
                <input type="text" id="id-number" placeholder="XXX-XXX-XXX">
                <input type="button" id="button2" value="Add">
            </div>
            <p class="error-text" id="idError"></p>
            <div class="tips">
                <h3 id="check">Check your ID</h3>
                <ul>
                    <li>Expiration date</li>
                    <li>Verify issuer details</li>
                    <li>Feel the card</li>
                    <li>Security Features</li>
                </ul>
            </div>
        </div>

    </div>

</div>

<footer class="footer">

    <div class="footer-container">

        <div class="footer-section">
            <img src="logo2.png" class="footer-logo" alt="Logo">
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

<script src="my_prescription.js"></script>

</body>
</html>
