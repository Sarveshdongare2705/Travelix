<?php
$login = false;
$error = false;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include 'dbconnect.php';
    $mobile = $_POST['mobile_login'];
    $password = $_POST['password_login'];
    $sql = "SELECT * FROM `users` WHERE `mobile` = '$mobile' AND `password` = '$password'";
        $result = mysqli_query($conn, $sql);
        $num = mysqli_num_rows($result);
        if ($num == 1) {
            $login = true;
            session_start();
            $row = mysqli_fetch_assoc($result);
            $_SESSION['loggedin'] = true;
            $_SESSION['username'] = $row['user_name'];
            header("location: home.php");}
        else{$error = true;}}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title> Login and Registration Form in HTML & CSS | CodingLab </title>
    <link rel="stylesheet" href="signin.css">
    <link rel="stylesheet" href="homepage.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
<?php
if($login){
    echo '<div class="alert alert-success" role="alert" style="background-color: lightgreen; text-align: center">
  You have successfully logged in!
</div>';}
if($error){
    echo '<div class="alert alert-warning" role="alert" style="background-color: red; text-align: center">
  Invalid login credentials
</div>';}
?>
    <!--header part-->
    <section class="header">
        <a href="home.php" class="logo">Travelix.</a>
        <nav class="navbar">
        </nav>
    </section>
<br><br>
  <div class="container" id="a">
    <input type="checkbox" id="flip">
    <div class="cover">
      <div class="front">
        <img src="images/frontImg.jpg" alt="">
        <div class="text">
          <span class="text-1">Complete miles of journey<br>with one step</span>
          <span class="text-2">Let's start Travel</span></div></div>
      <div class="back">
        <div class="text"></div></div></div>
    <div class="forms">
        <div class="form-content">
          <div class="login-form">
            <div class="title">Login</div>
          <form action="#" method="POST">
            <div class="input-boxes">
              <div class="input-box">
                <i class="fas fa-user "></i>
                <input type="text" placeholder="Enter your mobile number" required name="mobile_login"></div>
              <div class="input-box">
                <i class="fas fa-lock"></i>
                <input type="password" placeholder="Enter your password" required name="password_login"></div>
              <div class="button input-box">
                <input type="submit" value="Sumbit"></div>
              <div class="text sign-up-text">Don't have an account? <a href="signup.php">Create Account</a></div></div>
        </form></div></div></div></div></body></html>