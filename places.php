<?php 
session_start();
$loggedin = false;
if(isset($_SESSION['loggedin'])){
    $loggedin = true;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travelix|Packages</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    
    <link rel="stylesheet" href="homepage.css">
</head>
<body>
    <!--header part-->
    <!--header part-->
    <section class="header">
        <a href="home.php" class="logo">Travelix.</a>
        <nav class="navbar">
            <a  href="home.php" class="navbar_buttons">Home</a>
            <a  href="aboutus.php" class="navbar_buttons">AboutUs</a>
            <a href="places.php" class="navbar_buttons">Packages</a>
            <a href="bookings.php" class="navbar_buttons">Bookings</a>
        </nav>
        <div class="buttons">
            <?php if($loggedin){echo '<a href="logout.php" class = "btn" style = "background-color :red;">Logout</a>';} else{ echo '<a href="signin.php" class = "btn">SignIn</a>';} ?>
        </div>
    </section>
    <div class="heading" style="background: url(images/img7.jpg);">
        <span>Packages</span>
    </div>
    <br>
    <br>

    <section class="categories">
        <h2>Top Categories</h2><br><br>
        <div class="category">
                <div class="image" style="background: url('images/amalficoast.jpg');"><h3>Adventure Travel</h3>
                    <a href="places2.php?category=adventure" class="btn">Check Places</a>
                </div>

        <br><br>
        <div class="category">

            <div class="image" style="background: url('images/ws.jpg');"><h3>Wildlife Safaris</h3>
                <a href="places2.php?category=wildlifesafaris" class="btn">Check Places</a>
            </div>
            
            
    </div><br>
    <br><br>
    <div class="category">

        <div class="image" style="background: url('images/cityexplorations.jpg');"><h3>City Explorations</h3>
            <a href="places2.php?category=cityexplorations" class="btn">Check Places</a>
        </div>
        
        
</div><br>
<br><br>
        <div class="category">
                <div class="image" style="background: url('images/ce.jpg');"><h3>Cultural Exploration</h3>
                    <a href="places2.php?category=cultural" class="btn">Check Places</a>
                </div>
                

        </div><br>
        <br><br>
        <div class="category">

                <div class="image" style="background: url('images/bg.jpg');"><h3>Beach Getaways</h3>
                    <a href="places2.php?category=beachgateways" class="btn">Check Places</a>
                </div>
                
               
        </div><br>
    <br><br>
        <div class="category">

                <div class="image" style="background: url('images/Rovaniemi.jpg');"><h3>Winter Escapes</h3>
                    <a href="places2.php?category=winterescapes" class="btn">Check Places</a>
                </div>
                
        </div><br>
        <br><br>
        <div class="category">

            <div class="image" style="background: url('images/TajMahal.jpg');"><h3>Wonders of the world</h3>
                <a href="places2.php?category=wondersofworld" class="btn">Check Places</a>
            </div>
            
    </div>
    <br><br>
    <br>
    </section>
    











   <!--footer part-->
   <section class="footer">
        <div class="container">
            <div class="box">
                <h3>Quick Links</h3>
                <a  href="home.php" ><i class="fas fa-angle-right"></i>Home</a>
                <a href="places.php" ><i class="fas fa-angle-right"></i>Packages</a>
                <a href="bookings.php" ><i class="fas fa-angle-right"></i>Bookings</a>
                <a href="weather.php" ><i class="fas fa-angle-right"></i>Weather</a> 
            </div>
            <div class="box">
                <h3>Extra Links</h3>
                <a  href="#" ><i class="fas fa-angle-right"></i>About Us</a>
                <a href="#" ><i class="fas fa-angle-right"></i>Ask Questions</a>
                <a href="#" ><i class="fas fa-angle-right"></i>Feedback</a>
                <a href="#" ><i class="fas fa-angle-right"></i>Terms and conditions</a> 
            </div>
            <div class="box">
                <h3>Contact Info</h3>
                <a  href="#" ><i class="fas fa-phone"></i>+123-456-7890</a>
                <a href="#" ><i class="fas fa-phone"></i>+111-222-3334</a>
                <a href="#" ><i class="fas fa-envelope"></i>travelix@gmail.com</a>
                <a href="#" ><i class="fas fa-map"></i>Mumbai_IN - 400072</a> 
            </div>
            <div class="box">
                <h3>Follow Us</h3>
                <a  href="#"><i class="fab fa-facebook"></i>Facebook</a>
                <a href="#"><i class="fab fa-instagram"></i>Instagram</a>
                <a href="#"><i class="fab fa-twitter"></i>Twitter</a>
                <a href="#"><i class="fab fa-youtube"></i>Youtube</a> 
            </div>
        </div>
        <hr>
        <div class="creator">Created by <span>Sarvesh Dongare</span> | all rights reserved</div>
    </section>
      
    <script src="places.js"></script>
</body>
</html>