<!DOCTYPE html>
<html lang="en">

<?php
include_once ('adminHead.php');
include('../lib/car.php');
?>
<?php
if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['addCar'])){
    $car = new Car();
    if($car->createCar($_POST)){
        header("Location: allCar.php?msg=".urlencode('Create successFully'));
    }
}
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
                <h1 class="page-header">Create Car</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">

                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-6">
                                <form role="form" action="createCar.php" method="post">
                                    <div class="form-group">
                                        <label for="category">Car Name</label>
                                        <input name="name" type="text" id="category" class="form-control">
                                        <p class="help-block">Enter the Car Name.</p>
                                    </div>
                                    <div class="form-group">
                                        <label for="description">Description</label>
                                        <input name="description" type="text" id="description" class="form-control">
                                    </div>

                                    <button type="submit" name="addCar" class="btn btn-default">Submit</button>
                                    <button type="reset" class="btn btn-default">Reset</button>
                                </form>
                            </div>
                            <!-- /.col-lg-6 (nested) -->

                            <!-- /.col-lg-6 (nested) -->
                        </div>
                        <!-- /.row (nested) -->
                    </div>
                    <!-- /.panel-body -->
                </div>
                <!-- /.panel -->
            </div>
            <!-- /.col-lg-12 -->
        </div>
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
