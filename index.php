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
        <header id="parent">
            <div id="child">
                <h1>Welcome to Travel Experts</h1>
                <h3>We are here to get you there!</h3>
            </div>
        </header>
        <nav>
            <ul class="row">
                <li><a href="#">Travel Plans</a></li>
                <li><a href="#">Register</a></li>
                <li><a href="#">Contact Us</a></li>
            </ul>
        </nav>

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
                <h3>Contact Us</h3>
            </section>
        </main>

        <footer>
        </footer>
    </body>
</html>
