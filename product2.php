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
                <img src="prod2.avif" alt="">
            </div>
        </section>
        <section id="sec3">
            <div>
                <h1>Isomar Spray for nose allergies 30 Ml</h1>
                <h3>ISOMAR</h3>
                <p>
                    This allergy-relief spray is made with isotonic seawater to
                    gently cleanse the nasal passages and reduce allergy symptoms
                    like congestion, sneezing, and irritation. Its natural formula 
                    is suitable for daily use and helps soothe and protect the nasal 
                    mucosa without causing dryness. Ideal for people prone to allergies 
                    or sensitivities, it offers immediate relief and helps you breathe more 
                    easily.
                <div id="fav-price">
                    <img src="fav.png" alt="" id="fav">
                    <h3 style="color: black;">4.00 €</h3>
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