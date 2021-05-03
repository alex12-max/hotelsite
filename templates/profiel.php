
<?php 
session_start();

	include("connection.php");
	include("functions.php");
   $sql = "SELECT * FROM bok";
   $result = mysqli_query($con, $sql);
   $order = mysqli_query($con,"select user_email from users WHERE user_name='".$_SESSION['user_name']."'");
   $res= mysqli_fetch_array($order);
   $email = $res['user_email'];
   $get = mysqli_query($con,"select * from bok WHERE user='".$_SESSION['user_name']."'");
   $re= mysqli_fetch_array($get);
   $ch_in = $re['ch_in'];
   $ch_out = $re['ch_out'];
   $adult = $re['adult'];
   $chil = $re['child'];
   $rom = $re['nu_room'];
   $nim = $re['room'];   
   if(!$_SESSION['user_name'])  
   {  
  
    header("Location: login.php");//redirect to the login page to secure the welcome page without login access.  
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

	<div class="wrapper">
	<div class="navbar">
	</div>
</div>	
    
<link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
<link rel="stylesheet" href="style.css" >
<!------ Include the above in your HEAD tag ---------->

<!---->

<div class="container">
    <div class="row profile">
		<div class="col-md-3">
			<div class="profile-sidebar">
				<!-- SIDEBAR USERPIC -->
				<div class="profile-userpic">
					<img src="https://static.change.org/profile-img/default-user-profile.svg" class="img-responsive" alt="">
				</div>
				<!-- END SIDEBAR USERPIC -->
				<!-- SIDEBAR USER TITLE -->
				<div class="profile-usertitle">
					<div class="profile-usertitle-name">
						<?php echo $_SESSION['user_name']; ?>
					</div>
				</div>
				<!-- END SIDEBAR USER TITLE -->
				<!-- SIDEBAR MENU -->
				<div class="profile-usermenu">
					<ul class="nav">
						<li class="active">
							<a href="home.php">
							<i class="glyphicon glyphicon-home"></i>
							Home </a>
						</li>
						<li>
							<a href = "logout.php">
							<i class="glyphicon "></i>
							Logout </a>
						</li>
					</ul>
				</div>
				<!-- END MENU -->
			</div>
		</div>
		<div class="col-md-9">
            <div >
            <section class="recent" id="users">
                <div class="activity-grid">
                    <div class="activity-card">
                        <h3 > Your Reservation</h3>
                        
                        <div class="table-responsive">
                            <table>
                                <thead>
                                    <tr>
                                        
                                        <th>check in Date</th>
                                        <th>check out date</th>
                                        <th>Adult number</th>
                                        <th>children number</th>
                                        <th>Rooms number</th>
                                        <th>Room Name</th>

                                    </tr>
                                </thead>
                                <tbody>
           <?php 

                 while($row = mysqli_fetch_array($result)){

                   
                    echo "<tr class='test'>";
                    echo "<td>".$row['ch_in']."</td>";
                    echo "<td>".$row['ch_out']."</td>";
                    echo "<td>". $row['adult']."</td>";
                    echo "<td>".$row['child']."</td>";
                    echo "<td>".$row['nu_room']."</td>";
                    echo "<td>". $row['room']."</td>";
             }
          mysqli_free_result($result);



           ?>
                                   
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </section>
            <section class="recent" id="users">
                <div class="activity-grid">
                    <div class="activity-card">
                        <h3> Your Account</h3><hr>
                        
                        <div class="table-responsive">
                            <table>
                                <thead>
                                    <tr>
                                        
                                        
                                        <th>user name</th>
                                        <th>email</th>
                                        <th>password</th>
                                        

                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="test">
                                        
                                        
                                        <td><?php echo $_SESSION['user_name']; ?></td>
                                        <td><?php echo $email; ?></td>
                                        <td> change password</td>

                                    </tr>
                                    
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </section>
            </div><hr>
			
		</div>
        
	</div>
    
</div>

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
        
        <script src="js/script.js?v=<?php echo time();?>"></script>
    </body>

</html>
