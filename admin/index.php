<!DOCTYPE html>
<html>
<?php
include_once('head.php');
include_once ('../lib/admin.php');
include_once ('../lib/session.php');

if($_SERVER['REQUEST_METHOD'] = 'POST' && isset($_POST['adminLogin'])){
    $admin  = new admin();
    $adminData = $admin->adminLogin($_POST);
//    var_dump($adminData);
    if($adminData == false){
        $note = "Invalid User Name OR  Password";
    }else{
        foreach ($adminData as $data);
        session::init();
        session::set('login', 'true');
        session::set('name', 'admin');
        session::set('userId', $data->id);
        session::set('userName', $data->userName);
        session::set('fullName', $data->name);
        session::set('logInMsg', '<div class="alert alert-success">SuccessFully Logged In</div>');
        header('Location: dashboard.php');
    }

}
?>
<body>
<a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
<div class="container">

    <div class="col-md-4 col-lg-offset-4">
        <h1>ADMIN LOGIN</h1>
        <div class="" style="color: red">
            <?php
            if(isset($_GET['msg'])){
                echo $_GET['msg'];
            }
            if (isset($note)){
                echo $note;
            }
            ?>
        </div>
    <form action="" class="" method="post">
        <div class="form-group">
            <label for="exampleInputEmail1">User Name</label>
            <input type="text" name="userName" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter User Name">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1" name="password" placeholder="Password">
        </div>
        <button type="submit" class="btn btn-primary"  name="adminLogin">Submit</button>
    </form>
    </div>

</div>
<?php
include ('script.php');
?>
</body>
</html>