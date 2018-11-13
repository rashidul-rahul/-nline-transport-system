<?php
include('../lib/car.php');
?>
<!DOCTYPE html>
<html lang="en">

<?php
include_once ('adminHead.php');
?>
<?php
$carList = new car();
$cars = $carList->getAllCar();
//var_dump($users);
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
                <h1 class="page-header">All Car</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <?php
                    if(isset($_GET['msg'])){
                        echo "<span style='color: red'>".$_GET['msg']."</span>";
                    }
                    ?>
                    <div class="panel-heading">
                        List of Users/Reporters
                    </div>

                    <!-- /.panel-heading -->
                    <div class="panel-body">
                        <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                            <thead>
                            <tr>
                                <th>Name</th>
                                <th>Description</th>
                                <th>Created Time</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            foreach ($cars as $car){?>
                                <tr>
                                    <td><?=$car->name?></td>
                                    <td><?=$car->description?></td>
                                    <td class="center"><?=$car->createdAt?></td>
                                    <td><a href="carEdit.php?id=<?=$car->id?>">EDIT</a></td>
                                </tr>
                                <?php
                            }
                            ?>
                            </tbody>
                        </table>
    </div>
    <!-- /#page-wrapper -->

</div>
<!-- /#wrapper -->

<!-- jQuery -->
<?php
include_once('adminScript.php');
?>

<!-- Page-Level Demo Scripts - Tables - Use for reference -->
<script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
            responsive: true
        });
    });
</script>

</body>

</html>

