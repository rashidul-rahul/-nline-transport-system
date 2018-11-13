<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<?php
include_once ('layout/logOutHead.php');
?>
<body>
<!-- Header -->
<?php
include_once ('layout/logOutHeader.php');
include_once ('lib/user.php');
include_once ('lib/session.php');
?>
<?php
if($_SERVER['REQUEST_METHOD'] = 'POST' && isset($_POST['userLogin'])){
    $user  = new User();
    $userData = $user->userLogin($_POST);
    if($userData == false){
        $note = '<div class="alert alert-danger">Invalid User Name Or Password</div>';
    }else{
        foreach ($userData as $data);
        session::init();
        session::set('login', 'true');
        session::set('userId', $data->id);
        session::set('userName', $data->userName);
        session::set('name', $data->name);
        session::set('logInMsg', '<div class="alert alert-success">SuccessFully Logged In</div>');
        header('Location: home.php');
    }

}
?>
<div class="containr">
    <div style="height: 100px"></div>
    <div class="col-sm-4" style="margin-left: 350px">
        <div class="form-group" style="color: green">
            <?php
            if(isset($_GET['msgg'])){
                echo $_GET['msgg'];
            }
            ?>
        </div>
        <div class="form-group" style="color: red">
            <?php
            if(isset($_GET['msg'])){
                echo $_GET['msg'];
            }
            ?>
        </div>
        <div class="form-group" style="color: red">
            <?php
            if(isset($msgr)){
                echo $msgr;
            }
            ?>
        </div>
        <?php
        if(isset($note)){
            echo $note;
        }
        ?>
        <form action="" method="post">
        <h2><caption>User Login</caption></h2>
        <div class="form-group">
            <label for="userName">User Name</label>
            <input type="text" class="form-control" id="userName" name="userName" placeholder="UserName">
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" name="password" class="form-control" id="password" placeholder="*****">
        </div>
        <div class="form-group">
            <button class="btn btn-success" type="submit" name="userLogin">Login</button>
            Or You Can <a href="signup.php">Create Acccount</a>
        </div>
        </form>
    </div>
    </div>
    <div class="" style="height: 375px"></div>


<?php
include_once ('layout/footer.php');
?>
<!-- Footer end -->

<!-- JavaScript -->
<?php
include_once ('layout/script.php');
?>
</body>
</html>