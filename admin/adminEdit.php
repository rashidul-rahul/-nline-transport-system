<!DOCTYPE html>
<html lang="en">

<?php
include_once ('adminHead.php');
include ('../lib/admin.php');
?>
<?php
if(isset($_GET['id'])){
    $adminData = new admin();
    $admins = $adminData->viewAdminByID($_GET['id']);
}
foreach ($admins as $admin);
?>
<?php

?>
<?php
if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['updateAdmin'])){
    if($adminData->updateAdminById($_POST,  $admin->id)){
        header("Location: allAdmin.php?msg=".urlencode('SuccessFully Update'));
        exit();
    }
    else echo "filed";
}
if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['delete'])){
    if($adminData->deleteAdminById($_GET['id'])){
        header("Location: allAdmin.php?msg=".urlencode('SuccessFully Delete'));
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
                <h1 class="page-header">Edit Admin Information</h1>
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
                                        <label  for="name">Full Name</label>
                                        <input id="name"  name="name" type="text" class="form-control" placeholder="Enter Full Name" value="<?=$admin->name?>">
                                    </div>
                                    <div class="form-group">
                                        <label  for="userName">User Name</label>
                                        <input id="userName"  name="userName" type="text" class="form-control" placeholder="Enter User Name" value="<?=$admin->userName?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input id="email" class="form-control" placeholder="Eamil  Address" type="email" name="email" value="<?=$admin->email?>">
                                    </div>
                                    <button type="submit" name="updateAdmin" class="btn btn-default">Submit</button>
                                    <button type="submit" name="delete" class="btn btn-default">Delete Account</button>
                                    <button type="submit" name="delete" class="btn btn-default">Change Password</button>
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
