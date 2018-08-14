
<?php
include_once(dirname(__FILE__) . '/class/include.php');

$OFFER = new Offer(Null);
$offers = $OFFER->all();
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

        <header class="page-header" style="background-image: url(assets/images/_inner-bg.jpg);">
            <div class="container">
                <ol class="bread">
                    <li>
                        <a href="./"><span>Home</span></a>
                    </li>
                    <li class="divider"><span>//</span></li>
                    <li>
                        <span>Special Offers</span>
                    </li>
                </ol>		
                <h1>Special Offers</h1>
            </div>
        </header>

        <div class="container">
            <div class="inner row">
                <div class="col-lg-12 text-page">

                    <div class="blog">
                        <div class="row">

                            <?php
                            foreach ($offers as $offer) {
                                ?>
                                <div class="col-lg-4 col-md-4 col-sm-6">
                                    <div class="item matchHeight">
                                        <a href="" class="photo"><img src="upload/offer/<?php echo $offer['image_name'] ?>" class="full-width rounded" alt="Blog"></a>								
                                        <div class="description">
                                            <a href="#" class="header">
                                                <h5><?php echo $offer['title']; ?></h5>
                                            </a>
                                            <p class="text p-margin">
                                                <?php echo $offer['short_description']; ?> 									</p>
                                            <a href="view-offers.php?id=<?php echo $offer["id"]; ?>" class="btn btn-yellow">read more</a>
                                        </div>
                                    </div>
                                </div>

                                <?php
                            }
                            ?>
                        </div>						
                    </div>

                </div>
            </div>
        </div>

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
