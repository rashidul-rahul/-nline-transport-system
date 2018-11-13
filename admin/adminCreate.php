<!DOCTYPE html>
<html lang="en">

<?php
include_once ('adminHead.php');
include ('../lib/admin.php');
?>
<?php
if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['createAdmin'])){
    $adminReg = new admin();
    if($adminReg->createAdmin($_POST)){
        header("Location: allAdmin.php?msg=".urlencode('SuccessFully Add User'));
        exit();
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
                <h1 class="page-header">Create Admin</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                       Create Admin Account
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-6">
                                <?php
                                if(isset($value)){
                                    echo $value ;
                                }
                                ?>
                                <form role="form" action="adminCreate.php" method="post">

                                    <div class="form-group">
                                        <label  for="name">Full Name</label>
                                        <input id="name"  name="name" type="text" class="form-control" placeholder="Enter Full Name">
                                    </div>
                                    <div class="form-group">
                                        <label  for="userName">User Name</label>
                                        <input id="userName"  name="userName" type="text" class="form-control" placeholder="Enter User Name">
                                    </div>
                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input id="email" class="form-control" placeholder="Eamil  Address" type="email" name="email">
                                    </div>
                                    <div class="form-group">
                                        <label for="password">Password</label>
                                        <input id="password" class="form-control" placeholder="*******" type="password" name="password">
                                    </div>
                                    <button type="submit" name="createAdmin" class="btn btn-default">Submit</button>
                                    <button type="reset" class="btn btn-default">Reset</button>
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
