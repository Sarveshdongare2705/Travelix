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
    <title>Travelix|Aboutus</title>
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

    <div class="heading" style="background: url(images/img6.jpg);">
        <span>About Us</span>
    </div>
<br><br><br>
    <section class="about">
        <h3>Our Story</h3><br>
        <div class="story">
    

Welcome to Travelix, your passport to a world of adventure, discovery, and unforgettable experiences! At Travelix, we're passionate about travel and dedicated to making your journeys extraordinary.

Our mission is simple: to inspire and empower travelers like you to explore the world. We believe that travel has the power to broaden horizons, create lasting memories, and connect people from all walks of life. Travelix is here to help you embark on remarkable journeys, whether you're a seasoned explorer or a first-time traveler.

What Sets Us Apart

Expertise: With years of experience in the travel industry, our team of travel enthusiasts and experts curate exceptional travel experiences. We know the destinations, the hidden gems, and the local secrets that transform a trip into an adventure.

Personalization: We understand that no two travelers are the same. That's why we offer personalized travel planning, tailoring each journey to your unique preferences, interests, and needs. Your dream vacation is our top priority.
Your trust is invaluable to us. We provide verified reviews, transparent pricing, and secure bookings to ensure your peace of mind throughout the travel process.From flights and accommodations to tours and transportation, Travelix is your all-in-one travel partner. We streamline the booking process so you can focus on what matters most – enjoying your trip.
Our website is more than a booking platform; it's a travel resource hub. Explore our travel guides, packing tips, visa information, and insider insights to plan your journeys with confidence.
        </div>
    </section><br><br>

    <section class="about">
        <h3>Why Choose Us</h3><br>
        <div class="content">
            <h4>Personalized Travel Experiences</h4><br>
            <p>Travelix is committed to tailoring your journeys to your unique preferences. Our expert travel advisors work closely with you to create customized itineraries, ensuring your trip aligns perfectly with your interests, budget, and schedule.</p>
        </div>
        <div class="content">
            <h4>Trust and Transparency</h4><br>
            <p>Your trust is paramount to us. We provide verified reviews, transparent pricing, and secure bookings to ensure your peace of mind throughout the travel process. You can rely on Travelix for honest and reliable information.</p>
        </div>
        <div class="content">
            <h4>Comprehensive Travel Services</h4><br>
            <p>From flights and accommodations to tours and transportation, Travelix is your all-in-one travel partner. We simplify the booking process, allowing you to focus on what matters most – enjoying your trip without the hassle.</p>
        </div>
        <div class="content">
            <h4>Expertise and Local Insights</h4><br>
            <p>Our team of travel enthusiasts and experts possesses in-depth knowledge of destinations, hidden gems, and local secrets. We share insider insights to enhance your travel experience and help you uncover the essence of each place you visit.</p>
        </div>
        <div class="content">
            <h4>Inspiration and Resources</h4><br>
            <p>Beyond booking, Travelix offers a wealth of travel resources, including travel guides, packing tips, visa information, and captivating stories of travelers like you. We aim to inspire your wanderlust and provide you with the tools to make your adventures unforgettable.</p>
        </div>
    </section>

    <br><br>











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
      
</body>
</html>