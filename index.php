<!doctype html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Travel Experts</title>
        <meta name="description" content="Travel Experts website">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="vendor/css/bootstrap.min.css">

        <link rel="stylesheet"  href="css/reset.css">
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/grid.css">
        <link rel="stylesheet" href="css/travelexperts.css">

        <link href="https://fonts.googleapis.com/css?family=Lobster&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Ubuntu&display=swap" rel="stylesheet">
        <script src="https://kit.fontawesome.com/7a976362d3.js"></script>

    </head>

    <body>
      <?php
        include("data-connect.php");
      ?>
        <header>
            <nav>
                <div class="pgrow" >
<!--                    <img class="logo" src="./img/TravelExperts.png" alt="Travel experts logo">-->
                    <ul class="head-nav">
                        <li><a href="#Plans">Travel Plans</a></li>
                        <li><a href="#Register">Register</a></li>
                        <li><a href="#AboutUs">About Us</a></li>
                        <li><a href="#ContactUs">Contact Us</a></li>
<!--                        <li>-->
<!--                            <div class="dropdown">-->
<!--                                <button class="loginlnk dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">-->
<!--                                    Login-->
<!--                                </button>-->
<!--                                <form class="dropdown-menu p-4">-->
<!--                                    <div class="form-group">-->
<!--                                        <label for="exampleDropdownFormEmail2">Email address</label>-->
<!--                                        <input type="email" class="form-control" id="exampleDropdownFormEmail2" placeholder="email@example.com">-->
<!--                                    </div>-->
<!--                                    <div class="form-group">-->
<!--                                        <label for="exampleDropdownFormPassword2">Password</label>-->
<!--                                        <input type="password" class="form-control" id="exampleDropdownFormPassword2" placeholder="Password">-->
<!--                                    </div>-->
<!--                                    <div class="form-group">-->
<!--                                        <div class="form-check">-->
<!--                                            <input type="checkbox" class="form-check-input" id="dropdownCheck2">-->
<!--                                            <label class="form-check-label" for="dropdownCheck2">-->
<!--                                                Remember me-->
<!--                                            </label>-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                    <button type="submit" class="btn btn-primary">Sign in</button>-->
<!--                                </form>-->
<!--                            </div>-->
<!--                        </li>-->

                    </ul>
                </div>
            </nav>
            <div class="heading-text-box">
                <h1>Welcome to Travel Experts</h1>
                <h3>We are here to get you there!</h3>
            </div>
        </header>

        <main class="js--section-features">
            <section id="Plans">
                <h3>Travel Plans</h3>
                <div id="plans" class="carousel slide" data-ride="carousel">
                    <!-- Indicators -->
                    <ul class="carousel-indicators">
                        <li data-target="#plans" data-slide-to="0" class="active"></li>
                        <li data-target="#plans" data-slide-to="1"></li>
                        <li data-target="#plans" data-slide-to="2"></li>
                    </ul>

                    <!-- Wrapper for slides -->
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="img/1Caribbean_New_Year/1.jpeg" alt="Los Angeles">
                            <img src="img/1Caribbean_New_Year/2.jpg" alt="Los Angeles">
                            <img src="img/1Caribbean_New_Year/3.jpg" alt="Los Angeles">
                        </div>

                        <div class="carousel-item">
                            <img src="img/2Polynesian_Paradise/1.jpeg" alt="Chicago">
                            <img src="img/2Polynesian_Paradise/2.jpg" alt="Chicago">
                            <img src="img/2Polynesian_Paradise/3.jpg" alt="Chicago">
                        </div>

                        <div class="carousel-item">
                        </div>
                    </div>

                    <!-- Left and right controls -->
                    <a class="carousel-control-prev" href="#plans" data-slide="prev">
                        <span class="carousel-control-prev-icon"></span>
                    </a>
                    <a class="carousel-control-next" href="#plans" data-slide="next">
                        <span class="carousel-control-next-icon"></span>
                    </a>
                </div>
<!--            Registration Section-->
            </section>
            <section id="Register" class="registration--main_form">
                <h3>Register</h3>
                <?php
                    include("register.php");
                ?>
            </section>
<!--            Contact Section - Sumit-->
            <section id="ContactUs">
                <h3>Get In Touch</h3>
                <div class="contact pgrow">
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
            <a href="#" class="back-to-top"><i id="arrow" class="fas fa-arrow-alt-circle-up fa-3x"></i></a>
        </main>

        <footer>
        </footer>
<!--        <script src="vendors/js/jquery-1.12.0.min.js"></script>-->
        <script src="vendor/js/jquery-3.4.1.min.js"></script>
        <script src="vendor/js/node_modules/jquery-waypoints/waypoints.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="vendor/js/bootstrap.min.js"></script>
        <script src="js/main.js"></script>
        <?php
          $conn->close();
        ?>
    </body>
</html>
