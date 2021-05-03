<?php 
session_start();

 include "templates/connection.php";
 $sql = "SELECT * FROM bok";
 $result = mysqli_query($con, $sql);
 
 if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$ch_in = $_POST['ch-in'];
		$ch_out = $_POST['ch-out'];
		$adult = $_POST['adult'];
        $chil = $_POST['child'];
        $rom = $_POST['rooms'];

		if(isset($_POST['save']) && !empty($_POST['ch-in']) && !empty($_POST['ch-out']))
		{
            $_SESSION['ch_in']=$ch_in;
            $_SESSION['ch_out']=$ch_out;
            $_SESSION['adult']=$adult;
            $_SESSION['chil']=$chil;
            $_SESSION['rom']=$rom;
            
			header("Location: templates/booking.php");
		
		}else
		{
			echo "Please enter some valid information!";
		}
	}
    $sq = "SELECT * FROM rooms";
$resul = mysqli_query($con, $sq);

?>


<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Mazagan </title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/main.css?v=<?php echo time();?>">
        <script src="https://kit.fontawesome.com/dbed6b6114.js" crossorigin="anonymous"></script>
        <link rel = "icon" href = "images/icon.png" type = "">
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
            <form  class = "book-form" method="post" action="index.php" id="reservation">
                <div class = "form-item">
                    <label for = "checkin-date">Check In Date: </label>
                    <input type = "date" name="ch-in" id = "chekin-date">
                </div>
                <div class = "form-item">
                    <label for = "checkout-date">Check Out Date: </label>
                    <input type = "date" name="ch-out" id = "chekout-date">
                </div>
                <div class = "form-item">
                    <label for = "adult">Adults: </label>
                    <input type = "number" name="adult" min = "1" value = "1" id = "adult">
                </div>
                <div class = "form-item">
                    <label for = "children">Children: </label>
                    <input type = "number" name="child" min = "1" value = "1" id = "children">
                </div>
                <div class = "form-item">
                    <label for = "rooms">Rooms: </label>
                    <input type = "number" name="rooms" min = "1" value = "1" id = "rooms">
                </div>
                <div  class = "form-item">
                    <input   type = "submit" class = "btn" name="save" value = "Book Now">
                </div>
            </form>
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
            <a href="templates/signup.php">
                <button  class = "btn sign-up">sign up</button>

            </a>
            <a href="templates/login.php">
                <button class = "btn log-in">log in</button>

            </a>
        </div>
        <!-- end of side navbar -->

        <!-- fullscreen modal -->
        <div id = "modal"></div>
        <!-- end of fullscreen modal -->

        <!-- body content  -->
        <section class = "services sec-width" id = "services">
            <div class = "title">
                <h2 >services</h2>
            </div>
            <div class = "services-container">
                <!-- single service -->
                <article class = "service">
                    <div class = "service-icon">
                        <span>
                            <i class = "fas fa-utensils" style="color: #2D5DAF;"></i>
                        </span>
                    </div>
                    <div class = "service-content">
                        <h2>Food Service/ Food Runner</h2>
                        <p>ouarzazate le riad hotel invites you to discover culinary delights from all around the world including both moroccan and international cuisines</p>
                        <button type = "button" class = "btn">Know More</button>
                    </div>
                </article>
                <!-- end of single service -->
                <!-- single service -->
                <article class = "service">
                    <div class = "service-icon">
                        <span>
                            <i class = "fas fa-swimming-pool" style="color: #2D5DAF;"></i>
                        </span>
                    </div>
                    <div class = "service-content">
                        <h2>Refreshment</h2>
                        <p>The Ouarzazate Hotel Riyadh has the comfort of its customers at heart and through this it offers a range of services and kitchen equipment such as: refrigerator, coffee maker and microwave.TV with cable.hair dryer.
                        Mainly in a set, such as: soap, shampoo, body milk, conditioner ...Towels.</p>
                        <button type = "button" class = "btn">Know More</button>
                    </div>
                </article>
                <!-- end of single service -->
                <!-- single service -->
                <article class = "service">
                    <div class = "service-icon">
                        <span>
                            <i class = "fas fa-broom" style="color: #2D5DAF;"></i>
                        </span>
                    </div>
                    <div class = "service-content">
                        <h2>Housekeeping</h2>
                        <p>The Hôtel ouarzazate le riad provides a suite responsible for the cleaning, maintenance and aesthetic maintenance of the rooms, the public area, the back area and the surrounding areas for the convenience of its customers. The hotel lives on selling rooms, food and drinks, and other ancillary services like laundry, spa, etc.</p>
                        <button type = "button" class = "btn">Know More</button>
                    </div>
                </article>
                <!-- end of single service -->
                <!-- single service -->
                <article class = "service">
                    <div class = "service-icon">
                        <span>
                            <i class = "fas fa-door-closed" style="color: #2D5DAF;"></i>
                        </span>
                    </div>
                    <div class = "service-content">
                        <h2>Room Security</h2>
                        <p>ouarzazate le riad hotel protects hotel guests, employees, and property. Hotel security typically works directly on the hotel property, patrolling the grounds, and in an office, monitoring security cameras or filling out paperwork.</p>
                        <button type = "button" class = "btn">Know More</button>
                    </div>
                </article>
                <!-- end of single service -->
            </div>
        </section>
        <section class = "rooms sec-width" id = "roomO">
            <div class = "title">
                <h2>rooms</h2>
            </div>
            <div class = "rooms-container">
                <!-- single room -->
                <article class = "room">
                    <div class = "room-image">
                        <img src = "images/img1.jpeg" style="width: 558px; height: 640;" alt = "room image">
                    </div>
                    <div class = "room-text">
                        <h3>Family Room, Pool View</h3>
                        <ul>
                            <li>
                                <i class = "fas fa-arrow-alt-circle-right"></i>
                                Free WiFi and wired Internet access.
                            </li>
                            <li>
                                <i class = "fas fa-arrow-alt-circle-right"></i>
                                CD television with premium channels and pay movies.
                            </li>
                            <li>
                                <i class = "fas fa-arrow-alt-circle-right"></i>
                                Coffee/tea maker, minibar, 24-hour room service, and free bottled water.
                            </li>
                            <li>
                                <i class = "fas fa-arrow-alt-circle-right"></i>
                                Private bathroom, separate bathtub and shower, slippers, and a hair dryer.
                            </li>
                        </ul>
                        
                        <p class = "rate">
                            <span>1000.00 DHs/</span> Per Night
                        </p>
                        <button type = "button" class = "btn">book now</button>
                    </div>
                </article>
                <!-- end of single room -->
                <!-- single room -->
                <article class = "room">
                    <div class = "room-image">
                        <img src = "images/Suite.jpeg" style="height: 370px;" alt = "room image">
                    </div>
                    <div class = "room-text">
                        <h3>Deluxe Room, (Prime)</h3>
                        <ul>
                            <li>
                                <i class = "fas fa-arrow-alt-circle-right"></i>
                                Free WiFi and wired Internet access.
                            </li>
                            <li>
                                <i class = "fas fa-arrow-alt-circle-right"></i>
                                CD television with premium channels and pay movies.
                            </li>
                            <li>
                                <i class = "fas fa-arrow-alt-circle-right"></i>
                                Safe, phone, and iron/ironing board (on request); rollaway/extra beds available on request.
                            </li>
                            <li>
                                <i class = "fas fa-arrow-alt-circle-right"></i>
                                Climate-controlled air conditioning and daily housekeeping
                                Smoking And Non-Smoking.
                            </li>
                        </ul>
                        
                        <p class = "rate">
                            <span>700.00 DHs/</span> Per Night
                        </p>
                        <button type = "button" class = "btn">book now</button>
                    </div>
                </article>
                <!-- end of single room -->
                <!-- single room -->
                <article class = "room">
                    <div class = "room-image">
                        <img src = "images/Deluxe Room.jpeg" style="height: 370px;" alt = "room image">
                    </div>
                    <div class = "room-text">
                        <h3>Suite, Ocean View (Mazagan)</h3>
                        <ul>
                            <li>
                                <i class = "fas fa-arrow-alt-circle-right"></i>
                                Free WiFi and wired Internet access.
                            </li>
                            <li>
                                <i class = "fas fa-arrow-alt-circle-right"></i>
                                Sleep - Linens.
                            </li>
                            <li>
                                <i class = "fas fa-arrow-alt-circle-right"></i>
                                Safe, phone, and iron/ironing board (on request); rollaway/extra beds available on request.
                            </li>
                            <li>
                                <i class = "fas fa-arrow-alt-circle-right"></i>
                                Climate-controlled air conditioning and daily housekeeping
                                Smoking And Non-Smoking.
                            </li>
                        </ul>
                        <p class = "rate">
                            <span>650.00 DHs/</span> Per Night
                        </p>
                        <button type = "button" class = "btn">book now</button>
                    </div>
                </article>
                <!-- end of single room -->
                <!-- single room -->
                <article class = "room">
                    <div class = "room-image">
                        <img src = "images/Suite Executive.jpeg" style="height: 370px;" alt = "room image">
                    </div>
                    <div class = "room-text">
                        <h3>Suite Executive</h3>
                        <ul>
                            <li>
                                <i class = "fas fa-arrow-alt-circle-right"></i>
                                Free WiFi and wired Internet access.
                            </li>
                            <li>
                                <i class = "fas fa-arrow-alt-circle-right"></i>
                                CD television with premium channels and pay movies.
                            </li>
                            <li>
                                <i class = "fas fa-arrow-alt-circle-right"></i>
                                Safe, phone, and iron/ironing board (on request); rollaway/extra beds available on request.
                            </li>
                            <li>
                                <i class = "fas fa-arrow-alt-circle-right"></i>
                                Climate-controlled air conditioning and daily housekeeping
                                Smoking And Non-Smoking.
                            </li>
                        </ul>
                        <p class = "rate">
                            <span>900.00 DHs/</span> Per Night
                        </p>
                        <button type = "button" class = "btn">book now</button>
                    </div>
                </article>
            </div>
        </section>
        <!-- end of single room -->
        
        
        <section class = "customers" id = "customers">
            <div class = "sec-width">
                <div class = "title">
                    <h2>customers</h2>
                </div>
                <div class = "customers-container">
                    <!-- single customer -->
                    <div class = "customer">
                        <div class = "rating">
                            <span><i class = "fas fa-star"></i></span>
                            <span><i class = "fas fa-star"></i></span>
                            <span><i class = "fas fa-star"></i></span>
                            <span><i class = "fas fa-star"></i></span>
                            <span><i class = "far fa-star"></i></span>
                        </div>
                        <h3>We Loved it</h3>
                        <p>"The grounds were stunning with lots of fully grown trees. Pomegranates grow by the pool with dates and citrus higher up."</p>
                        <img src = "images/cus1.jpg" alt = "customer image">
                        <span>Hosea14 | United Kingdom</span>
                    </div>
                    <!-- end of single customer -->
                    <!-- single customer -->
                    <div class = "customer">
                        <div class = "rating">
                            <span><i class = "fas fa-star"></i></span>
                            <span><i class = "fas fa-star"></i></span>
                            <span><i class = "fas fa-star"></i></span>
                            <span><i class = "fas fa-star"></i></span>
                            <span><i class = "far fa-star"></i></span>
                        </div>
                        <h3>Comfortable Living</h3>
                        <p>“Very good parking facilities, the pool area looked nice, good location close to cinema, museum and town center."</p>
                        <img src = "images/cus2.jpg" alt = "customer image">
                        <span>Soren | Denmark</span>
                    </div>
                    <!-- end of single customer -->
                    <!-- single customer -->
                    <div class = "customer">
                        <div class = "rating">
                            <span><i class = "fas fa-star"></i></span>
                            <span><i class = "fas fa-star"></i></span>
                            <span><i class = "fas fa-star"></i></span>
                            <span><i class = "fas fa-star"></i></span>
                            <span><i class = "far fa-star"></i></span>
                        </div>
                        <h3>Nice Place</h3>
                        <p>"Good quality to price ratio. The place has a nice pool and a serene atmosphere. The rooms are nice the staff are nice."</p>
                        <img src = "images/p5.jpeg" alt = "customer image">
                        <span>Soren | USA</span>
                    </div>
                    <!-- end of single customer -->
                    <!-- single customer -->
                    <div class = "customer">
                        <div class = "rating">
                            <span><i class = "fas fa-star"></i></span>
                            <span><i class = "fas fa-star"></i></span>
                            <span><i class = "fas fa-star"></i></span>
                            <span><i class = "fas fa-star"></i></span>
                            <span><i class = "far fa-star"></i></span>
                        </div>
                        <h3>Nice Place</h3>
                        <p>"Good quality to price ratio. The place has a nice pool and a serene atmosphere. The rooms are nice the staff are nice."</p>
                        <img src = "images/p6.jpeg" alt = "customer image">
                        <span>Oliver | Canada</span>
                    </div>
                    <!-- end of single customer -->
                </div>
            </div>
        </section>
        <!-- end of body content -->
        
        <!-- contact us  -->
        <section class = "contact" id = "contact">
            <div class = "sec-width">
                <div class = "title">
                    <h2 >Contact Us</h2>
                </div>
                <div class="containerC">
                    <div class="contact-box">
                        <div class="left"></div>
                        <div class="right">
                            <h2>Contact Us</h2>
                            <input type="text" class="field" placeholder="Your Name">
                            <input type="text" class="field" placeholder="Your Email">
                            <input type="text" class="field" placeholder="Phone">
                            <textarea placeholder="Message" class="field"></textarea>
                            <button class="btn">Send</button>
                        </div>
                    </div>
                </div>
                
        </section>
        <!-- end of contact us -->
        
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
                    <a href = "bookingcard.php">Rooms</a>
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
