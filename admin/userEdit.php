<!DOCTYPE html>
<html lang="en">

<?php
include_once ('adminHead.php');
include ('../lib/User.php');
?>
<?php
if(isset($_GET['id'])){
    $usersData = new User();
    $users = $usersData->viewUserByID($_GET['id']);
}
foreach ($users as $user){
    $data = $user;
}
?>
<?php

?>
<?php
if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['update'])){
    $userUpdate = new User();
    if($userUpdate->updateUser($_POST, $data->id)){
        header("Location: allUser.php?msg=".urlencode('SuccessFully Update'));
        exit();
    }
}
if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['delete'])){
    $user = new User();
    if($user->deleteUser($_GET['id'])){
        header("Location: allUser.php?msg=".urlencode('SuccessFully Delete'));
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
                                        <label  for="fullName">Full Name</label>
                                        <input id="fullName"  name="fullName" type="text" class="form-control" value="<?=$data->name?>" >
                                    </div>
                                    <div class="form-group">
                                        <label  for="userName">User Name</label>
                                        <input id="userName"  name="userName" type="text" class="form-control" value="<?=$data->userName?>" >
                                    </div>
                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input id="email" class="form-control" value="<?=$data->email?>" type="email" name="email">
                                    </div>
                                    <div class="form-group">
                                        <label for="phone">Phone</label>
                                        <input id="phone" name="phone" type="text" class="form-control" value="<?=$data->phone?>">
                                    </div>
                                    <button type="submit" name="update" class="btn btn-default">Submit</button>
                                    <button type="submit" name="delete" class="btn btn-default">Delete Account</button>
                                </form>
                            </div>
                            <!-- /.col-lg-6 (nested) -->
                            <!--                            <div class="col-lg-6">-->
                            <!--                                <h1>Disabled Form States</h1>-->
                            <!--                                <form role="form">-->
                            <!--                                    <fieldset disabled>-->
                            <!--                                        <div class="form-group">-->
                            <!--                                            <label for="disabledSelect">Disabled input</label>-->
                            <!--                                            <input class="form-control" id="disabledInput" type="text" placeholder="Disabled input" disabled>-->
                            <!--                                        </div>-->
                            <!--                                        <div class="form-group">-->
                            <!--                                            <label for="disabledSelect">Disabled select menu</label>-->
                            <!--                                            <select id="disabledSelect" class="form-control">-->
                            <!--                                                <option>Disabled select</option>-->
                            <!--                                            </select>-->
                            <!--                                        </div>-->
                            <!--                                        <div class="checkbox">-->
                            <!--                                            <label>-->
                            <!--                                                <input type="checkbox">Disabled Checkbox-->
                            <!--                                            </label>-->
                            <!--                                        </div>-->
                            <!--                                        <button type="submit" class="btn btn-primary">Disabled Button</button>-->
                            <!--                                    </fieldset>-->
                            <!--                                </form>-->
                            <!--<!--                                <h1>Form Validation States</h1>-->
                            <!--<!--                                <form role="form">-->
                            <!--<!--                                    <div class="form-group has-success">-->
                            <!--<!--                                        <label class="control-label" for="inputSuccess">Input with success</label>-->
                            <!--<!--                                        <input type="text" class="form-control" id="inputSuccess">-->
                            <!--<!--                                    </div>-->
                            <!--<!--                                    <div class="form-group has-warning">-->
                            <!--<!--                                        <label class="control-label" for="inputWarning">Input with warning</label>-->
                            <!--<!--                                        <input type="text" class="form-control" id="inputWarning">-->
                            <!--<!--                                    </div>-->
                            <!--<!--                                    <div class="form-group has-error">-->
                            <!--<!--                                        <label class="control-label" for="inputError">Input with error</label>-->
                            <!--<!--                                        <input type="text" class="form-control" id="inputError">-->
                            <!--<!--                                    </div>-->
                            <!--<!--                                </form>-->
                            <!--                                <h1>Input Groups</h1>-->
                            <!--                                <form role="form">-->
                            <!--                                    <div class="form-group input-group">-->
                            <!--                                        <span class="input-group-addon">@</span>-->
                            <!--                                        <input type="text" class="form-control" placeholder="Username">-->
                            <!--                                    </div>-->
                            <!--                                    <div class="form-group input-group">-->
                            <!--                                        <input type="text" class="form-control">-->
                            <!--                                        <span class="input-group-addon">.00</span>-->
                            <!--                                    </div>-->
                            <!--                                    <div class="form-group input-group">-->
                            <!--                                            <span class="input-group-addon"><i class="fa fa-eur"></i>-->
                            <!--                                            </span>-->
                            <!--                                        <input type="text" class="form-control" placeholder="Font Awesome Icon">-->
                            <!--                                    </div>-->
                            <!--                                    <div class="form-group input-group">-->
                            <!--                                        <span class="input-group-addon">$</span>-->
                            <!--                                        <input type="text" class="form-control">-->
                            <!--                                        <span class="input-group-addon">.00</span>-->
                            <!--                                    </div>-->
                            <!--                                    <div class="form-group input-group">-->
                            <!--                                        <input type="text" class="form-control">-->
                            <!--                                        <span class="input-group-btn">-->
                            <!--                                                <button class="btn btn-default" type="button"><i class="fa fa-search"></i>-->
                            <!--                                                </button>-->
                            <!--                                            </span>-->
                            <!--                                    </div>-->
                            <!--                                </form>-->
                            <!--                            </div>-->
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
include_once ("adminScript.php");
?>

</body>

</html>
