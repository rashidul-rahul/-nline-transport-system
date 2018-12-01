<!DOCTYPE html>
<html lang="bn">
<?php
include_once ('adminHead.php');
?>

<body>

<div id="wrapper">

    <!-- Navigation -->
    <?php
    include_once ('adminNav.php');
    ?>

    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Dashboard</h1>
                <h3>Welcome to admin panel Mr. <?=session::get('userName')?></h3>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->

        <!-- /.row -->
    </div>
    <!-- /#page-wrapper -->

</div>
<!-- /#wrapper -->

<!-- jQuery -->
<?php
include_once ('adminScript.php');
?>

</body>

</html>
