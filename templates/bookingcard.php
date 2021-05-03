<?php 
session_start();

	include("connection.php");
if(isset($_POST['rm'])){
    unset($_SESSION['room_name']);
    
}
	$sql = "SELECT * FROM bok";
$result = mysqli_query($con, $sql);
if(!$_SESSION['room_name'])  
{  
  
    header("Location: index.php");//redirect to the login page to secure the welcome page without login access.  
}  
$rom_name=$_SESSION['room_name'];
$ch_in=$_SESSION['ch_in'];
$ch_out=$_SESSION['ch_out'];
$adult=$_SESSION['adult'];
$chil=$_SESSION['chil'];
$rom=$_SESSION['rom'];
$pric=$_SESSION['room_price'];
$am=$pric*$rom;
   for($x=0;$x<10;$x++){
     if(isset($_POST["re$x"])){
      
       $order = mysqli_query($con,"DELETE FROM bok WHERE nu_room='" . $x . "'");
       mysqli_query($con, $order);
  }
 
}

?>


<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Mazagan </title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="../css/main.css?v=<?php echo time();?>">
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
                <li><a href = "#header">home</a></li>
                <li><a href = "#services">services</a></li>
                <li><a href = "#roomO">rooms</a></li>
                <li><a href = "#customers">customers</a></li>
                <li><a href = "#contact">Contact</a></li>

            </ul>
            <a href="signup.php">
                <button  class = "btn sign-up">sign up</button>

            </a>
            <a href="login.php">
                <button class = "btn log-in">log in</button>

            </a>
        </div>
        <!-- end of side navbar -->

        <!-- fullscreen modal -->
        <div id = "modal"></div>
        <!-- end of fullscreen modal -->

        
        </section>
        <section class = "rooms sec-width" id = "roomO">
            <div class = "title">
                <h2 >Your Booking Cart</h2>
            </div>
            <div class = "rooms-container">
<form method='post'>
            <table class="table" id="table">

        <thead>
        <tr bgcolor="#999999">
        <!-- <th width="10">#</th> -->
        <th align="center" width="120">Room</th>
        <th align="center" width="120">Check In</th>
        <th align="center" width="120">Check Out</th> 
        <th width="120">Price</th> 
        <th align="center" width="120">rooms</th> 
        <th align="center">Amount</th>
        <th align="center" width="90">Action</th> 
        </tr> 
        </thead>
    <tbody>
 

    <tr><td><?php echo $rom_name;?> </td><td><?php echo $ch_in;?></td><td><?php echo $ch_out;?></td><td> €<?php echo $pric;?>
                <!--<input type="hidden" value="10" name="roomprice11" id="roomprice11">-->

    </td><td><input style="border:0px" readonly="" type="number" value="<?php echo $rom;?>" id="day11" name="day11"></td>
        <input type="hidden" name="MealPrice11" id="MealPrice11">
    <td>$<output id="TotAmount11"><?php echo $am;?></output></td>
    <td><input value="change" name="rm" type="submit"></td></tr><tr>
    </tbody>

        <tfoot>
        <tr>
        <td colspan="6"><h4 align="right">Total:</h4></td>
        <td colspan="4">
        <h4><b>€<span id="sum"><?php echo $am;?></span></b></h4>
                    
        </td>
        </tr>
        </tfoot>  
    </table>
</form>
    <a href="bookinglog.php"><button type = "button" class = "btn">CONTINUE</button></a>
        </section>
        <!-- end of single room -->
        
        
        
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
        
        <script src="js/script.js"></script>
    </body>
</html>
