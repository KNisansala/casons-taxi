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
        <link href="booking-form/style.css" rel="stylesheet" type="text/css"/>

        <!--        <link href="booking-form/date-time-picker/css/jquery.datetimepicker.css" rel="stylesheet" type="text/css"/>-->

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

                        <a href="index.html"><span>Home</span></a>

                    </li>
                    <li class="divider"><span>//</span></li>
                    <li>
                        <span>Get Taxi</span>
                    </li>
                </ol>		
                <h1>Get Taxi</h1>
            </div>
        </header>

        <section class="form-taxi-short">
            <div class="container">
                <h4 class="yellow aligncenter">Our operators are waiting for your call:</h4>
                <h3 class="aligncenter">800-5-800</h3>
                <p class="form-label">Also you can order a taxi online</p>
                <form class="form-validate">
                    <div class="menu-types">
                        <a href="#" data-value="1" class="type-1 active">Standart</a>
                        <a href="#" data-value="2" class="type-2">Business</a>
                        <a href="#" data-value="3" class="type-3 red">Vip</a>
                        <a href="#" data-value="4" class="type-4">Bus-Minivan</a>
                        <input type="hidden" name="type-value" class="type-value ajaxField" value="1">
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" name="txtName" id="txtName" value="" placeholder="Name" class="input-validater">
                                <span id="spanName"></span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" name="txtEmail" id="txtEmail" value="" placeholder="Email" class="input-validater">
                                <span id="spanEmail"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" name="txtPickup" id="txtPickup" value="" placeholder="Pickup Location" class="input-validater">
                                <span id="spanPickup"></span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" name="txtDrop" id="txtDrop" value="" placeholder="Drop Location" class="input-validater">
                                <span id="spanDrop"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">	
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" name="txtDate" id="datepicker" placeholder="Date" value="" class="input-validater">
                                <span id="spanDate"></span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" name="txtPassengers" id="txtPassengers" value="" placeholder="No of Passengers" class="input-validater">
                                <span id="spanPassengers"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">	
                        <div class="col-md-12">
                            <div class="form-group">
                                <textarea name="txtMessage" id="txtMessage" class="input-validater" placeholder="Your Message"></textarea>
                                <span id="spanMessage"></span>
                            </div>
                        </div>
                    </div>

                    <div class="row">	
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" name="captchacode" id="captchacode" class="input-validater" placeholder="Security code >> ">
                                <span id="capspan" ></span>
                            </div>
                        </div>
                        <div class="col-md-6 booking-cap">
                            <div class="form-group">
                                <span><?php include("./contact-us-form/captchacode-widget.php"); ?></span>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group">
                            <input type="submit" value="Get Taxi" id="btnSubmit" class="btn btn-lg btn-black btn-white aligncenter">
                            <input type="hidden" id="type" name="type" value="2" class="ajaxField">
                        </div>
                    </div>

                    <div class="row">
                        <div class="div-check" >
                            <img src="contact-us-form/img/checking.gif" id="checking"/>
                        </div>
                    </div>

                    <div id="dismessage" align="center" class="msg-success"></div>
                </form>
            </div>
        </section>

        <section id="tariffs">
            <div class="container">
                <h4 class="yellow">See Our</h4>
                <h1 class="tariffs-black">Tariffs</h1>
                <div class="row">
                    <div class="col-md-3 col-sm-6">
                        <div class="item matchHeight">
                            <div class="image"><img src="assets/images/_tariff-1.png" class="full-width" alt="Tariff"></div>
                            <h4>Standart</h4>
                            <p>Standard sedan for a drive around the city at your service</p>
                            <div class="price">$2<span>/km</span></div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="item matchHeight">
                            <div class="image"><img src="assets/images/_tariff-2.png" class="full-width" alt="Tariff"></div>
                            <h4>Business</h4>
                            <p>Standard sedan for a drive around the city at your service</p>
                            <div class="price">$2,7<span>/km</span></div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="item matchHeight vip">
                            <div class="image"><img src="assets/images/_tariff-3.png" class="full-width" alt="Tariff"></div>
                            <h4 class="red">Vip</h4>
                            <p>Standard sedan for a drive around the city at your service</p>
                            <div class="price">$5<span>/km</span></div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="item matchHeight">
                            <div class="image"><img src="assets/images/_tariff-4.png" class="full-width" alt="Tariff"></div>
                            <h4>Bus-minivan</h4>
                            <p>Standard sedan for a drive around the city at your service</p>
                            <div class="price">$4,5<span>/km</span></div>
                        </div>
                    </div>												
                </div>
            </div>
        </section>		




        <section id="download" class="parallax" style="background-image: url(assets/images/_download-bg.jpg);">
            <div class="container">
                <h4 class="yellow">Get More Benefits</h4>
                <h2 class="h1">Download The App</h2>
                <div class="row">
                    <div class="col-md-4 col-sm-12">
                        <div class="items row">
                            <div class="col-md-2 visible-md visible-lg"><span class="num">01.</span></div>
                            <div class="col-md-10">
                                <h5 class="yellow">Fast booking</h5>
                                <p>Nam ac ligula congue, interdum enim sit amet, fermentum nisi.</p>
                            </div>
                            <div class="col-md-2 visible-md visible-lg"><span class="num">02.</span></div>
                            <div class="col-md-10">
                                <h5 class="yellow">Easy to use</h5>
                                <p>Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
                            </div>						
                        </div>
                    </div>
                    <div class="col-md-4 col-md-push-4 col-sm-12">
                        <div class="items items-right row">
                            <div class="col-md-10">
                                <h5 class="yellow">GPS searching</h5>
                                <p>Ut elementum tincidunt erat vel ornare. Suspendisse ac felis non diam pretium.</p>
                            </div>
                            <div class="col-md-2 visible-md visible-lg"><span class="num">03.</span></div>
                            <div class="col-md-10">
                                <h5 class="yellow">Bonuses for ride</h5>
                                <p>Phasellus l et porta tortor dignissim at. Pellentesque gravida tortor at euismod mollis. </p>
                            </div>						
                            <div class="col-md-2 visible-md visible-lg"><span class="num">04.</span></div>
                        </div>				
                    </div>				
                    <div class="col-md-4 col-md-pull-4 col-sm-12">
                        <div class="mob">
                            <a href="#"><img src="assets/images/_app-google.png" alt="App"></a>
                            <a href="#"><img src="assets/images/_app-apple.png" alt="App"></a>
                        </div>
                    </div>

                </div>
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
        <script src="booking-form/scripts.js" type="text/javascript"></script>
<!--        <script src="booking-form/date-time-picker/js/jquery.datetimepicker.js" type="text/javascript"></script>-->

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
        <script>
            $(function () {
                $("#datepicker").datepicker();
            });
        </script>

    </body>
</html>