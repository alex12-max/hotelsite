<?php

    session_start();

	include("connection.php");
	include("functions.php");




?>




<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/main.css">
    <script src="https://kit.fontawesome.com/dbed6b6114.js" crossorigin="anonymous"></script>

    <link href="https://fonts.googleapis.com/css?family=Permanent+Marker" rel="stylesheet">
    <link rel = "icon" href = "../images/icon.png" type = "">
  </head>
  <body>

     <!-- header -->
     <header class = "header" id = "header">
      <div class = "head-top">
          <div class = "site-name">
              <span>MAZAGAN</span>
          </div>
          <div class = "site-nav">
              <span id = "nav-btn">MENU <i class = "fas fa-bars"></i></span>
          </div>
      </div>


  </header>
  <!-- end of header -->
  <!-- side navbar -->
  <div class = "sidenav" id = "sidenav">
      <span class = "cancel-btn" id = "cancel-btn">
          <i class = "fas fa-times"></i>
      </span>

      <ul class = "navbar1">
          <li><a href = "../index.php">home</a></li>
          

      </ul>
  </div>
  <!-- end of side navbar -->
  <!-- form start -->
  <div class="signup-form">
    <form  class=""  method="post" action="login.php">
      <h1>Sign In</h1>
      <input type="text" placeholder="User Name" name="user_name" class="txtb">
      <input type="password" placeholder="Password" name="password" class="txtb">
      <a href="fg.php">Forgot Password?</a>
      <input type="submit" value="Log In" name="login" class="signup-btn">
      <a href="signup.php">Creat An Account ?</a>
    </form>
  </div>
  <!-- form end -->
  <!-- footer start -->
  <!-- footer -->
  <footer class = "footer">
    <div class = "footer-container">
        <div>
            <h2>About Us </h2>
            <p>Whether it is a business trip or a visit for leisure we are here to make each stay memorable and to ensure that each experience in our hotel is nothing but exceptional.   We look forward to welcoming you to Mazagan.</p>
            <ul class = "social-icons">
                <li class = "flex">
                    <i class = "fa fa-twitter fa-2x"></i>
                </li>
                <li class = "flex">
                    <i class = "fa fa-facebook fa-2x"></i>
                </li>
                <li class = "flex">
                    <i class = "fa fa-instagram fa-2x"></i>
                </li>
            </ul>
        </div>

        <div>
            <h2>Useful Links</h2>
            <a href = "#reservation">Reservation</a>
            <a href = "#roomO">Rooms</a>
            <a href = "signup.php">Subscription</a>
            <a href = "#">Offers</a>
        </div>

        <div>
            <h2>Privacy</h2>
            <a href = "#">About Us</a>
            <a href = "#contact">Contact Us</a>
            <a href = "#services">Services</a>
        </div>

        <div>
            <h2>Have A Question</h2>
            <div class = "contact-item">
                <span>
                    <i class = "fas fa-map-marker-alt"></i>
                </span>
                <span>
                    Boulevard Mohamed V, BP 251 Ouarzazate, Morocco
                </span>
            </div>
            <div class = "contact-item">
                <span>
                    <i class = "fas fa-phone-alt"></i>
                </span>
                <span>
                    +212 (0)5 24 88 27 6X
                </span>
            </div>
            <div class = "contact-item">
                <span>
                    <i class = "fas fa-envelope"></i>
                </span>
                <span>
                    info@Mazagan.com
                </span>
            </div>
        </div>
    </div>
</footer>
<!-- end of footer -->
  <!-- footer end -->
  <script src="../js/script.js"></script>
  </body>
</html>
<?php

if(isset($_POST['login']))
{
    $user_name=$_POST['user_name'];
    $user_pass=$_POST['password'];

    $check_user="select * from users WHERE user_name='$user_name' AND password='$user_pass'";

    $run=mysqli_query($con,$check_user);

    if(mysqli_num_rows($run))
    {


        $_SESSION['user_name']=$user_name;//here session is used and value of $user_email store in $_SESSION.
        header("Location: ../home.php");

    }
    else
    {
      echo "<script>alert('Email or password is incorrect!')</script>";
    }
}

?>

