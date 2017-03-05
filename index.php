<?php defined( '_JEXEC' ) or die; 

include_once JPATH_THEMES.'/'.$this->template.'/logic.php';

?><!doctype html>

<html lang="<?php echo $this->language; ?>">

<head>

  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
  <link rel="apple-touch-icon-precomposed" href="<?php echo $tpath; ?>/images/apple-touch-icon-57x57-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo $tpath; ?>/images/apple-touch-icon-72x72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo $tpath; ?>/images/apple-touch-icon-114x114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo $tpath; ?>/images/apple-touch-icon-144x144-precomposed.png">

    <link rel="stylesheet" href="<?php echo $tpath; ?>/css/front/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo $tpath; ?>/css/front/ionicons.min.css">
    <link rel="stylesheet" href="<?php echo $tpath; ?>/css/front/owl.carousel.css">
    <link rel="stylesheet" href="<?php echo $tpath; ?>/css/front/owl.theme.css">
    <link rel="stylesheet" href="<?php echo $tpath; ?>/css/front/flexslider.css" type="text/css">
    <link rel="stylesheet" href="<?php echo $tpath; ?>/css/front/main.css">

</head>
  
<body class="<?php echo (($menu->getActive() == $menu->getDefault()) ? ('front') : ('site')).' '.$active->alias.' '.$pageclass; ?>">

<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.html" title="HOME">Georgia<span>Travel</span></a>
             
        </div> <!-- /.navbar-header -->

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li class="active"><a href="index.html">Home</a></li>
                <li><a href="about.html">about</a></li>
                <li><a href="services.html">services</a></li>
                <li><a href="contact.html">contact</a></li>
            </ul> <!-- /.nav -->

        </div><!-- /.navbar-collapse -->
    </div><!-- /.container -->
</nav>

<!-- Home -->
<div id="header">
    <div class="flexslider">
        <ul class="slides">
            <li class="slider-item" style="

                    background-image: url('<?php echo $tpath; ?>/images/item-1.png');
                    background-position: 50% 20%;
                    ">
                <div class="intro container">
                    <div class="inner-intro">
                        <h1 class="header-title">
                            <span>TRAVEL</span> TO GEORGIA
                        </h1>
                        <p class="header-sub-title">
                            it leaves you speecless, then turns your into a storyteller.
                        </p>
                        <button class="btn custom-btn">
                            EXPLORE
                        </button>
                    </div>
                </div>
            </li> <!-- /.slider-item -->
            <li class="slider-item" style="
                    background-image: url('<?php echo $tpath; ?>/images/item-2.png');
                    background-position: 50% 20%;
                    ">
                <div class="intro">
                    <div class="inner-intro">
                        <h1 class="header-title">
                            to <span>travel</span> is to <span>live</span>
                        </h1>
                        <p class="header-sub-title">
                            it leaves you speecless, then turns your into a storyteller.
                        </p>
                        <button class="btn custom-btn">
                            EXPLORE
                        </button>
                    </div>
                </div>
            </li> <!-- /.slider-item -->
        </ul> <!-- /.slides -->
    </div> <!-- /.flexslider -->
</div> <!-- /#header -->

