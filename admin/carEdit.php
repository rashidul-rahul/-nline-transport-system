<!DOCTYPE html>
<html lang="en">

<?php
include_once ('adminHead.php');
include('../lib/car.php');
?>
<?php
if(isset($_GET['id'])){
    $carData = new Car();
    $cars = $carData->viewCarById($_GET['id']);
}
foreach ($cars as $car){

}
?>
<?php

?>
<?php
if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['updateCar'])){
    if($carData->updateCar($_POST, $car->id)){
        header("Location: allCar.php?msg=".urlencode('SuccessFully Update'));
        exit();
    }else{
        header("Location: allCar.php?msg=".urlencode('Update Failed'));
        exit();
    }
}
if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['deleteCar'])){
    if($carData->deleteCar($_GET['id'])){
        header("Location: allCar.php?msg=".urlencode('SuccessFully Delete'));
        exit();
    }else{
        return "Sorry";
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
                <h1 class="page-header">Edit User Information</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <?php
                        if(isset($value)){
                            echo $value;
                        }
                        ?>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-6">
                                <form role="form" action="" method="post">
                                    <div class="form-group">
                                        <label  for="name">Name</label>
                                        <input id="name"  name="name" type="text" class="form-control" value="<?=$car->name?>" >
                                    </div>
                                    <div class="form-group">
                                        <label  for="description">Description</label>
                                        <input id="description"  name="description" type="text" class="form-control" value="<?=$car->description?>" >
                                    </div>
                                    <button type="submit" name="updateCar" class="btn btn-default">Submit</button>
                                    <button type="submit" name="deleteCar" class="btn btn-default">Delete This car</button>
                                </form>
                            </div>
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
include_once ("adminScript.php");
?>

</body>

</html>
