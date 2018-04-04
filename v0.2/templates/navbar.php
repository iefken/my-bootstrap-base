<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 19.03.18
 * Time: 01:16
 */

include_once "../templates/my.php";

$currentTab = $_SERVER['REQUEST_URI'];

$myarray = explode('/',"ignore".$currentTab);
$currentTab = $myarray[3];

?>

<!-- open element(s): "<html>" -->

<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">

    <div class="container">
        <a class="navbar-brand" href="#">My Awesome Website</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item <?php echo activeTab($currentTab,"home"); ?>">
                    <a class="nav-link" href="../home/">
                        <i class="fa fa-home"></i>
                        Home</a>
                </li>

                <li class="nav-item <?php echo activeTab($currentTab,"services"); ?>">
                    <a class="nav-link" href="../services/">
                        <i class="fa fa-bolt"></i>
                        Services</a>
                </li>
                <li class="nav-item <?php echo activeTab($currentTab,"about"); ?>">
                    <a class="nav-link" href="../about/">
                        <i class="fa fa-info-circle"></i>
                        About</a>
                </li>
                <li class="nav-item <?php echo activeTab($currentTab,"contact"); ?>">
                    <a class="nav-link" href="../contact/">
                        <i class="fa fa-envelope"></i>
                        Contact</a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown"
                       aria-haspopup="true" aria-expanded="false"><i class="fa fa-user"></i> Account</a>
                    <div class="dropdown-menu" aria-labelledby="dropdown01">
                        <a class="dropdown-item" href="#">Sign in</a>
                        <a class="dropdown-item" href="#">Register</a>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- unclosed elements: "<html>" -->