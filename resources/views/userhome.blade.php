<!DOCTYPE html>
<html lang="en">
<head>

    <title>Green Garden</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="">
    <meta name="description" content="">

    <!-- stylesheets css -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/animate.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">

    <link rel="stylesheet" href="css/nivo-lightbox.css">
    <link rel="stylesheet" href="css/nivo_themes/default/default.css">

    <link rel="stylesheet" href="css/hover-min.css">
    <link rel="stylesheet" href="css/flexslider.css">

    <link rel="stylesheet" href="css/style.css">

    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,300,600' rel='stylesheet' type='text/css'>

</head>
<body id="top" data-spy="scroll" data-target=".navbar-collapse" data-offset="50">

<!-- Preloader section loading sign ekn e kaj korbe jokon scrool korbo-->
<div class="preloader">
    <div class="sk-spinner sk-spinner-pulse"></div>
</div>


<!-- Home section -->
<section id="home" class="parallax-section">
    <div class="gradient-overlay"></div>
    <div class="container">
        <div class="row">

            <div class="col-md-offset-2 col-md-8 col-sm-12" >
                <h1 class="wow fadeInDown" data-wow-delay="0.6s">Green Garden</h1>
                <h3 class="wow fadeInDown" data-wow-delay="1.0s" style="color:white">'Daffodil Green Garden' Restaurant @ DIU Permanent Campus</h3>
                <a href="#feature" class="wow fadeInDown btn btn-default hvr-bounce-to-top smoothScroll" data-wow-delay="1.3s">Discover Now</a><br>
            </div>

        </div>
    </div>
</section>


<!-- Navigation section -->
<div class="navbar navbar-default navbar-static-top" role="navigation">
    <div class="container">

        <div class="navbar-header">
            <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon icon-bar"></span>
                <span class="icon icon-bar"></span>
                <span class="icon icon-bar"></span>
            </button>
            <a href="#" class="navbar-brand">Daffodil Food House</a>
        </div>
        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#top" class="smoothScroll">Home</a></li>
                <li><a href="#feature" class="smoothScroll">Features</a></li>
                <li><a href="#about" class="smoothScroll">About</a></li>
                <li><a href="#menu" class="smoothScroll">Menu</a></li>
                <li><a href="#gallery" class="smoothScroll">Gallery</a></li>
                <li><a href="#contact" class="smoothScroll">Contact</a></li>
                <li><a href="#team" class="smoothScroll">Team</a></li>
            </ul>
        </div>

    </div>
</div>


<!-- Feature section -->
<section id="feature" class="parallax-section">
    <div class="container">
        <div class="row">

            <div class="col-md-offset-2 col-md-8 col-sm-offset-1 col-sm-10">
                <div class="wow fadeInUp section-title" data-wow-delay="0.6s">
                    <h2>Why Choose Us?</h2>
                    <h4>Daffodil Food House @ DIU Green Garden</h4>
                </div>
            </div>

            <div class="clearfix"></div>

            <div class="col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="feature-thumb">
                    <div class="feature-icon">
                        <span><i class="fa fa-cutlery"></i></span>
                    </div>
                    <h3>SPECIAL DISH</h3>
                    <p>Whole Wheat Pasta in Mushroom Sauce, Aloo Tamatar Jhol.</p>
                </div>
            </div>

            <div class="col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.6s">
                <div class="feature-thumb">
                    <div class="feature-icon">
                        <span><i class="fa fa-coffee"></i></span>
                    </div>
                    <h3>BLACK COFFEE</h3>
                    <p>Black Coffee, Milk + Black Coffee, Honey Coffee.</p>
                </div>
            </div>

            <div class="col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.9s">
                <div class="feature-thumb">
                    <div class="feature-icon">
                        <span><i class="fa fa-bell-o"></i></span>
                    </div>
                    <h3>DINNER</h3>
                    <p>Honey Baked Chicken, Burgers and homemade buns</p>
                </div>
            </div>

        </div>
    </div>
</section>