<!-- Our Blazzing offers -->
<section class="offer section-wrapper">
    <div class="container">
        <h2 class="section-title">
            Our Blazzing offers
        </h2>
        <p class="section-subtitle">
            Lorem Ipsum is simply dummy text of the industry.
        </p>
        <div class="row">
            <div class="col-sm-3 col-xs-6">
                <div class="offer-item">
                    <div class="icon">
                        <i class="ion-social-euro"></i>
                    </div>
                    <h3>
                        Affordable Pricing
                    </h3>
                    <p>
                        Class aptent taciti sociosutn tora torquent conub nost reptos himenaeos.
                    </p>
                </div>
            </div> <!-- /.col-md-3 -->

            <div class="col-sm-3 col-xs-6">
                <div class="offer-item">
                    <div class="icon">
                        <i class="ion-ios-home"></i>
                    </div>
                    <h3>
                        High class Hotels
                    </h3>
                    <p>
                        Class aptent taciti sociosutn tora torquent conub nost reptos himenaeos.
                    </p>
                </div>
            </div> <!-- /.col-md-3 -->

            <div class="col-sm-3 col-xs-6">
                <div class="offer-item">
                    <div class="icon">
                        <i class="ion-android-bus"></i>
                    </div>
                    <h3>
                        Luxury Transport
                    </h3>
                    <p>
                        Class aptent taciti sociosutn tora torquent conub nost reptos himenaeos.
                    </p>
                </div>
            </div> <!-- /.col-md-3 -->

            <div class="col-sm-3 col-xs-6">
                <div class="offer-item">
                    <div class="icon">
                        <i class="ion-ios-locked"></i>
                    </div>
                    <h3>
                        Highest Security
                    </h3>
                    <p>
                        Class aptent taciti sociosutn tora torquent conub nost reptos himenaeos.
                    </p>
                </div>
            </div> <!-- /.col-md-3 -->
        </div> <!-- /.row -->
    </div> <!-- /.container -->
</section> <!-- /.offer -->


<!-- Top place to visit -->
<section class="visit section-wrapper">
    <div class="container">
        <h2 class="section-title">
            Top place to visit
        </h2>
        <p class="section-subtitle">
            Lorem Ipsum is simply dummy text of the industry.
        </p>

        <div class="owl-carousel visit-carousel" id="">
            <div class="item">
                <img src="templates/frontend/images/visit-1.png" alt="visit-image" class="img-responsive visit-item">
            </div>
            <div class="item">
                <img src="templates/frontend/images/visit-2.png" alt="visit-image" class="img-responsive visit-item">
            </div>
            <div class="item">
                <img src="templates/frontend/images/visit-3.png" alt="visit-image" class="img-responsive visit-item">
            </div>
            <div class="item">
                <img src="templates/frontend/images/visit-1.png" alt="visit-image" class="img-responsive visit-item">
            </div>
            <div class="item">
                <img src="templates/frontend/images/visit-2.png" alt="visit-image" class="img-responsive visit-item">
            </div>
            <div class="item">
                <img src="templates/frontend/images/visit-3.png" alt="visit-image" class="img-responsive visit-item">
            </div>
        </div>
    </div> <!-- /.container -->
</section> <!-- /.visit -->

<div class="offer-cta">
    <div class="container">
        <div class="offering">
            <div class="percent">
                <span>15%</span> off
            </div>
            <div class="FTour">
                for <strong>Family Tour</strong>
            </div>
            <a class="btn btn-default price-btn" href="#">
                see our price
            </a>
        </div> <!-- /.offering -->
    </div> <!-- /.container -->
</div> <!-- /.offer-cta -->

