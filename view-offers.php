
<?php
include_once(dirname(__FILE__) . '/class/include.php');

$id = '';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
}

$OFFER = new Offer($id);

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
                        <span>View Offers</span>
                    </li>		
                </ol>		
                <h1><?php echo $OFFER->title; ?></h1>
            </div>
        </header>

        <div class="container">
            <div class="inner inner-two-col row">
                <div class="col-lg-9">
                    <div class="blog-post text-page">

                        <div class="">
                            <div class="slider-inner swiper-container">
                                <div class="swiper-wrapper">

                                    <?php
                                    $photos = OfferPhoto::getOfferPhotosById($OFFER->id);
                                    foreach ($photos as $photo) {
                                        ?>
                                        <img src="upload/offer/gallery/<?php echo $photo['image_name']; ?>" class="full-width swiper-slide" alt="Slider">
                                        <?php
                                    }
                                    ?>
                                </div>
                                <div class="swiper-pagination"></div>
                            </div>
                        </div>

                        <div class="blog-info">
                            <div class="row">
                                <div class="col-lg-6 col-sm-12  col-xs-6">
                                    <h4><?php echo $OFFER->title; ?></h4>
                                </div>
                            </div>
                        </div>	

                        <p><?php echo $OFFER->description; ?></p>

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

                                <?php
                                foreach ($offers as $key => $offer) {
                                    if ($key < 3) {
                                        ?>

                                        <div class="item matchHeight offers">
                                            <div class="image">
                                                <img src="upload/offer/<?php echo $offer['image_name'] ?>" class="full-width rounded" alt="Blog">
                                            </div>
                                            <div class="description">
                                                <a href="#" class="header">
                                                    <h5 class="offers-h5"><?php echo $offer['title']; ?></h5>
                                                </a>
                                                <p class="text p-padding">
                                                    <?php echo $offer['short_description']; ?> 									</p>
                                                <a href="view-offers.php?id=<?php echo $offer["id"]; ?>" class="btn btn-yellow">read more</a>
                                            </div>
                                        </div>

                                        <?php
                                    }
                                }
                                ?>
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