<!-- About section -->
<section id="about" class="parallax-section">
    <div class="container">
        <div class="row">

            <div class="col-md-offset-2 col-md-8 col-sm-offset-1 col-sm-10">
                <div class="wow fadeInUp section-title" data-wow-delay="0.3s">
                    <h2>Our Story</h2>
                    <h4>Your Dining Restaurant since 2018</h4>
                </div>
            </div>

            <div class="clearfix"></div>

            <div class="wow fadeInUp col-md-3 col-sm-5" data-wow-delay="0.3s">
                <img src="images/about-img.jpg" class="img-responsive" alt="About">
                <h3>We take food order</h3>
            </div>

            <div class="wow fadeInUp col-md-5 col-sm-7" data-wow-delay="0.5s">

                <!-- flexslider -->
                <div class="flexslider">
                    <ul class="slides">
                        @foreach($value1 as $item1)
                        <li>
                            <img src="{{'/storage/aboutsection/'.$item1->photo}}" class="img-responsive" alt="Flexslider" height="200" width="300">
                        </li>
                        @endforeach
                        {{--<li>--}}
                            {{--<img src="images/slide-img2.jpg" alt="Flexslider">--}}
                        {{--</li>--}}
                        {{--<li>--}}
                            {{--<img src="images/slide-img3.jpg" alt="Flexslider">--}}
                        {{--</li>--}}
                        {{--<li>--}}
                            {{--<img src="images/b5.jpeg" alt="Flexslider">--}}
                        {{--</li>--}}

                    </ul>
                </div>

                <p>Daffodil Green Garden Restaurent will serve all types of food which you want</p>
            </div>

            <div class="wow fadeInUp col-md-4 col-sm-12" data-wow-delay="0.9s">
                <h2>Fine Dining</h2>
                <p>Daffodil Green Garden Restaurent is one of the beautiful restaurent in Dhaka</p>
                <p>Our speical food is Beef Vindaloo. Butter Chicken. Carrot Halwa. Chaat Papri. Cham-Cham.</p>
            </div>

        </div>
    </div>
</section>


<!-- Video section -->
@foreach($value2 as $item2)
<section id="video" class="parallax-section" style="background: url('{{'../storage/videosection/'.$item2->photo}}') 20% 0 repeat-y fixed;">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
                <div class="col-md-offset-2 col-md-8 col-sm-12">
                    <a class="popup-youtube" href="{{$item2->videolink}}"><i class="fa fa-play"></i></a> <!-- eita video er logo fa fa-play-->
                    <h2 class="wow fadeInUp" data-wow-delay="0.5s">Watch the video</h2>
                </div>

        </div>
    </div>
</section>
@endforeach

<!-- Menu section -->
<section id="menu" class="parallax-section">
    <div class="container">
        {{--<div class="row">--}}

            <div class="col-md-offset-2 col-md-8 col-sm-offset-1 col-sm-10">
                <div class="wow fadeInUp section-title" data-wow-delay="0.3s">
                    <h2>Food Menu</h2>
                    <h4>we have special menus</h4>
                </div>
            </div>

            <div class="row">
                @foreach($value as $item)

                <div class="col-md-6 col-sm-6">
                    <div class="media wow fadeInUp" data-wow-delay="0.6s">
                        <div class="media-object pull-left">
                            <img src="{{'/storage/foodpic/'.$item->photo}}" class="img-responsive" alt="Food Menu">
                            <span class="menu-price">{{$item->price}} tk</span>
                        </div>
                        <div class="media-body">
                            <h3 class="media-heading">{{$item->name}}</h3>
                            <p>You Should to test it. It's So much testy</p>
                        </div>
                    </div>

                </div>
                @endforeach

            </div>


        </div>
    {{--</div>--}}
</section>