<section class="additional-services section-wrapper">
    <div class="container">
        <h2 class="section-title">
            Additional services
        </h2>
        <p class="section-subtitle">
            Lorem Ipsum is simply dummy text of the industry.
        </p>
        <div class="row">
            <div class="col-md-4 col-sm-6">
                <div class="custom-table">
                    <img src="templates/frontend/images/add-srvc-1.png" alt="" class="add-srvc-img">
                    <div class="add-srvc-detail">
                        <h4 class="add-srvc-heading">
                            Photography
                        </h4>
                        <p class="add-srvc">
                            Etiam pharetra ut ante eget ehy efficitur. Nullam quis felis at nunc vehicula sollicitudin euliquam quis felis atblan dit.
                        </p>
                    </div> <!-- /.add-srvc-detail -->
                </div> <!-- /.custom-table -->
            </div> <!-- /.col-md-4 col-sm-6 -->

            <div class="col-md-4 col-sm-6">
                <div class="custom-table">
                    <img src="templates/frontend/images/add-srvc-2.png" alt="" class="add-srvc-img">
                    <div class="add-srvc-detail">
                        <h4 class="add-srvc-heading">
                            Cycling
                        </h4>
                        <p class="add-srvc">
                            Etiam pharetra ut ante eget ehy efficitur. Nullam quis felis at nunc vehicula sollicitudin euliquam quis felis atblan dit.
                        </p>
                    </div> <!-- /.add-srvc-detail -->
                </div> <!-- /.custom-table -->
            </div> <!-- /.col-md-4 col-sm-6 -->

            <div class="col-md-4 col-sm-6">
                <div class="custom-table">
                    <img src="templates/frontend/images/add-srvc-3.png" alt="" class="add-srvc-img">
                    <div class="add-srvc-detail">
                        <h4 class="add-srvc-heading">
                            Waking
                        </h4>
                        <p class="add-srvc">
                            Etiam pharetra ut ante eget ehy efficitur. Nullam quis felis at nunc vehicula sollicitudin euliquam quis felis atblan dit.
                        </p>
                    </div> <!-- /.add-srvc-detail -->
                </div> <!-- /.custom-table -->
            </div> <!-- /.col-md-4 col-sm-6 -->

            <div class="col-md-4 col-sm-6">
                <div class="custom-table">
                    <img src="templates/frontend/images/add-srvc-4.png" alt="" class="add-srvc-img">
                    <div class="add-srvc-detail">
                        <h4 class="add-srvc-heading">
                            Skiing
                        </h4>
                        <p class="add-srvc">
                            Etiam pharetra ut ante eget ehy efficitur. Nullam quis felis at nunc vehicula sollicitudin euliquam quis felis atblan dit.
                        </p>
                    </div> <!-- /.add-srvc-detail -->
                </div> <!-- /.custom-table -->
            </div> <!-- /.col-md-4 col-sm-6 -->

            <div class="col-md-4 col-sm-6">
                <div class="custom-table">
                    <img src="templates/frontend/images/add-srvc-5.png" alt="" class="add-srvc-img">
                    <div class="add-srvc-detail">
                        <h4 class="add-srvc-heading">
                            Sea beach
                        </h4>
                        <p class="add-srvc">
                            Etiam pharetra ut ante eget ehy efficitur. Nullam quis felis at nunc vehicula sollicitudin euliquam quis felis atblan dit.
                        </p>
                    </div> <!-- /.add-srvc-detail -->
                </div> <!-- /.custom-table -->
            </div> <!-- /.col-md-4 col-sm-6 -->

            <div class="col-md-4 col-sm-6">
                <div class="custom-table">
                    <img src="templates/frontend/images/add-srvc-6.png" alt="" class="add-srvc-img">
                    <div class="add-srvc-detail">
                        <h4 class="add-srvc-heading">
                            Hill tracking
                        </h4>
                        <p class="add-srvc">
                            Etiam pharetra ut ante eget ehy efficitur. Nullam quis felis at nunc vehicula sollicitudin euliquam quis felis atblan dit.
                        </p>
                    </div> <!-- /.add-srvc-detail -->
                </div> <!-- /.custom-table -->
            </div> <!-- /.col-md-4 col-sm-6 -->
        </div> <!-- /.row -->
    </div> <!-- /.container -->
</section> <!-- /.Additional-services -->


