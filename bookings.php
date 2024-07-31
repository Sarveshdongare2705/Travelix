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
    <title>Travelix|Bookings</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    
    <link rel="stylesheet" href="homepage.css">
    <style>
        .booking-container {
            border: 1px solid #ccc;
            padding: 7px;
            margin: 10px;
            display: flex;
            justify-content: space-between;
            flex-wrap: wrap;
        }
        

        /* Style for the booking details */
        .booking-details {
            flex: 1;
            padding: 10px;
        }

        /* Style for the booking image */
        .booking-image {
            flex: 1;
            text-align: center;
        }

        /* Style for the image */
        .booking-image img {
            max-width: 100%;
            max-height: 400px; /* You can adjust the height as needed */
            border: 1px solid #ddd;
            border-radius: 5px;
        }
    </style>
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
    <div class="heading" style="background: url(images/img14.jpg);">
        <span>Bookings</span>
    </div>
    <br>
    <br>

    <?php
    // Get the logged-in user's username
    if($loggedin){
        $user_name = $_SESSION['username'];

    include 'dbconnect.php'; 

    $sql = "SELECT * FROM `bookings` WHERE `user_name` = '$user_name'";
    $result = mysqli_query($conn, $sql);

    // ...
// ...
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo '<div class="booking-container">';
    
        echo '<div class="booking-details">';
        echo '<p><strong>Destination:</strong> ' . $row['destination'] . '</p>';
        echo '<p><strong>Country:</strong> ' . $row['country'] . '</p>';
        echo '<p><strong>Mobile Number:</strong> ' . $row['mobile_number'] . '</p>';
        echo '<p><strong>Email:</strong> ' . $row['email'] . '</p>';
        echo '<p><strong>Current Address:</strong> ' . $row['address'] . '</p>';
        echo '<p><strong>Number of Guests:</strong> ' . $row['num_guests'] . '</p>';
        echo '<p><strong>Check-in Date:</strong> ' . $row['check_in_date'] . '</p>';
        echo '<p><strong>Check-out Date:</strong> ' . $row['check_out_date'] . '</p>';
    
        if (isset($row['bookings_date'])) {
            echo '<p><strong>Booking Date:</strong> ' . $row['bookings_date'] . '</p>';
        }
        
        echo '<form method="POST" action="delete_booking.php">';
        echo '<input type="hidden" name="booking_id" value="' . $row['bookings_id'] . '">';
        echo '<br><br>';
        echo '<button type="submit" class="btn">Cancel Trip</button>';
        echo '</form>';
        
        echo '</div>';
        
        $imageName = $row['destination'] . '.jpg'; 
        $imageUrl = 'images/' . $imageName;

        echo '<div class="booking-image"><img src="' . $imageUrl . '" alt="' . $row['destination'] . '"></div>';
        echo '</div>';
    }
} else {
    echo "No bookings found for this user.";
}
// ...




    }
?>

    
    











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