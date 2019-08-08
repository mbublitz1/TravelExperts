<!doctype html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Travel Experts</title>
        <meta name="description" content="Travel Experts website">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet"  href="css/reset.css">
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/travelexperts.css">
        <link rel="stylesheet" href="css/grid.css">
        <link href="https://fonts.googleapis.com/css?family=Lobster&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Ubuntu&display=swap" rel="stylesheet">
        <script src="https://kit.fontawesome.com/7a976362d3.js"></script>
    </head>

    <body>
        <header>
            <nav>
                <div class="row">
<!--                    <img class="logo" src="./img/TravelExperts.png" alt="Travel experts logo">-->
                    <ul class="main-nav">
                        <li><a href="#Plans">Travel Plans</a></li>
                        <li><a href="#Register">Register</a></li>
                        <li><a href="#AboutUs">About Us</a></li>
                        <li><a href="#ContactUs">Contact Us</a></li>
                    </ul>
                </div>
            </nav>
            <div class="heading-text-box">
                <h1>Welcome to Travel Experts</h1>
                <h3>We are here to get you there!</h3>
            </div>
        </header>

        <main>
            <section>
                <h3 id="Plans">Travel Plans</h3>
<!--            Registration Section-->
            </section>
            <section class="registration--main_form">
                <h3 id="Register">Register</h3>
                <?php
                    include("register.php");
                ?>

            </section>
<!--            Contact Section - Sumit-->
            <section>
                <h3 id="ContactUs">Contact Us</h3>
                <div class="contact row">
                    <div class="col span-1-of-3">
                        <i class="fas fa-envelope-open-text fa-3x"></i>
                    </div>
                    <div class="col span-1-of-3">
                        <i class="fas fa-phone-square-alt fa-3x"></i>
                    </div>
                    <div class="col span-1-of-3">
                        <i class="fas fa-map-marker-alt fa-3x"></i>
                    </div>
                </div>
            </section>
            <a href="#" class="back-to-top"><i id="arrow" class="fas fa-arrow-alt-circle-up fa-3x"></i></a>
        </main>

        <footer>
        </footer>
<!--        <script src="vendors/js/jquery-1.12.0.min.js"></script>-->
        <script src="js/vendor/jquery-1.12.0.min.js"></script>
        <script src="js/node_modules/jquery-waypoints/waypoints.min.js"></script>
        <script src="js/main.js"></script>
    </body>
</html>
