<?php
session_start();
include "../templates/connection.php";
if(!$_SESSION['user_admin'])
{
   
        header("Location: login.php");
}
$sql = "SELECT * FROM users";
$result = mysqli_query($con, $sql);


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="dash.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin dashbord</title>
</head>
<body>
    <input type="checkbox" id="sidebar-toggle">
    <div class="sidebar">
        <div class="sidebar-header">
            <h3 class="brand">
                <span class="ti-unlink"></span> 
                <span>MAZAGAN</span>
            </h3> 
            <label for="sidebar-toggle" class="ti-menu-alt"></label>
        </div>
        
        <div class="sidebar-menu">
            <ul>
                <li>
                    <a href="#reservation">
                        <span class="ti-home"></span>
                        <span>Users</span>
                    </a>
                </li>
                <li>
                    <a href="#users">
                        <span class="ti-face-smile"></span>
                        <span>Reservation</span>
                    </a>
                </li>
                <li>
                    <a href="#account">
                        <span class="ti-agenda"></span>
                        <span>Account</span>
                    </a>
                </li>
                <li>
                    <a href="../templates/logout.php">
                        <span class="ti-clipboard"></span>
                        <span>Logout</span>
                    </a>
                </li>
                
            </ul>
        </div>
    </div>
    
    
    <div class="main-content">
        
        <header>
            <div class="search-wrapper">
                <span class="ti-search"></span>
                <input type="search" placeholder="Search">
            </div>
            
            <div class="social-icons">
                <span class="ti-bell"></span>
                <span class="ti-comment"></span>
                <div></div>
            </div>
        </header>
        
        <main>
            
            
            <!-- end 1 -->
            <section class="recent" id="reservation">
                <div class="activity-grid">
                    <div class="activity-card">
                        <h3>Users</h3>
                        
                        <div class="table-responsive">
                            <table>
                                <thead>
                                    <tr>
                                      
                                        <th>User Name</th>
                                        <th>Email</th>
                                        <th>Password</th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
 <?php 

                 while($row = mysqli_fetch_array($result)){

                   
                    echo "<tr class='test'>";
                    echo "<td>".$row['user_name']."</td>";
                    echo "<td>".$row['user_email']."</td>";
                    echo "<td>". $row['password']."</td>";
                    
             }
          mysqli_free_result($result);



           ?>
                                    
                                    
                                </tbody>
                            </table>
                        </div>
                    </div>
                    
                    <div class="summary">
                        <div class="summary-card">
                            <div class="summary-single">
                                <span class="ti-id-badge"></span>
                                <div>
                                    <h5>196</h5>
                                    <small>Reservation Rooms</small>
                                </div>
                            </div>
                            <div class="summary-single">
                                <span class="ti-calendar"></span>
                                <div>
                                    <h5>16</h5>
                                    <small>Users</small>
                                </div>
                            </div>
                            <div class="summary-single">
                                <span class="ti-face-smile"></span>
                                <div>
                                    <h5>12</h5>
                                    <small>Available ROOMS</small>
                                </div>
                            </div>
                        </div>
                        
                        <div class="bday-card">
                            <div class="bday-flex">
                                <div class="bday-img"></div>
                                <div class="bday-info">
                                    <h5>User Name</h5>
                                    
                                </div>
                            </div>
                            
                            <div class="text-center">
                                <a href="../log.php" >
                                    <span class="ti-gift"></span>
                                    Log out
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="recent" id="users">
                <div class="activity-grid">
                    <div class="activity-card">
                        <h3>Reservation</h3>
                        
                        <div class="table-responsive">
                            <table>
                                <thead>
                                    <tr>
                                        <th>custmer name </th>
                                        <th>check in Date</th>
                                        <th>check out date</th>
                                        <th>Adult number</th>
                                        <th>children number</th>
                                        <th>Rooms number</th>
                                        <th>Room Name</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>test</td>
                                        <td>05/12/2020</td>
                                        <td>05/12/2020</td>
                                        <td>1</td>
                                        <td>1</td>
                                        <td>125</td>
                                        <td>Deluxe Room, (Prime)</td>

                                    </tr>
                                    
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </section>
            <section class="recent" id="account">
                <div class="activity-grid">
                    <div class="activity-card">
                        <h3>Account</h3>
                        
                        <div class="table-responsive">
                            <table>
                                <thead>
                                    <tr>
                                        <th>user Name</th>
                                        <th>Email</th>
                                        <th>Password</th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>admin</td>
                                        <td>admin@mazagan.com</td>
                                        <td>password</td>
                                        
                                        
                                    </tr>
                                    
                                </tbody>
                                
                                
                            </table>
                            
                        </div>
                    </div>
                </div>
            </section>
            
        </main>
        
    </div>
    <script src="script.js"></script>
</body>
</html>
