<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<?php
include_once ('layout/head.php');
?>
<body>
<!-- Header -->
<?php
include_once ('layout/header.php');
include_once ('lib/user.php');
$userData =  new User();
$users = $userData->viewUserByID(session::get('userId'));
foreach ($users as $user);
if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['edit'])){
    header('Location: editProfile.php');
    exit;
}
?>



<!-- About -->
<!-- About end -->

<!-- Why us -->
<!-- Why us end -->

<!-- Services -->
<div style="height: 50px"></div>
<div class="col-sm-4" style="margin-left: 350px">
    <form method="post">
        <h2><caption>My Profile</caption></h2>
        <?php
        if(isset($_GET['msg']))
        ?>
        <h4 style="margin-top: 40px">Profile Picture:</h4>
        <img src="<?=$user->image?>" alt="Image">
        <div class="form-group" style="margin-top: 20px">
            <label for="fullName">Full Name</label>
            <input type="text" class="form-control" readonly value="<?=$user->name?>" id="fullName" name="fullName" placeholder="You Full Name">
        </div>
        <div class="form-group">
            <label for="userName">User Name</label>
            <input type="text" class="form-control"  readonly value="<?=$user->userName?>" id="userName" name="userName" placeholder="User Name">
        </div>
        <div class="form-group">
            <label for="email">Email address</label>
            <input type="email" class="form-control" readonly id="email" value="<?=$user->email?>" name="email" placeholder="name@gmail.com">
        </div>
        <div class="form-group">
            <label for="phone">Phone</label>
            <input type="text" name="phone" readonly  value="<?=$user->phone?>" class="form-control" id="phone" placeholder="0123456789">
        </div>
        <div class="form-group">
            <button href="editProfile.php" class="btn btn-success" type="submit" name="edit">Edit My Account</button>
        </div>
    </form>
</div>
<div style="height: 800px"></div>
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