<!-- Gallery section -->
<section id="gallery" class="parallax-section">
    <div class="container">
        <div class="row">

            <div class="col-md-12">

                <div class="col-md-offset-2 col-md-8 col-sm-offset-1 col-sm-10">
                    <div class="wow fadeInUp section-title" data-wow-delay="0.3s">
                        <h2>Food Gallery</h2>
                        <h4>we have special foods</h4>
                    </div>
                </div>

                <!-- iso section -->
                <div class="iso-section wow fadeInUp" data-wow-delay="0.6s">

                    <ul class="filter-wrapper clearfix">
                        <li><a href="#" data-filter="*" class="selected opc-main-bg">All</a></li>
                        <li><a href="#" class="opc-main-bg" data-filter=".breakfast">Breakfast</a></li>
                        <li><a href="#" class="opc-main-bg" data-filter=".pizza">Snacks</a></li>
                        <li><a href="#" class="opc-main-bg" data-filter=".lunch">Lunch</a></li>
                        <li><a href="#" class="opc-main-bg" data-filter=".dinner">Dinner</a></li>
                    </ul>

                    <!-- iso box section -->
                    <div class="iso-box-section wow fadeInUp" data-wow-delay="0.9s">
                        <div class="iso-box-wrapper col4-iso-box">

                            <div class="iso-box breakfast pizza lunch col-md-4 col-sm-6">
                                <div class="gallery-thumb">
                                    <a href="images/gallery-img1.jpg" data-lightbox-gallery="food-gallery">
                                        <img src="images/gallery-img1.jpg" class="fluid-img" alt="Gallery">
                                        <div class="gallery-overlay">
                                            <div class="gallery-item">
                                                <i class="fa fa-search"></i>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <h3>Sankes</h3>
                            </div>

                            <div class="iso-box breakfast lunch dinner col-md-4 col-sm-6">
                                <div class="gallery-thumb">
                                    <a href="images/gallery-img2.jpg" data-lightbox-gallery="food-gallery">
                                        <img src="images/gallery-img2.jpg" class="fluid-img" alt="Gallery">
                                        <div class="gallery-overlay">
                                            <div class="gallery-item">
                                                <i class="fa fa-search"></i>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <h3>Chicken</h3>
                            </div>

                            <div class="iso-box dinner col-md-4 col-sm-6">
                                <div class="gallery-thumb">
                                    <a href="images/gallery-img3.jpg" data-lightbox-gallery="food-gallery">
                                        <img src="images/gallery-img3.jpg" class="fluid-img" alt="Gallery">
                                        <div class="gallery-overlay">
                                            <div class="gallery-item">
                                                <i class="fa fa-search"></i>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <h3>Nuduls</h3>
                            </div>

                            <div class="iso-box breakfast col-md-4 col-sm-6">
                                <div class="gallery-thumb">
                                    <a href="images/gallery-img4.jpg" data-lightbox-gallery="food-gallery">
                                        <img src="images/gallery-img4.jpg" class="fluid-img" alt="Gallery">
                                        <div class="gallery-overlay">
                                            <div class="gallery-item">
                                                <i class="fa fa-search"></i>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <h3>Chilly Beef Curry </h3>
                            </div>

                            <div class="iso-box lunch col-md-4 col-sm-6">
                                <div class="gallery-thumb">
                                    <a href="images/gallery-img5.jpg" data-lightbox-gallery="food-gallery">
                                        <img src="images/gallery-img5.jpg" class="fluid-img" alt="Gallery">
                                        <div class="gallery-overlay">
                                            <div class="gallery-item">
                                                <i class="fa fa-search"></i>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <h3>Beef Vegetable</h3>
                            </div>

                            <div class="iso-box pizza lunch col-md-4 col-sm-6">
                                <div class="gallery-thumb">
                                    <a href="images/gallery-img6.jpg" data-lightbox-gallery="food-gallery">
                                        <img src="images/gallery-img6.jpg" class="fluid-img" alt="Gallery">
                                        <div class="gallery-overlay">
                                            <div class="gallery-item">
                                                <i class="fa fa-search"></i>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <h3>Sea Fish</h3>
                            </div>

                        </div>
                    </div>

                </div>

            </div>

        </div>
    </div>
</section>

