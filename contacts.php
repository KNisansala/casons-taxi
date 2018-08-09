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
        <link href="contact-us-form/style.css" rel="stylesheet" type="text/css"/>
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
                        <span>Contacts</span>
                    </li>
                </ol>		
                <h1>Contacts</h1>
            </div>
        </header>

        <section id="page-contacts">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-4">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-6">

                                <h2 class="spanned"><span>Opening Hours:</span> 24/7</h2>
                            </div>					
                            <div class="col-lg-12 col-md-12 col-sm-6">
                                <ul class="address">
                                    <li class="large"><span class="fa fa-phone"></span>800-5-800</li>
                                    <li><span class="fa fa-skype"></span>casonstaxi</li>
                                    <li><span class="fa fa-map-marker"></span>43 2-nd Avenue,  New York,  29004-7153</li>
                                </ul>			
                            </div>
                            <div class="col-lg-12 col-sm-12">
                                <strong>Social:</strong>
                                <ul class="social social-big">
                                    <li><a href="#" class="social-fb fa fa-facebook"></a></li>
                                    <li><a href="#" class="social-twitter fa fa-twitter"></a></li>
                                    <li><a href="#" class="social-youtube fa fa-youtube"></a></li>
                                    <li><a href="#" class="social-inst fa fa-instagram"></a></li>
                                </ul>
                                <a href="#" class="btn btn-black-bordered btn-lg">Get Taxi Online</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-8 contact-form">

                        <form class="form form-sm form-validate">
                            <h3 class="aligncenter">Send Message</h3>
                            <div class="form-group">
                                <div class="col-md-6">
                                    <label>Your Name <span class="red">*</span></label>
                                    <input type="text" id="txtName" name="txtName" placeholder="Your name" class="input-validater">
                                    <span id="spanName"></span>
                                </div>
                                <div class="col-md-6">
                                    <label>E-mail <span class="red">*</span></label>
                                    <input type="text" id="txtEmail" name="txtEmail" placeholder="E-mail" class="input-validater">
                                    <span id="spanEmail"></span>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-6 input-margin">
                                    <label>Phone <span class="red">*</span></label>
                                    <input type="text" id="txtPhone" name="txtPhone" placeholder="Phone" class="input-validater">
                                    <span id="spanPhone"></span>
                                </div>
                                <div class="col-md-6 input-margin">
                                    <label>Subject <span class="red">*</span></label>
                                    <input type="text" id="txtSubject" name="txtSubject" placeholder="Subject" class="input-validater">
                                    <span id="spanSubject"></span>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-12 input-margin">
                                    <label>Message <span class="red"></span></label>
                                    <textarea id="txtMessage" name="txtMessage" placeholder="Enter Message" class="input-validater"></textarea>
                                    <span id="spanMessage"></span>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-4 input-margin">
                                    <label for="comment" id="form-label">Security Code:</label>
                                    <input type="text" name="captchacode" id="captchacode" class="input-validater" placeholder="Security code >> ">
                                    <span id="capspan" ></span>
                                </div>
                                <div class="col-md-4 cap-margin input-margin"> 
                                    <label></label>
                                    <span><?php include("./contact-us-form/captchacode-widget.php"); ?></span>
                                </div>
                                <div class="col-md-4 input-margin">
                                    <div class="div-check" >
                                        <img src="contact-us-form/img/checking.gif" id="checking"/>
                                    </div> 
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="submit" id="btnSubmit" name="send" value="Send" class="btn btn-yellow aligncenter btn-lg">
                                <input type="hidden" id="type" name="type" value="1" class="input-validater">
                            </div>
                            <div class="col-md-12">
                                <div id="dismessage" align="center" class="msg-success"></div>
                            </div>
                        </form>						
                    </div>
                </div>
            </div>
        </section>

        <!-- Set google map coords and API key to yours -->
        <div id="map" data-lat="40.7529789" data-lng="-74.0044417" data-zoom="11"></div>

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
        <script src="contact-us-form/scripts.js" type="text/javascript"></script>
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