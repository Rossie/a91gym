<!-- Navigation -->
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <!-- <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> -->
            <button type="button" class="navbar-toggle" ng-click="lp.navbarOpened = !lp.navbarOpened">
                <span class="sr-only">Toggle navigation</span>
                <i class="fa fa-bars fa-lg"></i>
                <!-- <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span> -->
            </button>
            <a class="navbar-brand" href="/">A91 Gym</a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" uib-collapse="!lp.navbarOpened">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="bemutatkozas"><i class="fa fa-fw fa-users fa-lg"></i>Bemutatkozás</a></li>
                <li><a href="orarend"><i class="fa fa-fw fa-clock-o fa-lg"></i>Órarend</a></li>
                <li><a href="arak"><i class="fa fa-fw fa-euro fa-lg"></i>Árak</a></li>
                <li><a href="kapcsolat"><i class="fa fa-fw fa-map-marker fa-lg"></i>Kapcsolat</a></li>
                <!-- <li><a href="#galeria"><i class="fa fa-fw fa-camera fa-lg"></i>Galéria</a></li> -->
                <li><a href="belepes"><i class="fa fa-fw fa-key fa-lg"></i>Belépés</a></li>
                <!-- <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Portfolio <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="portfolio-1-col.html">1 Column Portfolio</a></li>
                        <li><a href="portfolio-2-col.html">2 Column Portfolio</a></li>
                        <li><a href="portfolio-3-col.html">3 Column Portfolio</a></li>
                        <li><a href="portfolio-4-col.html">4 Column Portfolio</a></li>
                        <li><a href="portfolio-item.html">Single Portfolio Item</a></li>
                    </ul>
                </li> -->
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>
<?php /*var_export($_SERVER);*/ ?>