<!-- Contact section -->
<section id="contact" class="parallax-section">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">

            <div class="col-md-offset-2 col-md-8 col-sm-offset-1 col-sm-10">
                <div class="wow fadeInUp section-title" data-wow-delay="0.3s">
                    <h2>hello Food Lovers</h2>
                    <h4>we are always ready to serve you!</h4>
                </div>
                <div class="contact-form wow fadeInUp" data-wow-delay="0.7s">
                    <form id="contact-form" method="post" action="#">
                        <input name="name" type="text" class="form-control" placeholder="Your Name" required>
                        <input name="email" type="email" class="form-control" placeholder="Your Email" required>
                        <textarea name="message" class="form-control" placeholder="Message" rows="5" required></textarea>
                        <input type="submit" class="form-control submit" value="SEND MESSAGE">
                    </form>
                </div>
            </div>

        </div>
    </div>
</section>


<!-- Team section -->
<section id="team" class="parallax-section">
    <div class="container">
        <div class="row">

            <div class="col-md-offset-2 col-md-8 col-sm-offset-1 col-sm-10">
                <div class="wow fadeInUp section-title" data-wow-delay="0.3s">
                    <h2>Developers</h2>
                    <h4>we are from RightBrain Teach BD</h4>
                </div>
            </div>

            <div class="clearfix"></div>

            <div class="col-md-offset-1 col-md-3 col-sm-3 col-xs-4 wow fadeInUp" data-wow-delay="0.6s">

            </div>

            <div class="col-md-3 col-sm-3 col-xs-3 wow fadeInUp" data-wow-delay="0.6s">
                <div class="team-thumb">
                    <img src="images/chef3.jpg" class="img-responsive" alt="Team">
                    <div class="team-des">
                        <h3>Tamim</h3>
                        <ul class="social-icon">
                            <li><a href="https://www.facebook.com/" class="fa fa-facebook"></a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-sm-3 col-xs-3 wow fadeInUp" data-wow-delay="0.9s">

            </div>

            <div class="clearfix"></div>
        </div>
    </div>
</section>


<!-- Footer section -->
<footer>
    <div class="container">
        <div class="row">

            <div class="wow fadeInUp col-md-4 col-sm-4" data-wow-delay="1.3s">
                <h3>About the house</h3>
                <p>This Food House located in Daffodil International University's permanent campus. It is open from 8 am to 10 pm , 6 days in week.</p>
            </div>

            <div class="wow fadeInUp col-md-4 col-sm-4" data-wow-delay="1.6s">
                <h3>Contact Detail</h3>
                <p>Dattapara, Asulia, Savar</p>
                <p>01521432421</p>
                <p>sk.tamim56@gmail.com</p>
            </div>

            <div class="wow fadeInUp col-md-4 col-sm-4" data-wow-delay="1.9s">
                <h3>Opening Hours</h3>
                <strong>Saturday - Thursday</strong>
                <p>8:00 AM - 10:00 PM</p>
            </div>

        </div>
    </div>
</footer>

<!-- Copyright section -->
<section id="copyright">
    <div class="container">
        <div class="row">

            <div class="col-md-8 col-sm-8 col-xs-8">
                <p>Copyright © 2018, RightBrain Tech BD Company</p>
            </div>

            <div class="col-md-4 col-sm-4 text-right">
                <a href="#top"><img src="images/RightBrainTechBD.jpg" width="150" height="150"></a>
            </div>

        </div>
    </div>
</section>

<!-- javscript js -->
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>

<script src="js/jquery.magnific-popup.min.js"></script>

<script src="js/jquery.sticky.js"></script>
<script src="js/jquery.backstretch.min.js"></script>

<script src="js/isotope.js"></script>
<script src="js/imagesloaded.min.js"></script>
<script src="js/nivo-lightbox.min.js"></script>

<script src="js/jquery.flexslider-min.js"></script>

<script src="js/jquery.parallax.js"></script>
<script src="js/smoothscroll.js"></script>
<script src="js/wow.min.js"></script>

<script src="js/custom.js"></script>

</body>
</html>