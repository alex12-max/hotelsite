<?php 
session_start();

	include("connection.php");

	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$user_name = $_POST['user_name'];
		$user_email = $_POST['user_email'];
		$password = $_POST['password'];

		if(!empty($user_name) && !empty($password) && !is_numeric($user_name) && !empty($user_email))
		{

			//save to database
			$id = rand(1,20);
			$query = "insert into users (user_name,user_email,password) values ('$user_name','$user_email','$password')";

			mysqli_query($con, $query);

			header("Location: login.php");
			die;
		}else
		{
			echo "Please enter some valid information!";
		}
	}
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
    <form  class=""  method="post">
      <h1>Sign Up</h1>
      <input id="text" placeholder="User Name" name="user_name" class="txtb">
      <input type="email" placeholder="Email" name="user_email" class="txtb">
      <input type="password" placeholder="Password" name="password" class="txtb">
      <input type="submit" value="Create Account" class="signup-btn" name="save">
      <a href="login.php">Already Have one ?</a>
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
            <a href = "#">Subscription</a>
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
