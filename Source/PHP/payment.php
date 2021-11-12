<?php
include ('config.php');
?>


<html>
    <head>
        <title>

            Payment
        </title>
        <link rel="stylesheet" href="../css/styles.css">
        <link rel="stylesheet" href="../css/paymentstyle.css">

        


        <!--icons from font awesome.com-->
        <script src="https://kit.fontawesome.com/f658ac2203.js" crossorigin="anonymous"></script>
        <!--fonts from google fonts-->

        <link href="https://fonts.googleapis.com/css2?family=Nunito&family=Piazzolla&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Lemonada:wght@500&display=swap" rel="stylesheet">

    </head>
    <body>

        <!--header-->
        <header>
            <div>
                <img src="../img/Logo-white.png" class="logo">
            </div>
            <i class="fa fa-bars menu-toggle"></i>
            <ul class="nav">
                <li><a href="../html/Home.html">Home</a></li>
                <li><a href="../html/Hotel.html">Hotels</a></li>
                <li><a href="../html/Article.html">Articles</Article></a></li>
                <li><a href="Signup.html">Sign Up</a></li>
                <li><a href="Login.html">Login</a></li>
                <li><a href="#">
                    <i class="fa fa-user"></i>  &nbsp;  
                    Maneeshi Weemansa
                </a>
                <ul>
                    <li><a href="My Profile.html">My profile</a></li>
                    <li><a href="Login.html">Logout</a></li>
                </ul>
                </li>
            </ul>        
            </header>
        <!--/header-->    



        <div class="container" style="height: 100%;">
   
        
            <div class="box">
                <img src="../img/avatar.png" class="avatar">
                    <h1>Enter Your Payment Details</h1>
                    <form class="form" action = "payment connect.php" method="POST" enctype="multipart/form-data">
                        <p>Card Holder</p>
                        <input type="text" name="name" placeholder="Enter card holder name">
                        <p>Card number</p>
                        <input type="text"name="number" placeholder="Enter credit card number" maxlength="16">
                        <div class="group">
                        
                        <p>CVC</p>
                        <div class="space">
                        <input type="text" name="cvv" placeholder="Enter CVC number"maxlength="3">
                        </div>
                        <p>Expiry date</p>
                        <div class="date">
                        <input type="month" "year" name="exdate" placeholder="mm/yy">
                        </div>
                        </div>
                        <input type="submit" name="submit">
                        <a href="../html/Pay-Pal.html">Pay with PayPal</a>
                    </form>
                    
                </div>
    

            
            
        </div>





        <!--footer-->
        <div class="footer">
            <div class="footer-up">
                <div class="footer-section about">
                    <img src="../img/Logo-coloured.png" class="logo">
                    
                    
                    <p class="aboutp">
                        tripceylon.com built-up in 2020 by Team-Pentagon to fulfil a major shortcome of SriLankan tourism system. 
                        tripceylon.com is a user-friendly and simple platform which tourists can reserve hotels.
                    </p>
                    <div class="contact">
                        <i class="fas fa-phone"></i> &nbsp;  +9478829607 / +9420629233
                        <br>
                        <i class="fas fa-envelope"></i> &nbsp;  info@pentagon.com
                    </div>
                    <br><br>
                    <div class="social">
                        <a href="https://web.facebook.com"><i class="fab fa-facebook"></i></a>
                        <a href="https://www.instagram.com"><i class="fab fa-instagram"></i></a>
                        <a href="https://www.youtube.com"><i class="fab fa-youtube"></i></a>
                        <a href="https://twitter.com"><i class="fab fa-twitter"></i></a>
                    </div>
                    
                </div>
                <div class="footer-section links">
                    <h2>Quick Links</h2>
                    
                    <ul class="qlinks">
                        <a href="Gallery.html">
                            <li>Gallery</li>
                        </a>

                        <a href="About Us.html">
                            <li>About Us</li>
                        </a>

                        <a href="Contact Us.html">
                            <li>Contact Us</li>
                        </a>

                        <a href="privacypolicy.html">
                            <li>Policy</li>
                        </a>
                    </ul>
                </div>
                <div class="footer-section contact">
                    <h2>Contact us</h2>
                    <form action="index-html" method="post">
                    <input type="email" name="email" class="contact-input" placeholder="Your email address...">
                    <br><br>
                    <textarea name="message" class="text-input" placeholder="Your message..."></textarea>
                    <br><br><br>
                    <button type="Submit" class="btn">
                        <i class="fas fa-paper-plane"></i>
                        send
                    </button>
                </form>
                
                </div>
            </div>
            <div class="footer-bottom">
                Copyright &copy 2020 by Team Pentagon
            </div>
        </div>
        <!--/footer-->   
        
        
    <!--JQuery-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js" integrity="sha512-+NqPlbbtM1QqiK8ZAo4Yrj2c4lNQoGv8P79DPtKzj++l5jnN39rHA/xsqn8zE9l0uSoxaCdrOgFs6yjyfbBxSg==" crossorigin="anonymous"></script>
    

    <!--Slick slider-->
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <!--custom script-->
    <script src="../js/scripts.js"></script>
    </body>
</html>