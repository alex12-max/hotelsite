<?php

    session_start();

	include("connection.php");
if(isset($_POST["email"]) && (!empty($_POST["email"]))){
$email = $_POST["email"];
$email = filter_var($email, FILTER_SANITIZE_EMAIL);
$email = filter_var($email, FILTER_VALIDATE_EMAIL);
if (!$email) {
   $error .="<p>Invalid email address please type a valid email address!</p>";
   }else{
   $sel_query = "SELECT * FROM users WHERE user_email='".$email."'";
   $results = mysqli_query($con,$sel_query);
   $row = mysqli_num_rows($results);
   if ($row==""){
   $error .= "<p>No user is registered with this email address!</p>";
   }
  }
   if($error!=""){
   echo "<div class='error'>".$error."</div>
   <br /><a href='javascript:history.go(-1)'>Go Back</a>";
   }else{
   $expFormat = mktime(
   date("H"), date("i"), date("s"), date("m") ,date("d")+1, date("Y")
   );
   $expDate = date("Y-m-d H:i:s",$expFormat);
   $key = md5(2418*2+$email);
   $addKey = substr(md5(uniqid(rand(),1)),3,10);
   $key = $key . $addKey;
// Insert Temp Table
mysqli_query($con,
"INSERT INTO password_reset_temp ('email', 'key', 'expDate')
VALUES ('".$email."', '".$key."', '".$expDate."');");
 
$output='<p>Dear user,</p>';
$output.='<p>Please click on the following link to reset your password.</p>';
$output.='<p>-------------------------------------------------------------</p>';
$output.='<p><a href="https://www.allphptricks.com/forgot-password/reset-password.php?
key='.$key.'&email='.$email.'&action=reset" target="_blank">
https://www.allphptricks.com/forgot-password/reset-password.php
?key='.$key.'&email='.$email.'&action=reset</a></p>'; 
$output.='<p>-------------------------------------------------------------</p>';
$output.='<p>Please be sure to copy the entire link into your browser.
The link will expire after 1 day for security reason.</p>';
$output.='<p>If you did not request this forgotten password email, no action 
is needed, your password will not be reset. However, you may want to log into 
your account and change your security password as someone may have guessed it.</p>';   
$output.='<p>Thanks,</p>';
$output.='<p>AllPHPTricks Team</p>';
$body = $output; 
$subject = "Password Recovery - AllPHPTricks.com";
 
$email_to = $email;
$fromserver = "ismail.zarrouki@gmail.com"; 
require("PHPMailer/PHPMailerAutoload.php");
$mail = new PHPMailer();
$mail->IsSMTP();
$mail->Host = "mail.yourwebsite.com"; // Enter your host here
$mail->SMTPAuth = true;
$mail->Username = "ismail.zarrouki@gmail.com"; // Enter your email here
$mail->Password = "password"; //Enter your password here
$mail->Port = 25;
$mail->IsHTML(true);
$mail->From = "ismail.zarrouki@gmail.com";
$mail->FromName = "AllPHPTricks";
$mail->Sender = $fromserver; // indicates ReturnPath header
$mail->Subject = $subject;
$mail->Body = $body;
$mail->AddAddress($email_to);
if(!$mail->Send()){
echo "Mailer Error: " . $mail->ErrorInfo;
}else{
echo "<div class='error'>
<p>An email has been sent to you with instructions on how to reset your password.</p>
</div><br /><br /><br />";
 }
   }
}else{
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
      <h1>reset </h1>
      <input type="email" placeholder="email" name="email" class="txtb">
      
      
      <input type="submit" value="Log In" name="send" class="signup-btn">
      
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
<?php } ?>
