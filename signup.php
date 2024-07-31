<?php
$showalert = false;
$showerror = false;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include 'dbconnect.php';
    $username = $_POST["name_register"];
    $password = $_POST['password_register'];
    $cpassword = $_POST['password_confirm_register'];

    // Check if the username already exists
    $check_sql = "SELECT * FROM `users` WHERE `user_name` = '$username'";
    $check_result = mysqli_query($conn, $check_sql);

    if (mysqli_num_rows($check_result) > 0) {
        // Username already exists
        $showerror = true;
    } elseif ($password == $cpassword) {
        $sql = "INSERT INTO `users` (`user_name`, `password`, `dt`) VALUES ('$username', '$password', current_timestamp());";
        $result = mysqli_query($conn, $sql);

        if ($result) {
            $showalert = true;
        }
    } else {
        
        $showerror = true;
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- ... Other head content ... -->
    <title></title>
    <link rel="stylesheet" href="homepage.css">
    <link rel="stylesheet" href="dynamicbox.css">
    <link rel="stylesheet" href="signin.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <style>
        *{
            font-family: 'Courier New', Courier, monospace;
        }
    </style>
</head>
<body>
<?php
if($showalert){
    echo '<div class="alert alert-success" role="alert" style="background-color: lightgreen; text-align: center">
  You have successfully registered!
</div>';
}

if($showerror){
    echo '<div class="alert alert-warning" role="alert" style="background-color: red; text-align: center">
  Error occured while registering. Try again
</div>';
}
?>



    <!--header part-->
    <section class="header">
        <a href="home.php" class="logo">Travelix.</a>
        <nav class="navbar">
        </nav>
        
    </section>
    <br><br>

    

    <div class="container">
    <input type="checkbox" id="flip">
    <div class="cover">
      <div class="front">
        <img src="images/frontImg.jpg" alt="">
        <div class="text">
          <span class="text-1">Complete miles of journey<br>with one step</span>
          <span class="text-2">Let's start Travel</span>
        </div>
      </div>
    </div>
    <div class="forms">
        <div class="form-content">
        <div class="signup-form">
          <div class="title">Signup</div>
        <form action="#" method = "POST">
            <div class="input-boxes">
              <div class="input-box">
                <i class="fas fa-user"></i>
                <input type="text" placeholder="Enter your name" required  name="name_register">
              </div>
              <div class="input-box">
                <i class="fas fa-lock"></i>
                <input type="password" placeholder="Enter your password" required  name="password_register">
              </div>
              <div class="input-box">
                <i class="fas fa-lock"></i>
                <input type="password" placeholder="Confirm password" required  name="password_confirm_register">
              </div>
              <div class="button input-box">
                <input type="submit" value="Sumbit">
              </div>
              <div class="text sign-up-text">Already have an account? <a href="signin.php">Login Now</a></div>
            </div>
      </form>
    </div>
    </div>
    </div>
  </div>

</body>
</html>
