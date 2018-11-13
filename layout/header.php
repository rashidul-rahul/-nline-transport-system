<?php
include_once ('path.php');
?>
<header>
    <!-- Top Navbar -->
    <!-- Top Navbar end -->

    <!-- Navbar -->
    <nav class="navbar bootsnav">
        <!-- Top Search -->
        <div class="top-search">
            <div class="container">
                <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-search"></i></span>
                    <input type="text" class="form-control" placeholder="Search">
                    <span class="input-group-addon close-search"><i class="fa fa-times"></i></span>
                </div>
            </div>
        </div>

        <div class="container">
            <!-- Atribute Navigation -->
            <div class="attr-nav">
                <ul>
                    <li class="search"><a href="#"><i class="fa fa-search"></i></a></li>
                </ul>
            </div>
            <!-- Header Navigation -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="<?=APP_PATH?>/home.php"><img class="logo" src="images/log.png" alt=""></a>
            </div>
            <!-- Navigation -->
            <div class="collapse navbar-collapse" id="navbar-menu">
                <ul class="nav navbar-nav menu">
                    <li><a href="<?=APP_PATH?>/home.php">Home</a></li>
                    <li><a href="<?=APP_PATH?>/postAdd.php">Post Add</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownBlog" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Profile
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownBlog" style="background-color: black">
                            <a style="color: whitesmoke" class="dropdown-item" href="profile.php">My Profile|</a>
                            <a style="color: whitesmoke" class="dropdown-item" href="myPost.php">My Post|</a><!--blog home  1 and blog home 2-->
                            <a style="color: whitesmoke" class="dropdown-item" href="logOut.php">Logout</a>
                        </div>
                    </li>
                    <li><a href="<?=APP_PATH?>/about.php">About Us</a></li>
                </ul>
            </div>
        </div>
    </nav><!-- Navbar end -->
</header>