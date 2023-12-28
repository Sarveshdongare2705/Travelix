<?php
// ...
session_start();
$loggedin = false;
if(isset($_SESSION['loggedin'])){
    $loggedin = true;
}
if ($loggedin) {
    $user_name = $_SESSION['username'];

    include 'dbconnect.php';
    $currentDate = date('Y-m-d'); 
    $sql_upcoming_tour = "SELECT * FROM `bookings` WHERE `user_name` = '$user_name' AND `check_in_date` >= '$currentDate' ORDER BY `check_in_date` ASC LIMIT 1";
    $result_upcoming_tour = mysqli_query($conn, $sql_upcoming_tour);

    if (mysqli_num_rows($result_upcoming_tour) > 0) {
        echo '<div class="upcoming-tour">';
        echo '<div class="heading">Upcoming Tour</div>';
        
        $row_upcoming_tour = mysqli_fetch_assoc($result_upcoming_tour);
        
        echo '<div class="tour-details">';
        echo '<div class="tour-detail">';
        echo '<div class="tour-content"><strong>Destination</strong></div>';
        echo '<div>' . $row_upcoming_tour['destination'] . '</div>';
        echo '<div class="tour-content"><strong>Check In Date</strong></div>';
        echo '<div>' . $row_upcoming_tour['check_in_date'] . '</div>';
        echo '</div>';
     
        echo '</div>';
        
        echo '</div>';
    } else {
        echo '<div class="upcoming-tour">No upcoming tours found for this user.</div>';
    }
}
// ...
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .upcoming-tour{
            font-size: 40px;
            margin: 10px;
            box-shadow: 0 .1rem 0.3rem rgba(0, 0, 0, 0.324);
            text-align: center;
            padding: 10px;
            border-radius: 20px;
        }
        .heading{
            margin-bottom: -200px;
            margin-top: -250px;
        }
        .tour-content{
            font-size: 30px;
            text-decoration: none;
        }
    </style>
    <link rel="stylesheet" href="homepage.css">
</head>
<body>
    
</body>
</html>
