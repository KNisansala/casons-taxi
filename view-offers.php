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
                        <span>View Offers</span>
                    </li>		
                </ol>		
                <h1>View Offers</h1>
            </div>
        </header>

        <div class="container">
            <div class="inner inner-two-col row">
                <div class="col-lg-9">
                    <div class="blog-post text-page">

                        <div class="">
                            <div class="slider-inner swiper-container">
                                <div class="swiper-wrapper">
                                    <img src="assets/images/_homepage-3-2-bg.jpg" class="full-width swiper-slide" alt="Slider">
                                    <img src="assets/images/_homepage-1-bg.jpg" class="full-width swiper-slide" alt="Slider">
                                    <img src="assets/images/_homepage-3-bg.jpg" class="full-width swiper-slide" alt="Slider">
                                </div>
                                <div class="swiper-pagination"></div>
                            </div>
                        </div>

                        <div class="blog-info">
                            <div class="row">
                                <div class="col-lg-6 col-sm-12  col-xs-6">
                                    <h4>How often is a taxi used</h4>
                                </div>
                            </div>
                        </div>	

                        <p><strong>Bold text</strong> maecenas mauris felis, pharetra ac odio a, interdum ultricies risus. Nunc tempor nunc at odio fermentum ullamcorper. Sed tincidunt ut tortor quis placerat. Curabitur <a href="#">link style</a> tristique imperdiet mollis. Sed rutrum id tellus et ultricies. Aliquam maximus sit amet justo vitae volutpat. Ut scelerisque diam vitae ante rhoncus vulputate. Curabitur laoreet eleifend tortor. Mauris sit amet facilisis nunc. Quisque id fermentum leo, eget tincidunt augue. Donec viverra sed ante eget condimentum.</p>

                        <hr>
                    </div>

                    <div id="comments" class="comments-area">
                        <h3 class="comments-form-title">Add Comment</h3>
                        <div class="comments-form-wrap">

                            <a class="anchor" id="comments-form"></a>
                            <div class="comments-form anchor">
                                <div id="respond" class="comment-respond">
                                    <form  method="post" id="commentform" class="comment-form form" novalidate="">

                                        <label for="comment" class="required">Your Message</label>
                                        <textarea id="comment" name="comment" placeholder="Comment" aria-required="true"></textarea>

                                        <div class="row">
                                            <div class="comments-field comments_author col-sm-6">
                                                <label for="author" class="required">Name</label>
                                                <input id="author" name="author" placeholder="Name *" value="" size="30" aria-required="true" type="text">
                                            </div>
                                            <div class="comments-field comments_email col-sm-6">
                                                <label for="email" class="required">Email</label>
                                                <input id="email" name="email" placeholder="Email *" value="" size="30" aria-required="true" type="text">
                                            </div>
                                        </div>

                                        <input name="submit" id="send_comment" class="submit aligncenter btn btn-yellow btn-lg" value="Post Comment" type="submit">
                                    </form>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>

                <div class="col-lg-3">
                    <div class="widget-area" role="complementary">
                        <aside class="widget">
                            <div class="row">
                                <div class="item matchHeight offers">
                                    <div class="image">
                                        <img src="assets/images/_gallery-1.jpg" class="full-width rounded" alt="Blog">
                                    </div>
                                    <div class="description">
                                        <a href="view-offers.php" class="header">
                                            <h5 class="offers-h5">How often is a taxi used</h5>
                                        </a>
                                        <p class="text">
                                            Etiam maximus, tortor et commodo tincidunt, metus arcu porta libero, at dapibus nisl diam non est. Curabitur nunc urna, pulvinar in viverra sed. 									</p>
                                        <a href="view-offers.php" class="btn btn-yellow">read more</a>
                                    </div>
                                </div>
                                <div class="item matchHeight offers">
                                    <div class="image">
                                        <img src="assets/images/_gallery-2.jpg" class="full-width rounded" alt="Blog">
                                    </div>							
                                    <div class="description">
                                        <a href="view-offers.php" class="header">
                                            <h5 class="offers-h5">Taxi for business</h5>
                                        </a>
                                        <p class="text">
                                            Nam rhoncus egestas mi, a rutrum orci rutrum sit amet. Nulla id tempor odio. Vestibulum tempus mattis gravida. Maecenas non nisl quam.									</p>
                                        <a href="view-offers.php" class="btn btn-yellow">read more</a>
                                    </div>
                                </div>
                                <div class="item matchHeight offers1">
                                    <div class="image">
                                        <img src="assets/images/_gallery-3.jpg" class="full-width rounded" alt="Blog">
                                    </div>								
                                    <div class="description">
                                        <a href="view-offers.php" class="header">
                                            <h5 class="offers-h5">The best ways to pay a taxi</h5>
                                        </a>
                                        <p class="text">
                                            Aliquam eu consectetur libero. Aliquam nec auctor justo. Vestibulum sodales nunc vel bibendum consequat.Maecenas non nisl quam.									</p>
                                        <a href="view-offers.php" class="btn btn-yellow">read more</a>
                                    </div>
                                </div>
<!--                                <div class="item matchHeight vehicles1">
                                    <div class="image"><img src="assets/images/_gallery-4.jpg" class="full-width rounded" alt="Blog"></div>								
                                    <div class="description">
                                        <a href="view-offers.php" class="header"><h5>How often is a taxi used</h5></a>
                                        <p class="text">
                                            Etiam maximus, tortor et commodo tincidunt, metus arcu porta libero, at dapibus nisl diam non est. Curabitur nunc urna, pulvinar in viverra sed. 									</p>
                                        <a href="view-offers.php" class="btn btn-yellow">read more</a>
                                    </div>
                                </div>-->
                            </div>
                        </aside>

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
