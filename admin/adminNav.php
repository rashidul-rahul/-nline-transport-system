<?php
include_once ('../path.php');
?>
<nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="<?=APP_PATH?>/admin/dashboard.php">Admin Panel</a>
    </div>
    <!-- /.navbar-header -->

    <ul class="nav navbar-top-links navbar-right">
        <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
            </a>
            <ul class="dropdown-menu dropdown-user">
                <li><a href="#"><i class="fa fa-user fa-fw"></i> Profile</a>
                </li>
                <!--                <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>-->
                <!--                </li>-->
                <li class="divider"></li>
                <li><a href="logout.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                </li>
            </ul>
            <!-- /.dropdown-user -->
        </li>
        <!-- /.dropdown -->
    </ul>
    <!-- /.navbar-top-links -->

    <div class="navbar-default sidebar" role="navigation">
        <div class="sidebar-nav navbar-collapse">
            <ul class="nav" id="side-menu">
                <li>
                    <a href="<?=APP_PATH?>/admin/dashboard.php"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-table fa-fw"></i> Post<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a href="<?=APP_PATH?>/admin/allPost.php"> All Post</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#"><i class="fa fa-edit fa-fw"></i> Users<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a href="<?=APP_PATH?>/admin/allUser.php">All User</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#"><i class="fa fa-edit fa-fw"></i> Admins<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a href="<?=APP_PATH?>/admin/adminCreate.php">Create Admin</a>
                        </li>
                        <li>
                            <a href="<?=APP_PATH?>/admin/allAdmin.php">All Admin</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#"><i class="fa fa-wrench fa-fw"></i> Car<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a href="allCar.php">All Car</a>
                        </li>
                        <li>
                            <a href="createCar.php">Create Car</a>
                        </li>
                    </ul>
                    <!-- /.nav-second-level -->
                </li>
            </ul>
        </div>
        <!-- /.sidebar-collapse -->
    </div>
    <!-- /.navbar-static-side -->
</nav>