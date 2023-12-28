<?php
session_start();
$loggedin = false;
$showalert = false;
$showerror = false;
if(isset($_SESSION['loggedin'])){
    $loggedin = true;
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $user_name = $_SESSION['username'];
        $destination = $_POST['destination'];
        $country = $_POST['country'];
        $rating = $_POST['rating'];
        $review = $_POST['review'];
        include 'dbconnect.php'; 
        $sql = "INSERT INTO `reviews` (`user_name`, `destination`, `rating`,`review`)
                VALUES ('$user_name', '$destination', '$rating','$review');";
        if (mysqli_query($conn, $sql)) {
           header("location: book.php?destination=$destination&country=$country");}}}
?>