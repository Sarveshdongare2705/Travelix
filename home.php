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
    <title>Travelix|Home</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    
    <link rel="stylesheet" href="homepage.css">
</head>
<body>
    <section class="header">
        <a href="home.php" class="logo">Travelix.</a>
        <nav class="navbar">
            <a  href="home.php" class="navbar_buttons">Home</a>
            <a  href="aboutus.php" class="navbar_buttons">AboutUs</a>
            <a href="places.php" class="navbar_buttons">Packages</a>
            <a href="bookings.php" class="navbar_buttons">Account</a>
        </nav>
        <div class="buttons">
            <?php if($loggedin){echo '<a href="logout.php" class = "btn" style = "background-color :red;">Logout</a>';} else{ echo '<a href="signin.php" class = "btn">SignIn</a>';} ?>
        </div>
    </section>
    <section class="home">
        <div class="swiper home-slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide slide" style="background:url(images/Sydney.jpg) no-repeat;">
                    <div class="content"><span>
                        Explore,Discover,Travel
                    </span>
                    <h3>Travel around the World</h3>
                    <a href="places.php" class="btn">Discover More</a>
                    </div>
                </div>
                <div class="swiper-slide slide" style="background:url(images/Paris.jpg) no-repeat;">
                    <div class="content"><span>
                        Explore,Discover,Travel
                    </span>
                    <h3>Discover New Places</h3>
                    <a href="places.php" class="btn">Discover More</a>
                    </div>
                </div>
                <div class="swiper-slide slide" style="background:url(images/img5.jpeg) no-repeat;">
                    <div class="content"><span>
                        Explore,Discover,Travel
                    </span>
                    <h3>Enjoy the Beauty of Nature</h3>
                    <a href="places.php" class="btn">Discover More</a>
                    </div>
                </div>
                <div class="swiper-slide slide" style="background:url(images/img1.jpg) no-repeat;">
                    <div class="content"><span>
                        Explore,Discover,Travel
                    </span>
                    <h3>Get Lost in the Magic of Travel.</h3>
                    <a href="places.php" class="btn">Discover More</a>
                    </div>
                </div>
                <div class="swiper-slide slide" style="background:url(images/img4.jpeg) no-repeat;">
                    <div class="content"><span>
                        Explore,Discover,Travel
                    </span>
                    <h3>Embark on a journey of a lifetime</h3>
                    <a href="places.php" class="btn">Discover More</a>
                    </div>
                </div>
                <div class="swiper-slide slide" style="background:url(images/img12.jpg) no-repeat;">
                    <div class="content"><span>
                        Explore,Discover,Travel
                    </span>
                    <h3>Welcome to a world of curated travel experiences</h3>
                    <a href="places.php" class="btn">Discover More</a>
                    </div>
                </div>
                <div class="swiper-slide slide" style="background:url(images/img13.jpg) no-repeat;">
                    <div class="content"><span>
                        Explore,Discover,Travel
                    </span>
                    <h3>Get ready to make memories that last a lifetime </h3>
                    <a href="places.php" class="btn">Discover More</a>
                    </div>
                </div>
                <div class="swiper-slide slide" style="background:url(images/img15.jpg) no-repeat;">
                    <div class="content"><span>
                        Explore,Discover,Travel
                    </span>
                    <h3>Your journey begins here</h3>
                    <a href="places.php" class="btn">Discover More</a>
                    </div>
                </div>
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
    </section>
