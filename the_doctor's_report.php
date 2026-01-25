<?php

session_start();
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
  <link rel="stylesheet" href="the_doctor's_report.css">
  <link rel="icon" type="image/png" href="logo_head.png">
</head>
<body>

  <header id="navi">
    <div id="foto1">
        <img src="logo2.png" alt="Logo">
    </div>
    <nav id="elemente">
        <a href="home.html">Home</a>
        <a href="about_us.html">About us</a>
        <a href="products.html">Products</a>
        <a href="my_prescription.html">My prescription</a>
        <a href="LogIn.html">Log In</a>
    </nav>
  </header>

  <h1 class="title">The doctor's latest consultation report</h1>

  <div class="cards-wrapper">
    <div class="container">

        <div class="left-col">
            <div class="card2">
            <h2>Your Identity card / ID</h2>
            <img src="id_two.jpg" alt="ID image">
            <div class="id-button">
                <input type="text" id="id-number" placeholder="XXX-XXX-XXX">
            </div>
        </div>

        <div class="card">
            <h2>Medical Report</h2>
            <div class="card-content">
                <p><strong>Patient Name:</strong> [Insert Name]</p>
                <p><strong>Date:</strong> [Insert Date]</p>
                <p><strong>Doctor:</strong> [Insert Doctor's Name]</p>
                <hr>
                <p><strong>Reason for Consultation:</strong></p>
                <p>The patient presented with complaints of joint stiffness, mild inflammation, and nasal congestion.</p>
                <hr>
                <p><strong>Findings:</strong></p>
                <p>Clinical examination indicates musculoskeletal discomfort requiring anti-inflammatory support, as well as upper respiratory irritation requiring nasal spray treatment.</p>
                <hr>
                <p><strong>Recommendation:</strong></p>
                <p>It is advised that the patient use <strong>Flexibene Caps</strong> to help reduce inflammation and improve joint mobility.</p>
                <p>Additionally, <strong>Isomar Spray</strong> is recommended to relieve nasal congestion and support respiratory comfort.</p>
                <p>Other similar anti-inflammatory or nasal care products may be used as alternatives if necessary.</p>
                <hr>
                <p><strong>Follow-up:</strong></p>
                <p>The patient should monitor symptoms and return for consultation if musculoskeletal pain or nasal discomfort persists.</p>
            </div>
        </div>
      </div>

      <div id="produktet">
        
        <div class="search-box">
            <input type="text" placeholder="Search products...">
        </div>

        <div class="prod">
            <a href="product1.html">
                <img src="prod.avif" alt="Flexibene Caps" class="main">
                <hr>
                <h3>Flexibene Caps</h3>
            </a>
            <button class="shto">Add to cart</button>
        </div>

        <div class="prod">
            <a href="product2.html">
                <img src="prod2.avif" alt="Isomar Spray" class="main">
                <hr>
                <h3>Isomar Spray</h3>
            </a>
            <button class="shto">Add to cart</button>
        </div>
        </div>

    </div>
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

</body>
</html>
