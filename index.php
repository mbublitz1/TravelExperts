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
                        <li><a href="#">Travel Plans</a></li>
                        <li><a href="#">Register</a></li>
                        <li><a href="#">Contact Us</a></li>
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
                <h3>Travel Plans</h3>
<!--            Registration Section-->
            </section>
            <section class="registration--main_form">
                <h3>Register</h3>
                <?php
                    include("register.php");
                ?>

            </section>
<!--            Contact Section - Sumit-->
            <section>
                <h3>Get In Touch</h3>
                <div class="contact row">
                    <div class="col span-1-of-3">
                        <i class="fas fa-envelope-open-text fa-3x"></i><br><br>
                        <p><B>EMAIL:</B></p><br><p>Calgary Branch</p>Senior Agent<p>janet.delton@travelexperts.com</p><br>
                        <p>Okatoks Branch</p>Senior Agent<p>jane.merrill@travelexperts.com</p>

                    </div>
                    <div class="col span-1-of-3">
                        <i class="fas fa-phone-square-alt fa-3x"></i><br><br>
                        <p><B>PHONE:</B></p><br><p>Calgary<br> Travel Expert<p> (403) 271-9873</p> <br><p>FAX</p>(403) 271-9872</p>
                        <br><p>Okatoks</p> Travel Expert<p> (403) 563-2381</p> <br><p>FAX</p>(403) 563-2382</p>
                    </div>
                    <div class="col span-1-of-3">
                        <i class="fas fa-map-marker-alt fa-3x"></i><br><br>
                        <p><B>ADDRESS:</B></p><br>Travel Expert<p>1155 8th Ave SW</p> Calgary, AB <p>T2P 1N3</p><br>
                        Travel Expert<p>110 Main Street</p> Okotoks, AB <p>T7R 3J5</p>
                    </div>
                </div>
            </section>
        </main>

        <footer>
        </footer>
    </body>
</html>