<br><br><br>
<div id="greet"><div id="greeting"></div><div id="name"><?php  if($loggedin){echo $_SESSION['username'];} else{ echo '';} ?></div></div>
<br><br><br>

    <section class="home-about">
        <div class="image">
            <img src="images/img10.jpg" alt="">
        </div>
        <div class="content">
            <h3>About Us</h3>
            <p>Welcome to Travelix, your gateway to a world of adventures and unforgettable journeys. At Travelix, we're passionate about making your travel dreams a reality. Our mission is simple: to provide you with access to an array of meticulously crafted travel packages, diverse destinations, and the latest weather data to help you plan your trips with confidence. Whether you seek the thrill of adventure, the serenity of a beach getaway, the awe of monumental and historical sites, the heights of hill climbing and hiking, or the magic of snow-covered landscapes, Travelix has it all. We specialize in turning your wanderlust into cherished memories. Discover more about us and embark on your next incredible journey by clicking "Read More" below</p>
            <br>    
            <a href="aboutus.php">Read More</a>
        </div>
    </section>

    <br><br><br>
    <section class="services">
        <h1 class="heading-title">Our Services</h1>
        <br><br><br>
        <div class="box-container" id="service-container">
        </div>
    </section>
    <br><br><br>
    <section class="top-places"><br>
        <h1 class="heading-title">Top Places</h1>
        <br><br><br>
        <div class="dynamic-box">
            <div class='box'>
                <div class="image">
                    <img src="images/QueensTown.jpg" alt="">
                </div>
                <div class="content">
                    <h3>QueensTown</h3>
                    <p style="font-size: 10px;">Experience the thrill of a lifetime in these adventure-packed destinations. From breathtaking landscapes to heart-pounding activities, your adventure awaits</p>
                    <a href="places2.php?category=adventure" class="btn">Check More</a>
                </div>
            </div>
            <div class="box" >
                <div class="image">
                    <img src="images/Kruger Park.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Kruger Park</h3>
                    <p style="font-size: 10px;">Get up close and personal with nature's most magnificent creatures. Explore wildlife safaris that offer unparalleled encounters with the animal kingdom</p>
                    <a href="places2.php?category=wildlifesafaris" class="btn">Check More</a>
                </div>
            </div>
            <div class="box">
                <div class="image">
                    <img src="images/Venice.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Venice</h3>
                    <p style="font-size: 10px;">Discover the world's most vibrant cities. Dive into rich cultures, iconic landmarks,iconic cities and thier culture and bustling urban adventures</p>
                    <a href="places2.php?category=cityexplorations" class="btn">Check More</a>
                </div>
            </div>
            <div class="box">
                <div class="image">
                    <img src="images/Varanasi.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Varanasi</h3>
                    <p style="font-size: 10px;">Embark on cultural journeys that bridge the past and present. Immerse yourself in diverse traditions, history,heritages beautiful and local charm.</p>
                    <a href="places2.php?category=cultural" class="btn">Check More</a>
                </div>
            </div>
            <div class="box">
                <div class="image">
                    <img src="images/Phuket Beaches.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Phuket Beaches</h3>
                    <p style="font-size: 10px;">Escape to pristine shores and tropical paradises. Unwind on sun-kissed beaches and explore seaside wonders.Dive into this beauty of nature</p>
                    <a href="places2.php?category=beachgateways" class="btn">Check More</a>
                </div>
            </div>
            <div class="box">
                <div class="image">
                    <img src="images/Rovaniemi.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Rovanimemi</h3>
                    <p style="font-size: 10px;">Embrace the magic of winter wonderlands. From snow-covered landscapes to cozy getaways, experience the enchantment of winter escapes.</p>
                    <a href="places2.php?category=winterescapes" class="btn">Check More</a>
                </div>
            </div>
            <div class="box">
                <div class="image">
                    <img src="images/Taj Mahal.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Taj Mahal</h3>
                    <p style="font-size: 10px;">Explore the seven wonders of our world's marvels. Visit iconic landmarks and UNESCO heritage sites that captivate the history and  imagination.</p>
                    <a href="places2.php?category=wondersofworld" class="btn">Check More</a>
                </div>
            </div>
        </div>
        <div class="show-more">
            <a href="places.php" class="btn">Load More</a>
        </div>
    </section>
    <br><br>
    <section class="whats-new">
        <div class="heading-title">What's New</div>
        <div class="content">
            <pre>Travelix has now created an easy way to check weather of various places before you travel.
Sponsored by Weatherly.
    Check weather of your desired place before you travel there.</pre><br><br>
            <iframe src="weather.html" width="100%" height="700px" scrolling = "no"></iframe>
        </div><br>
    </section>
<br><br><br>
    <iframe src="footer.html" frameborder="0" width="1400px" height="500px"></iframe>
    <script src="home.js"></script>
</body>
</html>