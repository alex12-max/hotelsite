<?php 
session_start();

	include("connection.php");
	
    $rom_name=$_SESSION['room_name'];
$ch_in=$_SESSION['ch_in'];
$ch_out=$_SESSION['ch_out'];
$adult=$_SESSION['adult'];
$chil=$_SESSION['chil'];
$rom=$_SESSION['rom'];
$pric=$_SESSION['room_price'];
	
if(!$_SESSION['room_name'])  
{  
  
    header("Location: index.php");//redirect to the login page to secure the welcome page without login access.  
}  
?>
<?php

if(isset($_POST['login']))
{
    $user_name=$_POST['user_name'];
    $user_pass=$_POST['password'];
    
    $check_user="select * from users WHERE user_name='$user_name' AND password='$user_pass'";

    $run=mysqli_query($con,$check_user);

    if(mysqli_num_rows($run))
    {


        $_SESSION['user_name']=$user_name;
        $squ="insert into bok (user,ch_in,ch_out,adult,child,nu_room,room,rom_pr) values ('$user_name','$ch_in','$ch_out','$adult','$chil','$rom','$rom_name','$pric')";
        mysqli_query($con, $squ);
        header("Location: home.php");

    }
    else
    {
      echo "<script>alert('Email or password is incorrect!')</script>";
    }
}

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Mazagan </title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="../css/main.css">

        <script src="https://kit.fontawesome.com/dbed6b6114.js" crossorigin="anonymous"></script>
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

            <div class = "head-bottom flex">
                <h2>Welcome to Mazagan</h2>
                <p><span>Mazagan is the first and only upscale luxury hotel located in the very heart of Ouarzazate.</span></p>
                <!-- <button type = "button"  class = "head-btn">GET STARTED</button> -->
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
                <li><a href = "#services">services</a></li>
                

            </ul>
            <a href="signup.php">
                <button  class = "btn sign-up">sign up</button>

            </a>
            <a href="login.php">
                <button class = "btn log-in">log in</button>

            </a>
        </div>
        <!-- end of side navbar -->

        <!-- booking log -->
        <div class="container_form">
            <h2>You are not Login</h2>
            <form action="" method="post">
            <h2>Login</h2>
            
                <div class="form_group">
                    <input type="text" name="user_name" placeholder="User name" class="form_control">
                    <input type="password" name="password" class="form_control" placeholder="Password">
                </div>
                <h4><a href="signup.php">Register</a></h4>
                <input  type="submit" name="login" class="btn sub-btn" value="Login">
            </form>
        </div>
        <!-- end of booking log -->
        
        
        
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
                    <a href = "signUp.html">Subscription</a>
                    
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
        
        <script src="../js/script.js"></script>
    </body>
</html>

