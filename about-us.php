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
                        <span>About Us</span>
                    </li>		
                </ol>		
                <h1>About Us</h1>
            </div>
        </header>

        <div class="container">
            <div class="inner inner-two-col row">
                <div class="col-lg-12">
                    <div class="blog-post text-page">
                        <div class="col-md-6">
                            <h2 class="h2-about">ABOUT US</h2>
                            <p>Bold textmaecenas mauris felis, pharetra ac odio a, interdum ultricies risus. Nunc tempor nunc at odio fermentum ullamcorper. Sed tincidunt ut tortor quis placerat. Curabitur tristique imperdiet mollis. Sed rutrum id tellus et ultricies. Aliquam maximus sit amet justo vitae volutpat. Ut scelerisque diam vitae ante rhoncus vulputate. Curabitur laoreet eleifend tortor. Mauris sit amet facilisis nunc. Quisque id fermentum leo, eget tincidunt augue. Donec viverra sed ante eget condimentum.</p>
                            <h5>Why Choose Us...</h5>
                            <p>We are a well reputed and high professional, reliable taxi services and tours operators in Sri Lanka.  Our existing customers have proved it on their TripAdvisor feedbacks.</p>
                        </div>
                        <div class="col-md-6 t-opacity">
                            <img src="assets/images/taxi_PNG16.png" class="img-responsive" alt=""/>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container about">
            <div class="inner inner-two-col row">
                <div class="col-lg-12">
                        <div class="col-md-6">
                            <div class="vision">
                                <img src="assets/images/vision1.png" alt=""/>
                            </div>
                            <h4 class="vision">VISION</h4>
                            <p class="para-about">To be the most preferred and excellent taxi service providers & tour operators in Sri Lanka.</p>
                        </div>
                        <div class="col-md-6">
                            <div class="vision">
                                <img src="assets/images/mission1.png" alt=""/>
                            </div>
                            <h4 class="vision">MISSION</h4>
                            <p class="para-about">To be the best taxi services providers and tours operators in Sri Lanka, by offering high quality professional services, maximum customer satisfaction and very comfortable services. </div> 
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
