<?php require "html-head.php"; ?>
<body ng-app="a91App" ng-controller="LandingCtrl as lp" ng-cloak>
<?php include('navbar.php'); ?>
<!-- Page Content -->
<div class="container">

	<div class="embed-responsive embed-responsive-4by3">
		<iframe class="embed-responsive-item" src="http://a91.hu/belepes/php_calendar/calendar.php" allowfullscreen></iframe>
	</div>


<?php require "footer.php"; ?>

</div>
<!-- /.container -->

    <script src="jquery/jquery.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <!-- Script to Activate the Carousel -->
    <script>
    $('.carousel').carousel({
        interval: 10000 //changes the speed
    });
    </script>

    <!-- Scripts to load -->
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.5/angular.js"></script>
    <script type="text/javascript">
        (function(){
            'use strict';
            angular.module('a91App', []);            
        })();
    </script>
    <script src="js/landing.js"></script>
</body>
</html>
