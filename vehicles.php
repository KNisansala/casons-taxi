<?php
include_once(dirname(__FILE__) . '/class/include.php');

$VEHICLE = new Vehicle(Null);
$vehicles = $VEHICLE->all();
?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="icon" type="image/png" href="assets/images/favicon.png">

        <title>CasonsTaxi</title>

        <link href="assets/css/bootstrap-grid.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" rel="stylesheet">
        <link href="assets/css/swiper.css" rel="stylesheet">
        <link href="assets/css/swipebox.css" rel="stylesheet">
        <link href="assets/css/zoomslider.css" rel="stylesheet">
        <link href="assets/css/style2.css" rel="stylesheet">
        <link href="assets/css/styles.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">

        <link href="https://fonts.googleapis.com/css?family=Fira+Sans+Condensed:700,800%7COpen+Sans:400,600,700" rel="stylesheet"> 

        <script type="text/javascript" src="assets/js/modernizr-2.6.2.min.js"></script>
    </head>
    <body>

        <!-- Top Bar -->
        <?php
        include './top-bar.php';
        ?>
        <!-- /Top Bar -->

        <!-- Header -->
        <?php
        include 'header.php';
        ?>
        <!-- /Header -->

        <header class="page-header margin-bottom-0" style="background-image: url(assets/images/_inner-bg.jpg);">
            <div class="container">
                <ol class="bread">
                    <li>
                        <a href="./"><span>Home</span></a>
                    </li>
                    <li class="divider"><span>//</span></li>
                    <li>
                        <span>Vehicles</span>
                    </li>
                </ol>		
                <h1>Vehicles</h1>
            </div>
        </header>

        <section id="tariffs" class="dark-bg">
            <div class="container">
                <h4 class="yellow">See Our</h4>
                <h1 class="tariffs-black">Vehicles</h1>
                <div class="row">

                    <?php
                    foreach ($vehicles as $vehicle) {
                        ?>

                        <div class="col-md-3 col-sm-6">
                            <div class="item matchHeight">
                                <div class="image"><img src="upload/vehicle/<?php echo $vehicle['image_name'] ?>" alt="Tariff"></div>
                                <h4><?php echo $vehicle['title']; ?></h4>
                                <p><?php echo $vehicle['short_description']; ?></p>
                                <div class="price"><?php echo "$", $vehicle['price']; ?><span>/km</span></div>
                                <a href="view-vehicles.php?id=<?php echo $vehicle["id"]; ?>" class="btn btn-yellow">read more</a>
                            </div>
                        </div>
                                        
<!--                                        <div class="row margin-top">
                                            <div class="col-md-3 col-sm-6">
                                                <div class="item matchHeight">
                                                    <div class="image"><img src="assets/images/_tariff-1.png" alt="Tariff"></div>
                                                    <h4>Standart</h4>
                                                    <p>Standard sedan for a drive around the city at your service</p>
                                                    <div class="price">$2<span>/km</span></div>
                                                    <a href="view-vehicles.php" class="btn btn-yellow">read more</a>
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-sm-6">
                                                <div class="item matchHeight">
                                                    <div class="image"><img src="assets/images/_tariff-2.png" alt="Tariff"></div>
                                                    <h4>Business</h4>
                                                    <p>Standard sedan for a drive around the city at your service</p>
                                                    <div class="price">$2<span>/km</span></div>
                                                    <a href="view-vehicles.php" class="btn btn-yellow">read more</a>
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-sm-6">
                                                <div class="item matchHeight">
                                                    <div class="image"><img src="assets/images/_tariff-3.png" alt="Tariff"></div>
                                                    <h4 class="red">Vip</h4>
                                                    <p>Standard sedan for a drive around the city at your service</p>
                                                    <div class="price">$2<span>/km</span></div>
                                                    <a href="view-vehicles.php" class="btn btn-yellow">read more</a>
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-sm-6">
                                                <div class="item matchHeight">
                                                    <div class="image"><img src="assets/images/_tariff-4.png" alt="Tariff"></div>
                                                    <h4>Bus-minivan</h4>
                                                    <p>Standard sedan for a drive around the city at your service</p>
                                                    <div class="price">$2<span>/km</span></div>
                                                    <a href="view-vehicles.php" class="btn btn-yellow">read more</a>
                                                </div>
                                            </div>
                                        </div>-->

                        <?php
                    }
                    ?>
                </div>
        </section>


        <!-- Footer -->
        <?php
        include 'footer.php';
        ?>
        <!-- /Footer -->


        <script>var base_href = '/';</script>
        <script type="text/javascript" src="assets/js/jquery.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>	

        <script type="text/javascript" src="assets/js/plugins.min.js"></script>		

        <script src="assets/js/map-style.js"></script>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCTRSHf8sjMCfK9PHPJxjJkwrCIo5asIzE"></script>	
        <script type="text/javascript" src="assets/js/scripts.js"></script>

        <script>
            (function (i, s, o, g, r, a, m) {
                i['GoogleAnalyticsObject'] = r;
                i[r] = i[r] || function () {
                    (i[r].q = i[r].q || []).push(arguments)
                }, i[r].l = 1 * new Date();
                a = s.createElement(o),
                        m = s.getElementsByTagName(o)[0];
                a.async = 1;
                a.src = g;
                m.parentNode.insertBefore(a, m)
            })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');

            ga('create', 'UA-91006724-1', 'auto');
            ga('send', 'pageview');
        </script>

    </body>
</html>
