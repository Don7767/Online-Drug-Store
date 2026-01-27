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
    <title>Flexibene Caps</title>
    <link rel="stylesheet" href="product1.css">
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

    <section id="sec">
        <section id="sec2">
            <div id="foto">
                <img src="prod5.avif" alt="">
            </div>
        </section>
        <section id="sec3">
            <div>
                <h1>Lotus Essential Balm 20G x 1</h1>
                <h3>Lotus</h3>
                <p>
                    A multifunctional and effective balm for relieving all 
                    kinds of pain, including headaches, joint pain, muscle 
                    pain, and arthritis. Thanks to natural ingredients such 
                    as menthol, camphor, and clove oil, it has anti-inflammatory 
                    and analgesic properties. In addition to easing pain, it 
                    provides a cooling sensation and soothes itching from mosquito 
                    bites, while also helping treat skin redness. With eucalyptus 
                    oil in its formula, it helps relieve nasal congestion and sinus
                    discomfort by clearing the airways.
                </p>
                <div id="fav-price">
                    <img src="fav.png" alt="" id="fav">
                    <h3 style="color: black;">3.20 €</h3>
                </div>
                <div id="shto-pay">
                    <div id="shto" class="cartPay">
                        <h4>Add to cart</h4>
                        <img src="cart.png" alt="">
                    </div>
                    <div id="pay" class="cartPay">
                        <h4>Pay Now</h4>
                    </div>
                </div>
                <div id="quantity">
                    <div class="direct" id="majt">
                        <img src="left.png" alt="">
                    </div>
                    <div>
                        <h2 id="sasi">1</h2>
                    </div>
                    <div class="direct" id="djatht">
                        <img src="right.png" alt="">
                    </div>
                </div>
                <p id="max">Maximun quantity of 10</p>
            </div>
        </section>
    </section>

    <input type="submit" value="Go Back" id="butoni3">

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

    <script src="product.js"></script>
</body>
</html>