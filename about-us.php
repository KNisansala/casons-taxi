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
                        <a href="index.php"><span>Home</span></a>
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

                        <div class="">
                            <img src="assets/images/_homepage-3-2-bg.jpg" class="full-width swiper-slide" alt="">
                        </div>

                        <div class="blog-info">
                            <div class="row">
                                <div class="col-lg-12">
                                    <a href="post.html"><span class="fa fa-clock-o"></span>January 2, 2017</a>
                                </div>
                                <div class="col-lg-6 col-sm-12 col-xs-6 right">
                                    <ul>
                                        <li class="icon-fav"><a href="#"><span class="fa fa-heart"></span>16</a></li>
                                        <li class="icon-comments"><a href="#"><span class="fa fa-commenting"></span>14</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>	

                        <p><strong>Bold text</strong> maecenas mauris felis, pharetra ac odio a, interdum ultricies risus. Nunc tempor nunc at odio fermentum ullamcorper. Sed tincidunt ut tortor quis placerat. Curabitur <a href="#">link style</a> tristique imperdiet mollis. Sed rutrum id tellus et ultricies. Aliquam maximus sit amet justo vitae volutpat. Ut scelerisque diam vitae ante rhoncus vulputate. Curabitur laoreet eleifend tortor. Mauris sit amet facilisis nunc. Quisque id fermentum leo, eget tincidunt augue. Donec viverra sed ante eget condimentum.</p>

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
