<?php 
session_start();
$loggedin = false;
if(isset($_SESSION['loggedin'])){
    include 'dbconnect.php';
    $loggedin = true;
    $user_name = $_SESSION['username'];
    $sql = "SELECT *,DATE(dt) as date_only FROM `users` WHERE `user_name` = '$user_name'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    $mobile = $row['mobile'];
    $odob = $row['dob'];
    $dob = date('d/m/Y', strtotime($odob));
    $country = $row['country'];
    $originalDate = $row['date_only'];
    $newDate = date('d/m/Y', strtotime($originalDate));
    $dt = $newDate;
    $sql1 = "SELECT COUNT(*) as noofbookings FROM `bookings` WHERE `user_name` = '$user_name'";
    $result1 = mysqli_query($conn, $sql1);
    $row = mysqli_fetch_assoc($result1);
    $nbookings = $row['noofbookings'];
    $sql2 = "SELECT COUNT(*) as noofreviews FROM `reviews` WHERE `user_name` = '$user_name'";
    $result2 = mysqli_query($conn, $sql2);
    $row = mysqli_fetch_assoc($result2);
    $nreviews = $row['noofreviews'];}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travelix|Account</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <link rel="stylesheet" href="homepage.css">
    <link rel="stylesheet" href="book.css">
</head>
<body>
    <section class="header">
        <a href="home.php" class="logo">Travelix.</a>
        <nav class="navbar">
            <a  href="home.php" class="navbar_buttons">Home</a>
            <a  href="aboutus.php" class="navbar_buttons">AboutUs</a>
            <a href="places.php" class="navbar_buttons">Packages</a>
            <a href="bookings.php" class="navbar_buttons">Account</a></nav>
        <div class="buttons">
            <?php if($loggedin){echo '<a href="logout.php" class = "btn" style = "background-color :red;">Logout</a>';} else{ echo '<a href="signin.php" class = "btn">SignIn</a>';} ?></div>
    </section>
    <div class="account">
    <div class="profile">
        <div class="profile-section">
        <div class="profile-logo"><i class="far fa-user"></i></div>
        <div class="profile-name">
        <div class="welcome">
            Welcome</div>
        <div class="name">
        <?php  if($loggedin){echo $user_name;} else{ echo '';} ?></div></div></div>
        <div class="details">
            <div class="detail">
                <div class="detail-name">
                    Date Of Birth
                </div>
                <div class="detail-value">
                    <?php  if($loggedin){echo $dob;} else{ echo '';} ?></div></div>
            <div class="detail">
                <div class="detail-name">
                    Mobile No.</div>
                <div class="detail-value">
                <?php  if($loggedin){echo $mobile;} else{ echo '';} ?></div>                </div>
            <div class="detail">
                <div class="detail-name">
                    Country</div>
                <div class="detail-value">
                <?php  if($loggedin){echo $country;} else{ echo '';} ?></div></div>
            <div class="detail">
            <div class="detail-name">
                Account Created On</div>
            <div class="detail-value">
            <?php  if($loggedin){echo $dt;} else{ echo '';} ?></div></div>
            <div class="detail">
            <div class="detail-name">
                No. of <a href="#booking-data">Bookings</a></div>
            <div class="detail-value">
            <?php  if($loggedin){echo $nbookings;} else{ echo '';} ?>
            </div>
            </div>
            <div class="detail">
            <div class="detail-name">
                No. of <a href="#reviews-data">Reviews</a>
            </div>
            <div class="detail-value">
            <?php  if($loggedin){echo $nreviews;} else{ echo '';} ?>
            </div></div></div></div>
    <div class="upcoming">
        <iframe src="upcoming_tour.php" frameborder="0" scrolling="no" width="600px" height="520px" style="margin-top: 100px;"></iframe>
    </div></div><br><br>
    <div class="heading">My Bookings</div>
    <?php
    if($loggedin){
        $user_name = $_SESSION['username'];
    include 'dbconnect.php'; 
    $sql = "SELECT * FROM `bookings` WHERE `user_name` = '$user_name'";
    $result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo '<div id="booking-data">';
        echo '<div class="booking-details">';
        echo '<div class="book-detail">';
        echo '<div class="book-content"><strong>Destination</strong></div>';
        echo '<div>'.$row['destination'].'</div>';
        echo '</div>';
        echo '<div class="book-detail">';
        echo '<div class="book-content"><strong>Country</strong></div>';
        echo '<div>'.$row['country'].'</div>';
        echo '</div>';
        echo '<div class="book-detail">';
        echo '<div class="book-content"><strong>Mobile Number</strong></div>';
        echo '<div>'.$row['mobile_number'].'</div>';
        echo '</div>';
        echo '<div class="book-detail">';
        echo '<div class="book-content"><strong>Email</strong></div>';
        echo '<div>'.$row['email'].'</div>';
        echo '</div>';
        echo '<div class="book-detaila">';
        echo '<div class="book-content"><strong>Residential Address</strong></div>';
        echo '<div>'.$row['address'].'</div>';
        echo '</div>';
        echo '<div class="book-detail">';
        echo '<div class="book-content"><strong>Number Of Guests</strong></div>';
        echo '<div>'.$row['num_guests'].'</div>';
        echo '</div>';
        echo '<div class="book-detail">';
        echo '<div class="book-content"><strong>CHeck-in Date</strong></div>';
        echo '<div>'.$row['check_in_date'].'</div>';
        echo '</div>';
        echo '<div class="book-detail">';
        echo '<div class="book-content"><strong>Check-out Date</strong></div>';
        echo '<div>'.$row['check_out_date'].'</div>';
        echo '</div>';
        echo '<div class="book-detail">';
        echo '<div class="book-content"><strong>Date of Booking</strong></div>';
        echo '<div>'.$row['bookings_date'].'</div>';
        echo '</div>';
        echo '</div>';
        $imageName = $row['destination'] . '.jpg'; 
        $imageUrl = 'images/' . $imageName;
        echo '<div class="booking-image"><img src="' . $imageUrl . '" alt="' . $row['destination'] . '"></div>';
        echo '<div class="cancel-book">';
        echo '<form method="POST" action="delete_booking.php">';
        echo '<input type="hidden" name="booking_id" value="' . $row['bookings_id'] . '">';
        echo '<br><br>';
        echo '<button type="submit" class="btn">Cancel Trip</button>';
        echo '</form>';
        echo '</div>';
        echo '</div>'; }
} else {
    echo "No bookings found for this user.";
}}
?>  
    <script src="places.js"></script>
</body></html>