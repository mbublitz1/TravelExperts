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
<!--                <form name="RegForm" action="/submit.php" method="post">-->
<!--                    <ul class="row form&#45;&#45;inputs">-->
<!--                        <li class="span-2-of-12 col box"><label for="Name">First Name:</label></li>-->
<!--                        <li class="span-8-of-12 col box"><input id="Name" type="text" size=65 name="Name"></li>-->
<!--                    </ul>-->
<!--                    <ul class="row form&#45;&#45;inputs">-->
<!--                        <li class="span-2-of-12 col box"><label for="Name">Last Name:</label></li>-->
<!--                        <li class="span-8-of-12 col box"><input id="Name" type="text" size=65 name="Name"></li>-->
<!--                    </ul>-->
<!--                    <ul class="row form&#45;&#45;inputs">-->
<!--                        <li class="span-2-of-12 col box"><label for="Address">Address:</label></li>-->
<!--                        <li class="span-8-of-12 col box"><input id="Address" type="text" size=65 name="Address"></li>-->
<!--                    </ul>-->
<!--                    <ul class="row form&#45;&#45;inputs">-->
<!--                        <li class="span-2-of-12 col box"><label for="Email">Email:</label></li>-->
<!--                        <li class="span-8-of-12 col box"><input id="Email" type="Email" size=65 name="EMail"></li>-->
<!--                    </ul>-->
<!--                    <ul class="row form&#45;&#45;inputs">-->
<!--                        <li class="span-2-of-12 col box"><label for="Tel">Telephone:</label></li>-->
<!--                        <li class="span-8-of-12 col box"><input id="Tel" type="text" size=65 name="Telephone"></li>-->
<!--                    </ul>-->
<!--                    <ul class="row form&#45;&#45;inputs">-->
<!--                        <li class="span-2-of-12 col box"><label for="comment">Comment:</label></li>-->
<!--                        <li class="span-1-of-12 col box"><textarea id="comment" cols="55" rows="10"-->
<!--                                                                   name="Comment"> </textarea></li>-->
<!--                    </ul>-->
<!--                    <ul class="row">-->
<!--                        <li><input class="button" type="submit" value="Send" name="Submit">-->
<!--                            <input class="button" type="reset" value="Reset" name="Reset"></li>-->
<!--                    </ul>-->
<!--                </form>-->
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
