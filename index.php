<!doctype html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Travel Experts</title>
        <meta name="description" content="Travel Experts website">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>

        <link rel="stylesheet"  href="css/reset.css">
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/travelexperts.css">
        <link rel="stylesheet" href="css/grid.css">
        <link href="https://fonts.googleapis.com/css?family=Lobster&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Ubuntu&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Lato:100,300,300i,400" rel="stylesheet">
        <script src="https://kit.fontawesome.com/7a976362d3.js"></script>
    </head>

    <body>
      <?php
        include("data-connect.php");
      ?>
        <header>
            <nav>
                <div class="pgrow" >
                    <img class="logo" src="./img/travelexpertnew.png"Travel experts logo">
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

<!--        <main class="js--section-features">-->
        <main>
            <section id="Plans">
                <h3>Travel Plans</h3>
                <div id="plans" class="carousel slide" data-ride="carousel">
                    <ul class="carousel-indicators">
                        <li data-target="#plans" data-slide-to="0" class="active"></li>
                        <li data-target="#plans" data-slide-to="1"></li>
                        <li data-target="#plans" data-slide-to="2"></li>
                        <li data-target="#plans" data-slide-to="3"></li>
                    </ul>
                    <!-- Wrapper for slides -->
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <h4>Caribbean New Year</h4>
                            <div class="row">
                                <div class="col">
                                    <img src="img/1Caribbean_New_Year/1.jpg" alt="Los Angeles">
                                    <?php
                                    $query = "SELECT Packageid, PkgName, PkgDesc, PkgBasePrice FROM packages
                                    WHERE Packageid = '12'
                                    ORDER BY Packageid";
                                    $res = $conn->query($query);
                                    $row = $res->fetch_assoc();
                                    echo "<div class='carousel-package--div'>";
                                    echo "<p class='packText'>".$row['PkgName']."</p>";
                                    echo "<p class='packText2'>".$row['PkgDesc']."</p>";
                                    echo "<p class='packCost'>".$row['PkgBasePrice']."</p>";
                                    echo "</div>";
                                     ?>
                                </div>
                                <div class="col">
                                    <img src="img/1Caribbean_New_Year/a(2).jpg" alt="Los Angeles">
                                    <?php
                                    $query = "SELECT Packageid, PkgName, PkgDesc, PkgBasePrice FROM packages
                                    WHERE Packageid = '1'
                                    ORDER BY Packageid";
                                    $res = $conn->query($query);
                                    $row = $res->fetch_assoc();
                                    echo "<div class='carousel-package--div'>";
                                    echo "<p class='packText'>".$row['PkgName']."</p>";
                                    echo "<p class='packText2'>".$row['PkgDesc']."</p>";
                                    echo "<p class='packCost'>".$row['PkgBasePrice']."</p>";
                                    echo "</div>";
                                     ?>
                                </div>
                                <div class="col">
                                    <img src="img/1Caribbean_New_Year/2.jpg" alt="Los Angeles">
                                    <?php
                                    $query = "SELECT Packageid, PkgName, PkgDesc, PkgBasePrice FROM packages
                                    WHERE Packageid = '13'
                                    ORDER BY Packageid";
                                    $res = $conn->query($query);
                                    echo "<div class='carousel-package--div'>";
                                    echo "<p class='packText'>".$row['PkgName']."</p>";
                                    echo "<p class='packText2'>".$row['PkgDesc']."</p>";
                                    echo "<p class='packCost'>".$row['PkgBasePrice']."</p>";
                                    echo "</div>";
                                     ?>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <h4>Polynesian Paradise</h4>
                            <div class="row">
                                <div class="col">
                                    <img src="img/2Polynesian_Paradise/1.jpeg" alt="Chicago">
                                    <?php
                                    $query = "SELECT Packageid, PkgName, PkgDesc, PkgBasePrice FROM packages
                                    WHERE Packageid = '10'
                                    ORDER BY Packageid";
                                    $res = $conn->query($query);
                                    echo "<div class='carousel-package--div'>";
                                    echo "<p class='packText'>".$row['PkgName']."</p>";
                                    echo "<p class='packText2'>".$row['PkgDesc']."</p>";
                                    echo "<p class='packCost'>".$row['PkgBasePrice']."</p>";
                                    echo "</div>";
                                     ?>
                                </div>
                                <div class="col">
                                    <img src="img/2Polynesian_Paradise/a(1).jpg" alt="Chicago">
                                    <?php
                                    $query = "SELECT Packageid, PkgName, PkgDesc, PkgBasePrice FROM packages
                                    WHERE Packageid = '2'
                                    ORDER BY Packageid";
                                    $res = $conn->query($query);
                                    echo "<div class='carousel-package--div'>";
                                    echo "<p class='packText'>".$row['PkgName']."</p>";
                                    echo "<p class='packText2'>".$row['PkgDesc']."</p>";
                                    echo "<p class='packCost'>".$row['PkgBasePrice']."</p>";
                                    echo "</div>";
                                     ?>
                                </div>
                                <div class="col">
                                    <img src="img/2Polynesian_Paradise/3.jpg" alt="Chicago">
                                    <?php
                                    $query = "SELECT Packageid, PkgName, PkgDesc, PkgBasePrice FROM packages
                                    WHERE Packageid = '11'
                                    ORDER BY Packageid";
                                    $res = $conn->query($query);
                                    $row = $res->fetch_assoc();
                                    echo "<div class='carousel-package--div'>";
                                    echo "<p class='packText'>".$row['PkgName']."</p>";
                                    echo "<p class='packText2'>".$row['PkgDesc']."</p>";
                                    echo "<p class='packCost'>".$row['PkgBasePrice']."</p>";
                                    echo "</div>";
                                     ?>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <h4>Asian Expedition</h4>
                            <div class="row">
                                <div class="col">
                                    <img src="img/3Asian_Expedition/img1.jpg" alt="Chicago">
                                    <?php
                                    $query = "SELECT Packageid, PkgName, PkgDesc, PkgBasePrice FROM packages
                                    WHERE Packageid = '5'
                                    ORDER BY Packageid";
                                    $res = $conn->query($query);
                                    echo "<div class='carousel-package--div'>";
                                    echo "<p class='packText'>".$row['PkgName']."</p>";
                                    echo "<p class='packText2'>".$row['PkgDesc']."</p>";
                                    echo "<p class='packCost'>".$row['PkgBasePrice']."</p>";
                                    echo "</div>";
                                     ?>
                                    <p>This is a test</p>
                                </div>
                                <div class="col">
                                    <img src="img/3Asian_Expedition/Thailand.jpg" alt="Chicago">
                                    <?php
                                    $query = "SELECT Packageid, PkgName, PkgDesc, PkgBasePrice FROM packages
                                    WHERE Packageid = '3'
                                    ORDER BY Packageid";
                                    $res = $conn->query($query);
                                    echo "<div class='carousel-package--div'>";
                                    echo "<p class='packText'>".$row['PkgName']."</p>";
                                    echo "<p class='packText2'>".$row['PkgDesc']."</p>";
                                    echo "<p class='packCost'>".$row['PkgBasePrice']."</p>";
                                    echo "</div>";
                                     ?>
                                </div>
                                <div class="col">
                                    <img src="img/3Asian_Expedition/Boracay-Philippines-1024x768.jpg" alt="Chicago">
                                    <?php
                                    $query = "SELECT Packageid, PkgName, PkgDesc, PkgBasePrice FROM packages
                                    WHERE Packageid = '6'
                                    ORDER BY Packageid";
                                    $res = $conn->query($query);
                                    echo "<div class='carousel-package--div'>";
                                    echo "<p class='packText'>".$row['PkgName']."</p>";
                                    echo "<p class='packText2'>".$row['PkgDesc']."</p>";
                                    echo "<p class='packCost'>".$row['PkgBasePrice']."</p>";
                                    echo "</div>";
                                     ?>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <h4>European Vacation</h4>
                            <div class="row">
                                <div class="col">
                                    <img src="img/4European_Vacation/london/london.jpg" alt="">
                                    <?php
                                    $query = "SELECT Packageid, PkgName, PkgDesc, PkgBasePrice FROM packages
                                    WHERE Packageid = '7'
                                    ORDER BY Packageid";
                                    $res = $conn->query($query);
                                    echo "<div class='carousel-package--div'>";
                                    echo "<p class='packText'>".$row['PkgName']."</p>";
                                    echo "<p class='packText2'>".$row['PkgDesc']."</p>";
                                    echo "<p class='packCost'>".$row['PkgBasePrice']."</p>";
                                    echo "</div>";
                                     ?>
                                </div>
                                <div class="col">
                                    <img src="img/4European_Vacation/paris/paris.jpg" alt="">
                                    <?php
                                    $query = "SELECT Packageid, PkgName, PkgDesc, PkgBasePrice FROM packages
                                    WHERE Packageid = '4'
                                    ORDER BY Packageid";
                                    $res = $conn->query($query);
                                    echo "<div class='carousel-package--div'>";
                                    echo "<p class='packText'>".$row['PkgName']."</p>";
                                    echo "<p class='packText2'>".$row['PkgDesc']."</p>";
                                    echo "<p class='packCost'>".$row['PkgBasePrice']."</p>";
                                    echo "</div>";
                                     ?>
                                </div>
                                <div class="col">
                                    <img src="img/4European_Vacation/rome/rome-italy.jpg" alt="">
                                    <?php
                                    $query = "SELECT Packageid, PkgName, PkgDesc, PkgBasePrice FROM packages
                                    WHERE Packageid = '8'
                                    ORDER BY Packageid";
                                    $res = $conn->query($query);
                                    echo "<div class='carousel-package--div'>";
                                    echo "<p class='packText'>".$row['PkgName']."</p>";
                                    echo "<p class='packText2'>".$row['PkgDesc']."</p>";
                                    echo "<p class='packCost'>".$row['PkgBasePrice']."</p>";
                                    echo "</div>";
                                     ?>
                                </div>
                            </div>
                        </div>
<!--                        Left and right controls-->
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

              <button type="button" onclick="plsReg()">Purchace</button>

              <?php
                include("contact-us.php");
              ?>
            </section>
            <a href="#" class="back-to-top"><i id="arrow" class="fas fa-arrow-alt-circle-up fa-3x"></i></a>
        </main>

        <footer>
        </footer>
        <script src="vendor/js/jquery-3.4.1.min.js"></script>
        <script src="https://code.jquery.com/jquery-migrate-3.0.0.min.js"></script>
        <script src="vendor/js/bootstrap.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="vendor/js/node_modules/jquery-waypoints/waypoints.min.js"></script>
        <script src="vendor/js/jquery-validation-1.19.1/dist/jquery.validate.min.js"></script>
        <script src="js/main.js"></script>
        <script src="js/plsReg.js"></script>
          <script>
              $("#regForm").validate();
          </script>
        <?php
          $conn->close();
        ?>
    </body>
</html>
