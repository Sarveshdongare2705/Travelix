<?php 
session_start();
$loggedin = false;
$showalert = false;
$showerror = false;
if(isset($_SESSION['loggedin'])){
    $loggedin = true;
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $user_name = $_SESSION['username'];
        $destination = $_GET['destination'];
        $country = $_GET['country'];
        $mobile_number = $_POST['form_mobile'];
        $email = $_POST['form_email'];
        $address = $_POST['form-address'];
        $num_guests = $_POST['form_nog'];
        $check_in_date = $_POST['form_checkin'];
        $check_out_date = $_POST['form_checkout'];
        include 'dbconnect.php'; 
        $sql = "INSERT INTO `bookings` (`user_name`, `destination`, `country`, `mobile_number`, `email`,`address`,`num_guests`, `check_in_date`, `check_out_date`)
                VALUES ('$user_name', '$destination', '$country', '$mobile_number', '$email','$address', $num_guests, '$check_in_date', '$check_out_date');";
    
        if (mysqli_query($conn, $sql)) {
            $showalert = true;
        } else {
            $showerror = true;}}}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travelix|BookPlace</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <link rel="stylesheet" href="homepage.css">
    <link rel="stylesheet" href="book.css">
</head>
<body>
<?php 
if($showalert){
    echo '<div class="alert alert-success" role="alert" style="background-color: lightgreen; text-align: center">
  Booked Successully!
</div>';}
if($showerror){
    echo '<div class="alert alert-warning" role="alert" style="background-color: red; text-align: center">
  An error occured while booking
</div>';}

?>
    <section class="header">
        <a href="home.php" class="logo">Travelix.</a>
        <nav class="navbar">
            <a  href="home.php" class="navbar_buttons">Home</a>
            <a  href="aboutus.php" class="navbar_buttons">AboutUs</a>
            <a href="places.php" class="navbar_buttons">Packages</a>
            <a href="bookings.php" class="navbar_buttons">Account</a>
        </nav>
        <div class="buttons">
            <?php if($loggedin){echo '<a href="logout.php" class = "btn" style = "background-color :red;">Logout</a>';} else{ echo '<a href="signin.php" class = "btn">SignIn</a>';} ?></div>
    </section>
    <div class="container1">
        <div class="column1">
            <img src="" alt="" class="book-image">
            <div class="row-elements">
                <div class="headings">
                    <i class="fas fa-map-marker-alt" id="location"></i>
                    <div id="destination_name"></div>
                    <div id="country_name"></div></div>
                <div class="headings">
                    <div class="rating">
<?php
    include 'dbconnect.php'; 
    $destination = $_GET['destination'];
    $sql = "SELECT AVG(rating) AS avg_rating FROM `reviews` WHERE `destination` = '$destination'";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        $row = mysqli_fetch_assoc($result);
        $averageRating = $row['avg_rating'];
        function generateStars($rating) {
            $stars = '';
            $fullStars = floor($rating);
            $halfStar = ($rating - $fullStars) >= 0.2;
            for ($i = 0; $i < $fullStars; $i++) {
                $stars .= '<i class="fas fa-star"></i>';}
            if ($halfStar) {
                $stars .= '<i class="fas fa-star-half-alt"></i>';}
            return $stars;}
        if($averageRating !== null){
            echo generateStars($averageRating) . round($averageRating,2);}
        }
     else {
        echo "Error fetching average rating";}
?>
                    </div></div></div></div>
        <div class="column2">
            <div class="title">
                Book Your Trip!</div>
            <div class="form">
                <form action="#" class="book_form" method="POST">
                    <div class="element">
                            <label for="name">Mobile Number</label>
                            <input type="text" placeholder="Enter your mobile no." name="form_mobile"></div>
                    <div class="element">
                            <label for="name">Email</label>
                            <input type="email" placeholder="Enter your Email" name="form_email"> </div>
                    <div class="element">
                        <label for="name">Address</label>
                        <input type="text" placeholder="Enter your Current Address" name="form-address"></div>
                    <div class="element">
                    <label for="name">Destination</label>
                    <input type="text" id="d" name="form-destination" placeholder="" readonly>
                    </div>
                    <div class="element">
                    <label for="name">Country</label>
                    <input type="text" id="c" name="form-country" placeholder="" readonly></div>
                <div class="element">   
                    <label for="name">Number of Guests</label>
                    <input type="number" placeholder="Enter number of guests" name="form_nog"></div>
                    <div class="element">
                            <label for="checkin">Check In Date</label>
                            <input type="date" placeholder="" name="form_checkin">
                        </div>
                    <div class="element">
                            <label for="checkout">Check Out Date</label>
                            <input type="date" placeholder="" name="form_checkout"></div>
                    <input type="submit" value="Sumbit" class="btn" id="submit-button">
                </form></div></div></div>
    <div class="container2">
        <div class="heading" style = "font-weight:bold; font-size:60px;">
            User Review's</div>
        <div class="review-form">
    <form action="review.php" method="POST">
    <input type="hidden" name="destination" value="<?php echo $_GET['destination']; ?>">
    <input type="hidden" name="country" value="<?php echo $_GET['country']; ?>">
        <div class="element">
            <label for="Rating">Rating:</label>
        <div class="star-rating">
            <input type="radio" id="star5" name="rating" value=5>
            <label for="star5"></label>
            <input type="radio" id="star4" name="rating" value=4>
            <label for="star4"></label>
            <input type="radio" id="star3" name="rating" value=3>
            <label for="star3"></label>
            <input type="radio" id="star2" name="rating" value=2>
            <label for="star2"></label>
            <input type="radio" id="star1" name="rating" value=1>
            <label for="star1"></label>
        </div></div>
        <div class="element">
            <input type="text" placeholder="Add Review" name="review" class="wr">
        </div>
        <?php if($loggedin){echo '<input type="submit" value=">" class="btn" style = "border-radius:60px; width:50px; height:50px;margin-top:9px"></a>';} else{echo '';} ?>
    </form></div><br>
    <div class="reviews-container">
        <?php
    include 'dbconnect.php'; 
    $destination = $_GET['destination'];
    $sql = "SELECT * FROM `reviews` WHERE `destination` = '$destination'";
    $result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo '<div class = "review-element">';
        echo '<div class = "name">';
        echo '<span><i class="far fa-user "></i>'.$row['user_name'].'</span>' ;
        echo '</div>';
        echo '<div class="review-content"';
        if ($row['review'] != ''){
        echo '<span>'.$row['review'].'</span>' ;}
        else{
            echo '<span>...</span>' ;}
        echo '<div class="rating">';
        $rating =$row['rating'];
                    for ($i = 1; $i <= 5; $i++) {
                        if ($i <= $rating) {
                            echo '<span class="star"><i class="fas fa-star"></i></span>'; // Full star
                            } else {
                            echo '<span class="star"><i class="far fa-star"></i></span>'; // Empty star}}
                    echo '</div>';
                    echo '</div>';
                    echo '</div>';}}
                    echo '<div class="review_date">';
                    echo '<span>'.$row['review_date'].'</span>' ;
                    echo '</div>';
                            }}
?>
</div></div><br><br><br><br>
<div class="heading" style = "font-weight:bold; font-size:60px;">
            Check Images</div>
<div class="image-search">
    <form action="" class="image-form">
        <input type="text" id="search-input" readonly  style="border: 1px solid black; width:200px; height:40px; border-radius:20px; padding:10px;margin-left:500px" value="<?php echo htmlspecialchars($destination); ?>">
        <button class="btn" id="search-button">Check Images</button></form>
    <div class="search-results">
        <div class="search-result">
            <img src="" alt=""></div>
        <div class="search-result">
            <img src="" alt=""></div>
        <div class="search-result">
            <img src="" alt=""></div>
        <div class="search-result">
            <img src="" alt=""></div>
    </div>
    <button class="btn" id="show-more" style="display:none; margin-left:650px">Show More</button>
</div><br><br><br>
<script src="book.js"></script>
<script src="images.js"></script>
</body>
</html>