<?php 
session_start();
if(!$_SESSION['ch_in'])  
{  
  
    header("Location: index.php");//redirect to the login page to secure the welcome page without login access.  
}  
	include("connection.php");


$ch_in=$_SESSION['ch_in'];
$ch_out=$_SESSION['ch_out'];
$adult=$_SESSION['adult'];
$chil=$_SESSION['chil'];
$rom=$_SESSION['rom'];


$sql = "SELECT * FROM rooms";
$result = mysqli_query($con, $sql);
for($x=0;$x<5;$x++){
 if(isset($_POST["book$x"])){
   
   
   $id = $x;
   $order = mysqli_query($con,"SELECT * FROM rooms WHERE id='$id' LIMIT 1");
   $res= mysqli_fetch_array($order);
   $_SESSION['room_name'] = $res['room_name'];
   $_SESSION['room_price'] = $res['room_price'];
   //$ro=$res['room_price'];
  // $query = "";
  // $qu="insert into bok (ch_in,ch_out,adult,child,nu_room,room,rom_pr) values ('$ch_in','$ch_out','$adult','$chil','$rom','$name','$ro')";
  // mysqli_query($con, $qu);
    
   header("Location: bookingcard.php");
  
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
                <h2>Available Rooms</h2>
            </div>
            <div class = "rooms-container">
                <!-- single room -->
                
                 <?php 
                 $i=1;
                 while($row = mysqli_fetch_array($result)){

                    echo "<form method='post'>";
                    echo "<article class = 'room'>";
                    echo "<div class = 'room-image'>";
                    echo "<img src = '../images/".$row['image']."' style='width: 558px; height: 640;' alt = 'room image'>";
                    echo "</div>";
                    echo "<div class = 'room-text'>";
                    echo "<h3>". $row['room_name'] . "</h3>";
                    echo "<ul>";
                    echo "<li>";
                    echo "<i class = 'fas fa-arrow-alt-circle-right'></i>";
                    echo $row['room_des1'];
                    echo "</li>";
                    echo "<li>";
                    echo "<i class = 'fas fa-arrow-alt-circle-right'></i>";
                    echo $row['room_des2'];
                    echo "</li>";
                    echo "<li>";
                    echo "<i class = 'fas fa-arrow-alt-circle-right'></i>";
                    echo $row['room_des3'];
                    echo "</li>";
                    echo "<li>";
                    echo "<i class = 'fas fa-arrow-alt-circle-right'></i>";
                    echo $row['room_des4'];
                    echo "</li>";
                    echo "</ul>";
                    echo "<p class = 'rate'>";
                    echo "<span>". $row['room_price'].".00 DHs/</span> Per Night";
                    echo "</p>";
                    echo "<input value='book now' type='submit' class='btn' name='book".$i."'>";
                    echo "</div>";
                    echo "</article>";
                    echo '</form>';

                    $i+=1;
             }
          mysqli_free_result($result);



           ?>
                        
              
                   
                
        
        
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

