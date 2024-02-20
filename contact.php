<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="contact.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
<section id="header">
        <a href="#"><img class="logo" src="img/logo.webp"></a>
        <div>
            <?php
        $count=0;
         if(isset($_SESSION['cart']))
        {
        $count=count($_SESSION['cart']);
        }?>
            <ul class="navbar">
                <li><a  href="index.php">Home</a></li>
                <li><a href="shop.php">Shop</a></li>
                <li><a href="blog.php">Blog</a></li>
                <li><a href="about.php">About Us</a></li>
                <li><a class="active" href="contact.php">Contact</a></li>
                
                <li><a href="sign.php">Sign In</a></li>
                <li><a class='a' href="mycart.php" ><i class='bx bxs-shopping-bag'></i>My Cart(<?php echo $count ?>)</a></li>
            </ul>
        </div>
    </section>
    <section>
        <img src="img/wh.jpg" height="100px" >
    </section>
    <footer class="sectiop-p1">
        <div class="col">
            <img src="img/logo.webp" width="90px">
            <br><br><br> <br><br><br>
            <h4>Contact</h4>
            <p><strong>Address:</strong>543, Rampur Jabalpur 'Madhay Pradesh'</p>
            <p><strong>Phone:</strong>+917162394326, +918475630572</p>
            <p><strong> Timing & Day:</strong> 24/7</p>
            <div class="follow">
                <h4>Follow Us</h4>
                <div class="icon">
                    <a href="#"><i class='bx bxl-facebook'></i></a>
                    <a href="#"><i class='bx bxl-instagram'></i></a>
                    <a href="#"><i class='bx bxl-twitter'></i></a>
                    <a href="#"><i class='bx bxl-youtube'></i></a>
                </div>
            </div>
        </div>
        <div class="col">
            <h4>About Us</h4>
            <a href="#">About us</a>
            <a href="#">Delevery Information</a>
            <a href="#">Privacy Policy</a>
            <a href="#">Terms & Condition</a>
            <a href="#">Contact Us</a>
        </div>
        <div class="col">
            <h4>My Account</h4>
            <a href="#">Sigh In</a>
            <a href="#">View Cart</a>
            <a href="#">My Watchlist</a>
            <a href="#">Track My Order</a>
            <a href="#">Help</a>
        </div>
        <div class="col-install">
            <h4>Install App</h4>
            <p>From App Store Or Google Store</p>
            <div class="row">
                <img src="img/appstore1.png" width="150px">
                <img src="img/googlestore.png" width="180px">
            </div>
        
        <p>Secure Payment Gateways</p>
        <img src="img/pay.jpg" width="280px">
        </div>

    </footer>
    <section>
        <div class="line1">
            <img src="img/black.webp">
        </div>
    </section>
</body>
</html>