<?php
session_start();

if (isset($_SESSION['loggedin'])) {
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['booking_id'])) {
        include 'dbconnect.php';

        $booking_id = $_POST['booking_id'];

        // Perform the database query to delete the booking
        $sql = "DELETE FROM `bookings` WHERE `bookings_id` = '$booking_id'";
        $result = mysqli_query($conn, $sql);

        if ($result) {
            // Booking successfully deleted
            header('Location: bookings.php');
            exit();
        } else {
            echo "Error deleting booking: " . mysqli_error($conn);
        }

        mysqli_close($conn);
    } else {
        echo "Invalid request.";
    }
} else {
    header('Location: signin.php'); // Redirect to the login page if not logged in
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <script src="deletebooking.js"></script>
</body>
</html>