<div class="section-wrapper sponsor">
    <div class="container">
        <div class="owl-carousel sponsor-carousel">
            <div class="item">
                <a href="#">
                    <img src="templates/frontend/images/sp-1.png" alt="sponsor-brand" class="img-responsive sponsor-item">
                </a>
            </div>
            <div class="item">
                <a href="#">
                    <img src="templates/frontend/images/sp-2.png" alt="sponsor-brand" class="img-responsive sponsor-item">
                </a>
            </div>
            <div class="item">
                <a href="#">
                    <img src="templates/frontend/images/sp-3.png" alt="sponsor-brand" class="img-responsive sponsor-item">
                </a>
            </div>
            <div class="item">
                <a href="#">
                    <img src="templates/frontend/images/sp-4.png" alt="sponsor-brand" class="img-responsive sponsor-item">
                </a>
            </div>
            <div class="item">
                <a href="#">
                    <img src="templates/frontend/images/sp-5.png" alt="sponsor-brand" class="img-responsive sponsor-item">
                </a>
            </div>
            <div class="item">
                <a href="#">
                    <img src="templates/frontend/images/sp-6.png" alt="sponsor-brand" class="img-responsive sponsor-item">
                </a>
            </div>
            <div class="item">
                <a href="#">
                    <img src="templates/frontend/images/sp-1.png" alt="sponsor-brand" class="img-responsive sponsor-item">
                </a>
            </div>
            <div class="item">
                <a href="#">
                    <img src="templates/frontend/images/sp-2.png" alt="sponsor-brand" class="img-responsive sponsor-item">
                </a>
            </div>
            <div class="item">
                <a href="#">
                    <img src="templates/frontend/images/sp-3.png" alt="sponsor-brand" class="img-responsive sponsor-item">
                </a>
            </div>
            <div class="item">
                <a href="#">
                    <img src="templates/frontend/images/sp-4.png" alt="sponsor-brand" class="img-responsive sponsor-item">
                </a>
            </div>
            <div class="item">
                <a href="#">
                    <img src="templates/frontend/images/sp-5.png" alt="sponsor-brand" class="img-responsive sponsor-item">
                </a>
            </div>
            <div class="item">
                <a href="#">
                    <img src="templates/frontend/images/sp-6.png" alt="sponsor-brand" class="img-responsive sponsor-item">
                </a>
            </div>
            <div class="item">
                <a href="#">
                    <img src="templates/frontend/images/sp-1.png" alt="sponsor-brand" class="img-responsive sponsor-item">
                </a>
            </div>
            <div class="item">
                <a href="#">
                    <img src="templates/frontend/images/sp-2.png" alt="sponsor-brand" class="img-responsive sponsor-item">
                </a>
            </div>
            <div class="item">
                <a href="#">
                    <img src="templates/frontend/images/sp-3.png" alt="sponsor-brand" class="img-responsive sponsor-item">
                </a>
            </div>
            <div class="item">
                <a href="#">
                    <img src="templates/frontend/images/sp-4.png" alt="sponsor-brand" class="img-responsive sponsor-item">
                </a>
            </div>
            <div class="item">
                <a href="#">
                    <img src="templates/frontend/images/sp-5.png" alt="sponsor-brand" class="img-responsive sponsor-item">
                </a>
            </div>
            <div class="item">
                <a href="#">
                    <img src="templates/frontend/images/sp-6.png" alt="sponsor-brand" class="img-responsive sponsor-item">
                </a>
            </div>
        </div> <!-- /.owl-carousel -->
    </div> <!-- /.container -->
</div> <!-- /.sponsor -->

<footer>
    <div class="container">
        <div class="row">
            <div class="col-xs-4">
                <div class="text-left">
                    &copy; Copyright Euro Travels
                </div>
            </div>
            <div class="col-xs-4">
                Theme by <a href="http://www.themewagon.com">THEMEWAGON</a>
            </div>
            <div class="col-xs-4">
                <div class="top">
                    <a href="#header">
                        <i class="ion-arrow-up-b"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</footer>

<script src="<?php echo $tpath ?>/js/front/jquery-1.11.2.min.js"></script>
<script src="<?php echo $tpath ?>/js/front/bootstrap.min.js"></script>
<script src="<?php echo $tpath ?>/js/front/owl.carousel.min.js"></script>
<script src="<?php echo $tpath ?>/js/front/contact.js"></script>
<script src="<?php echo $tpath ?>/js/front/jquery.flexslider.js"></script>
<script src="<?php echo $tpath ?>/js/front/script.js"></script>

<jdoc:include type="modules" name="debug" />
</body>


</html>
