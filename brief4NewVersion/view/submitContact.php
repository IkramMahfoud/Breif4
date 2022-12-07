<!DOCTYPE html>
<html>

<head>
    <!-- Basic -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- Site Metas -->
    <meta name="keywords" content="rings , Bracelet, neckless, jawllery" />
    <meta name="description" content="this is the best store ever for finding the gold jawllery in the world!" />
    <meta name="author" content="" />

    <title>GOLD STORE</title>

    <!-- slider stylesheet -->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css" />

    <!-- bootstrap core css -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

    <!-- fonts style -->
    <link href="https://fonts.googleapis.com/css?family=Baloo+Chettan|Poppins:400,600,700&display=swap" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet" />
    <!-- responsive style -->
    <link href="css/responsive.css" rel="stylesheet" />
    <link rel="stylesheet" href="css/contact.css">
</head>

<?php
include_once 'index.php';
include_once 'gallery.php';
include_once 'about.php';
include_once 'contact.php';
?>

<body class="sub_page">

    <div class="hero_area">
        <!-- header section strats -->
        <header class="header_section">
            <div class="container-fluid">
                <nav class="navbar navbar-expand-lg custom_nav-container ">
                    <a class="navbar-brand" href="index.html">
                        <img src="images/logo.png" alt="">
                        <span>
                            Gold
                        </span>
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <div class="d-flex ml-auto flex-column flex-lg-row align-items-center">
                            <ul class="navbar-nav  ">
                                <li class="nav-item active">
                                    <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="gallery.php"> Gallery</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="about.php"> About</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="contact.php"> Contact</a>
                                </li>
                            </ul>

                        </div>
                    </div>
                </nav>
            </div>
        </header>
        <!-- end header section -->
    </div>



    <!--cart contact section-->

    <div class="cart-container">
        <div class="contact-box">
            <div class="message">
                <center>
                    <p class="medium">Your messge has been sumitted.</p><br>
                </center>
                <center>
                    <p class="light">We have received your message and we are going to be contacting you <br>
                </center>
                via the information you provided as soon as we can.</p>
            </div>

        </div>
    </div>

    <!--end cart contact section-->




    <!-- info section -->
    <section class="info_section ">
        <div class="container">
            <div class="info_container">
                <div class="row">
                    <div class="col-md-3">
                        <div class="info_logo">
                            <a href="">
                                <img src="images/logo.png" alt="">
                                <span>
                                    GOLD
                                </span>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="info_contact">
                            <a href="">
                                <img src="images/location.png" alt="">
                                <span>
                                    Address
                                </span>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="info_contact">
                            <a href="">
                                <img src="images/phone.png" alt="">
                                <span>
                                    +01 1234567890
                                </span>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="info_contact">
                            <a href="">
                                <img src="images/mail.png" alt="">
                                <span>
                                    demo@gmail.com
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="info_form">
                    <div class="d-flex justify-content-center">
                        <h5 class="info_heading">
                            Newsletter
                        </h5>
                    </div>
                    <form action="">
                        <div class="email_box">
                            <label for="email2">Enter Your Email</label>
                            <input type="text" id="email2">
                        </div>
                        <div>
                            <button>
                                subscribe
                            </button>
                        </div>
                    </form>
                </div>
                <div class="info_social">
                    <div class="d-flex justify-content-center">
                        <h5 class="info_heading">
                            Follow Us
                        </h5>
                    </div>
                    <div class="social_box">
                        <a href="">
                            <img src="images/fb.png" alt="">
                        </a>
                        <a href="">
                            <img src="images/twitter.png" alt="">
                        </a>
                        <a href="">
                            <img src="images/linkedin.png" alt="">
                        </a>
                        <a href="">
                            <img src="images/insta.png" alt="">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- end info_section -->

    <!-- footer section -->
    <section class="container-fluid footer_section">
        <p>
            &copy; <span id="displayYear"></span> All Rights Reserved
        </p>
    </section>
    <!-- footer section -->

    <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>
    <script type="text/javascript" src="js/custom.js"></script>
</body>

</html>