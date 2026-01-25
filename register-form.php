<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="style_1.css">
    <link rel="icon" type="image/png"  href="logo_head.png">
</head>
<body>

    <header id="navi">
        <div id="foto1">
            <img src="logo2.png" alt="">
        </div>
        <nav id="elemente">
            <a href="home.html">Home</a>
            <a href="about_us.html">About us</a>
            <a href="products.html">Products</a>
            <a href="my_prescription.html">My prescription</a>
            <a href="LogIn.html">Log In</a>
        </nav>
    </header>

    <div class="container">

        <form action="" method="POST">
            <div class="register">
            <h2 id="tit">Register</h2>

            
                <div class="input-box">
                    <label class="info">Full Name</label>
                    <input type="text" id="fullname" placeholder="Enter your full name">
                    <p class="error-text" id="fullnameError"></p>
                </div>

                <div class="input-box">
                    <label class="info">Email</label>
                    <input type="text" id="email" placeholder="Enter your email">
                    <p class="error-text" id="emailError"></p>
                </div>

                <div class="input-box">
                    <label class="info">Password</label>
                    <input type="password" id="password" placeholder="Enter your password">
                    <p class="error-text" id="passwordError"></p>
                </div>

                <div class="birthday">
                    <label class="info">Birthday</label>
                    <div class="birthday-wrapper">
                        <input type="date" id="birthday" name="birthday">
                        <p class="error-text" id="birthdayError"></p>
                    </div>
                </div>

                <div class="gender-box">
                    <!-- <label class="info">Gender</label> -->
                    <div class="gender-wrapper">
                        <div class="gender-options">
                            <label class="info"><input type="radio" name="gender" value="male"> Male</label>
                            <label class="info"><input type="radio" name="gender" value="female"> Female</label>
                        </div>
                        <p class="error-text" id="genderError"></p>
                    </div>
                </div>

                <button type="submit" id="butoni1">Register</button>
           
        </div>
        </form>
        

        <div id="foto">
            <div id="tekst">
                <h4>Already have an account?</h4>
                <h3>Log in now</h3>
                <img src="foto3.png" alt="Foto" id="pic">
                <br>
                <input type="button" id="butoni" value="Log In">
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
<script src="regjister.js"></script>
</body>
</html>
