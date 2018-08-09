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
                        <span>View Vehicles</span>
                    </li>		
                </ol>		
                <h1>View Vehicles</h1>
            </div>
        </header>

        <div class="container">
            <div class="inner inner-two-col row">
                <div class="col-lg-8">
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

                        <blockquote>Nam eu mi eget velit vulputate tempor gravida quis massa. In malesuada condimentum ultrices. Sed et mauris a purus fermentum elementum. Sed tristique semper enim, et gravida orci iaculis et. Nulla facilisi. Nullam bibendum rutrum est sit amet dignissim. In sit amet condimentum leo, vel congue dolor.</blockquote>

                        <p>Suspendisse consectetur libero eu sapien elementum sodales. Fusce eu justo a sapien tincidunt aliquet. Suspendisse imperdiet tristique orci, a dictum nulla commodo eget. Sed pellentesque pellentesque quam, ac iaculis dui rutrum in. Duis et justo at velit efficitur tristique nec at eros.</p>

                        <hr>

                        <div class="tags-short">
                            <strong>Tags:</strong> <a href="#">#gym</a>, <a href="#">#fitness</a>, <a href="#">#nutrition</a>, <a href="#">#protein</a>
                        </div>
                        <div class="social-small">
                            <strong>Share:</strong>
                            <a href="#" class="fa fa-twitter"></a>
                            <a href="#" class="fa fa-facebook"></a>
                            <a href="#" class="fa fa-instagram"></a>
                            <a href="#" class="fa fa-google-plus"></a>
                            <a href="#" class="fa fa-pinterest"></a>
                        </div>
                    </div>

                    <div id="comments" class="comments-area">


                        <h3 class="comments-title">
                            4 Comments	</h3>


                        <div class="comments-ol">
                            <ol class="comment-list">
                                <li id="comment-2" class="fw-feedback byuser comment-author-admin bypostauthor even thread-even depth-1 comment_item">
                                    <div class="comment-single">
                                        <div class="comment-author-avatar"><img alt="" src="assets/images/_client-4.jpg" class="avatar avatar-45 photo" width="45" height="45"></div>
                                        <div class="comment-content">
                                            <div class="comment-info">
                                                by <span class="comment-author">Paul Hudson<a href=""></a></span> | 				
                                                <span class="comment-date"><span class="comment_date_label">Posted</span> <span class="comment_date_value">19th March 2017</span></span> |
                                                <span class="comment-time">3:53 am</span>
                                            </div>
                                            <div class="comment_text_wrap">
                                                <div class="comment-text"><p>Cras tincidunt lectus at mi consectetur, venenatis vehicula erat tempus. Pellentesque ultricies varius posuere. Nullam laoreet auctor tellus.</p>
                                                </div>
                                            </div>
                                            <div class="comment-reply"><a rel="nofollow" class="comment-reply-link" href="http://stargymwp.dev/the-best-choice-for-your-muscles-2/?replytocom=2#respond" onclick="return addComment.moveForm( & quot; comment - 2 & quot; , & quot; 2 & quot; , & quot; respond & quot; , & quot; 280 & quot; )" aria-label="Reply to admin">Reply</a></div>
                                        </div>
                                    </div>
                                    <ul class="children">
                                        <li id="comment-3" class="comment byuser comment-author-admin bypostauthor odd alt depth-2 comment_item">
                                            <div class="comment-single">
                                                <div class="comment-author-avatar"><img alt="" src="assets/images/_client-1.jpg" class="avatar avatar-45 photo" width="45" height="45"></div>
                                                <div class="comment-content">
                                                    <div class="comment-info">
                                                        by <span class="comment-author">Julia Maran<a href=""></a></span> | 				
                                                        <span class="comment-date"><span class="comment_date_label">Posted</span> <span class="comment_date_value">19th March 2017</span></span> |
                                                        <span class="comment-time">4:37 am</span>
                                                    </div>
                                                    <div class="comment_text_wrap">
                                                        <div class="comment-text"><p>Suspendisse consectetur libero eu sapien elementum sodales. Fusce eu justo a sapien tincidunt aliquet. Suspendisse imperdiet tristique orci, a dictum nulla commodo eget. Sed pellentesque pellentesque quam, ac iaculis dui rutrum in. Duis et justo at velit efficitur tristique nec at eros.</p>
                                                        </div>
                                                    </div>
                                                    <div class="comment-reply"><a rel="nofollow" class="comment-reply-link" href="http://stargymwp.dev/the-best-choice-for-your-muscles-2/?replytocom=3#respond" onclick="return addComment.moveForm( & quot; comment - 3 & quot; , & quot; 3 & quot; , & quot; respond & quot; , & quot; 280 & quot; )" aria-label="Reply to admin">Reply</a></div>
                                                </div>
                                            </div>
                                            <ul class="children">
                                                <li id="comment-5" class="comment byuser comment-author-admin bypostauthor even depth-3 comment_item">
                                                    <div class="comment-single">
                                                        <div class="comment-author-avatar"><img alt="" src="assets/images/_client-4.jpg" class="avatar avatar-45 photo" width="45" height="45"></div>
                                                        <div class="comment-content">
                                                            <div class="comment-info">
                                                                by <span class="comment-author">Paul Hudson<a href=""></a></span> | 				
                                                                <span class="comment-date"><span class="comment_date_label">Posted</span> <span class="comment_date_value">19th March 2017</span></span> |
                                                                <span class="comment-time">4:41 am</span>
                                                            </div>
                                                            <div class="comment_text_wrap">
                                                                <div class="comment-text"><p>Nullam dapibus magna eget neque tristique, in bibendum ipsum aliquet. Aliquam libero mi, placerat eu tempus vel, scelerisque in ante. In scelerisque, ante in posuere pharetra, purus felis auctor odio, eu rhoncus massa nibh eu ipsum. Aenean at massa neque. Cras tincidunt lectus at mi consectetur, venenatis vehicula erat tempus. Pellentesque ultricies varius posuere. Nullam laoreet auctor tellus.</p>
                                                                </div>
                                                            </div>
                                                            <div class="comment-reply"><a rel="nofollow" class="comment-reply-link" href="http://stargymwp.dev/the-best-choice-for-your-muscles-2/?replytocom=5#respond" onclick="return addComment.moveForm( & quot; comment - 5 & quot; , & quot; 5 & quot; , & quot; respond & quot; , & quot; 280 & quot; )" aria-label="Reply to admin">Reply</a></div>
                                                        </div>
                                                    </div>
                                                </li><!-- #comment-## -->
                                            </ul><!-- .children -->
                                        </li><!-- #comment-## -->
                                        <li id="comment-4" class="comment byuser comment-author-admin bypostauthor odd alt depth-2 comment_item">
                                            <div class="comment-single">
                                                <div class="comment-author-avatar"><img alt="" src="assets/images/_client-2.jpg" class="avatar avatar-45 photo" width="45" height="45"></div>
                                                <div class="comment-content">
                                                    <div class="comment-info">
                                                        by <span class="comment-author">Jula Maran<a href=""></a></span> | 				
                                                        <span class="comment-date"><span class="comment_date_label">Posted</span> <span class="comment_date_value">19th March 2017</span></span> |
                                                        <span class="comment-time">4:40 am</span>
                                                    </div>
                                                    <div class="comment_text_wrap">
                                                        <div class="comment-text"><p>Nullam dapibus magna eget neque tristique, in bibendum ipsum aliquet. Aliquam libero mi, placerat eu tempus vel, scelerisque in ante. In scelerisque, ante in posuere pharetra, purus felis auctor odio, eu rhoncus massa nibh eu ipsum. Aenean at massa neque. Cras tincidunt lectus at mi consectetur, venenatis vehicula erat tempus. Pellentesque ultricies varius posuere. Nullam laoreet auctor tellus.</p>
                                                        </div>
                                                    </div>
                                                    <div class="comment-reply"><a rel="nofollow" class="comment-reply-link" href="http://stargymwp.dev/the-best-choice-for-your-muscles-2/?replytocom=4#respond" onclick="return addComment.moveForm( & quot; comment - 4 & quot; , & quot; 4 & quot; , & quot; respond & quot; , & quot; 280 & quot; )" aria-label="Reply to admin">Reply</a></div>
                                                </div>
                                            </div>
                                        </li><!-- #comment-## -->
                                    </ul><!-- .children -->
                                </li><!-- #comment-## -->
                            </ol>
                        </div>

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

                <div class="col-lg-4">
                    <div class="widget-area" role="complementary">

                        <aside class="widget">
                            <h4>Categories</h4>
                            <ul>					
                                <li class="current-cat"><a href="#"><strong>Taxi Drivers</strong></a>
                                <li><a href="#">Our Cars</a></li>
                                <li><a href="#">Business Services</a></li>
                                <li><a href="#">Popular Routes</a></li>
                                <li><a href="#">City Traffic</a></li>
                                <li><a href="#">Terms and Conditions</a></li>
                            </ul>
                        </aside>

                        <aside class="widget widget_calendar">
                            <h4>Calendar</h4>
                            <div id="calendar_wrap" class="calendar_wrap">
                                <table id="wp-calendar">
                                    <caption>April 2017</caption>
                                    <thead>
                                        <tr>
                                            <th scope="col" title="Monday">M</th>
                                            <th scope="col" title="Tuesday">T</th>
                                            <th scope="col" title="Wednesday">W</th>
                                            <th scope="col" title="Thursday">T</th>
                                            <th scope="col" title="Friday">F</th>
                                            <th scope="col" title="Saturday">S</th>
                                            <th scope="col" title="Sunday">S</th>
                                        </tr>
                                    </thead>

                                    <tfoot>
                                        <tr>
                                            <td colspan="3" id="prev"><a href="http://stargym.like-themes.com/2017/03/">« Mar</a></td>
                                            <td class="pad">&nbsp;</td>
                                            <td colspan="3" id="next" class="pad">&nbsp;</td>
                                        </tr>
                                    </tfoot>

                                    <tbody>
                                        <tr>
                                            <td colspan="5" class="pad">&nbsp;</td><td>1</td><td>2</td>
                                        </tr>
                                        <tr>
                                            <td>3</td><td id="today">4</td><td>5</td><td>6</td><td>7</td><td>8</td><td>9</td>
                                        </tr>
                                        <tr>
                                            <td>10</td><td>11</td><td>12</td><td>13</td><td>14</td><td>15</td><td>16</td>
                                        </tr>
                                        <tr>
                                            <td>17</td><td>18</td><td>19</td><td>20</td><td>21</td><td>22</td><td>23</td>
                                        </tr>
                                        <tr>
                                            <td>24</td><td>25</td><td>26</td><td>27</td><td>28</td><td>29</td><td>30</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </aside>

                        <aside class="widget">
                            <h4>Search</h4>
                            <div class="content">
                                <form class="form wp-searchform" method="get">
                                    <input type="text" name="search" value="" placeholder="Search for...">
                                    <button type="submit" class="fa fa-search"></button>
                                </form>
                            </div>
                        </aside>

                        <aside class="widget">
                            <h4>Instagram</h4>
                            <div class="content">
                                <div class="gallery-small row">
                                    <a href="#" class="swipebox col-lg-4 col-md-4 col-sm-6 col-xs-6"><img src="assets/images/_insta-1.jpg" class="full-width" alt="Gallery"></a>
                                    <a href="#" class="swipebox col-lg-4 col-md-4 col-sm-6 col-xs-6"><img src="assets/images/_insta-2.jpg" class="full-width" alt="Gallery"></a>
                                    <a href="#" class="swipebox col-lg-4 col-md-4 col-sm-6 col-xs-6"><img src="assets/images/_insta-3.jpg" class="full-width" alt="Gallery"></a>
                                    <a href="#" class="swipebox col-lg-4 col-md-4 col-sm-6 col-xs-6"><img src="assets/images/_insta-4.jpg" class="full-width" alt="Gallery"></a>
                                    <a href="#" class="swipebox col-lg-4 col-md-4 col-sm-6 col-xs-6"><img src="assets/images/_insta-5.jpg" class="full-width" alt="Gallery"></a>
                                    <a href="#" class="swipebox col-lg-4 col-md-4 col-sm-6 col-xs-6"><img src="assets/images/_insta-6.jpg" class="full-width" alt="Gallery"></a>
                                </div>
                            </div>
                        </aside>

                        <aside class="widget">
                            <h4>Archives</h4>
                            <ul>					
                                <li><a href="#">March 2017</a></li>
                                <li><a href="#">February 2017</a></li>
                                <li><a href="#">January 2017</a></li>
                            </ul>
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
            (function(i, s, o, g, r, a, m){i['GoogleAnalyticsObject'] = r; i[r] = i[r] || function(){
            (i[r].q = i[r].q || []).push(arguments)}, i[r].l = 1 * new Date(); a = s.createElement(o),
                    m = s.getElementsByTagName(o)[0]; a.async = 1; a.src = g; m.parentNode.insertBefore(a, m)
            })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');
            ga('create', 'UA-91006724-1', 'auto');
            ga('send', 'pageview');
        </script>

    </body>
</html>	
