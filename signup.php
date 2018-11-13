<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<?php
include_once ('layout/logOutHead.php');
include_once ('lib/user.php');
?>
<body>
<!-- Header -->
<?php
include_once ('layout/logOutHeader.php');
?>
<?php
if($_SERVER['REQUEST_METHOD'] = 'POST' && isset($_POST['createAccount'])){
    $_FILES['image']['name'] =  str_replace(' ', '-',  $_FILES['image']['name']);
    $tagerDir = 'upload/'.basename($_FILES['image']['name']);
    if(move_uploaded_file($_FILES['image']['tmp_name'], $tagerDir)){
        $user = new User();
        if($user->userRegistration($_POST, $tagerDir)){
        header('Location: login.php?msgg='.urlencode('User Id Created SuccessFully'));
        exit();
        }else {
            $msgr = 'not created';
        }

        }


}
?>
<!-- Header end -->


<div class="contaier">
    <div style="height: 100px"></div>
    <div class="col-sm-4" style="margin-left: 350px">
        <h2><caption>Sign Up And Post Your Car Advertisement</caption></h2>
        <form method="post" enctype="multipart/form-data" action="">
            <?php
            if(isset($msgr)){
                echo $msgr;
            }
            ?>
            <div class="form-group">
                <label for="fullName">Full Name</label>
                <input type="text" class="form-control" id="fullName" name="fullName" placeholder="You Full Name">
            </div>
            <div class="form-group">
                <label for="userName">User Name</label>
                <input type="text" class="form-control" id="userName" name="userName" placeholder="User Name">
            </div>
            <div class="form-group">
                <label for="email">Email address</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="name@gmail.com">
            </div>
            <div class="form-group">
                <label for="phone">Phone</label>
                <input type="text" name="phone" class="form-control" id="phone" placeholder="0123456789">
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" class="form-control" id="password" placeholder="*****">
            </div>
            <div class="form-group">
                <label for="image">Uplod Your Profile Picture</label>
                <input type="file" class="form-control" name="image"  id="image">
            </div>
            <div class="form-group">
                <button class="btn btn-success" type="submit" name="createAccount">Create Account</button>
            </div>
        </form>
    </div>
    <div class="" style="height: 635px"></div>
</div>


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