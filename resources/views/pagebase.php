<?php require "html-head.php"; ?>
<body ng-app="a91App" ng-controller="LandingCtrl as lp" ng-cloak>
<?php include('navbar.php'); ?>

<!-- Header Carousel -->
<header id="myCarousel" class="carousel slide" ng-if="lp.carouselVisible">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
        <div class="item active">
            <div class="fill" style="background-image:url('img/IMG_5370.JPG');"></div>
            <div class="carousel-caption">
                <h2>A91 Gym</h2>
            </div>
        </div>
        <div class="item">
            <div class="fill" style="background-image:url('img/IMG_5376.JPG');"></div>
            <div class="carousel-caption">
                <h2>A91 Gym</h2>
            </div>
        </div>
    </div>

    <!-- Controls -->
    <a class="left carousel-control cursor-pointer" data-target="#myCarousel" data-slide="prev">
        <span class="icon-prev"></span>
    </a>
    <a class="right carousel-control cursor-pointer" data-target="#myCarousel" data-slide="next">
        <span class="icon-next"></span>
    </a>
</header>

<div ng-view></div>

<!-- Page Content -->
<div class="container">

	<hr>
	<?php require "footer.php"; ?>

</div>
<!-- /.container -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha256-U5ZEeKfGNOja007MMD3YBI0A3OSZOQbeG6z2f2Y0hu8=" crossorigin="anonymous"></script>

    <!-- Script to Activate the Carousel -->
    <script>
    $('.carousel').carousel({
        interval: 10000 //changes the speed
    });
    </script>

    <!-- Scripts to load -->
    <?php if (preg_match("/localhost/", $_SERVER["HTTP_HOST"]) == 1) : ?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.5.5/angular.js" integrity="sha256-R7BLQ3qJtH4loVlfCljvFVWk7z/llcALpaFFH61iX6E=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.5.5/angular-route.js" integrity="sha256-abzDH62eUIiLJAOiiWLn/KEJuH+e30wSvbsPMQ1VaKk=" crossorigin="anonymous"></script>
    <?php else: ?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.5.5/angular.min.js" integrity="sha256-FETnXgTya5za/5+eslN5uUeiVGnSg8RYtYO9pOnkDoc=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.5.5/angular-route.min.js" integrity="sha256-qSUwjVeOdjTN50lk22ad8fDCCqlBbwc3w3YoOo2tm+M=" crossorigin="anonymous"></script>
    <?php endif; ?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.5.5/angular-animate.min.js" integrity="sha256-STjnH37x/nKo8BrKPy1qoJ+1XS80+7L9cy7J+mHu3Mw=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/angular-ui-bootstrap/2.5.0/ui-bootstrap-tpls.min.js" integrity="sha256-tyfWW2LtJQNI+l3F0h6xDV/ij6Mfn8lwSKHWOsmEgXM=" crossorigin="anonymous"></script>
    <script type="text/javascript">
        // angular.element(document.getElementsByTagName('head')).append(angular.element('<base href="' + window.location.pathname + '" />'));
        (function(){
            'use strict';
            angular.module('a91App', ['ngRoute', 'ngAnimate', 'ui.bootstrap']);            
        })();
    </script>
    <script src="js/landing.js"></script>
</body>
</html>
