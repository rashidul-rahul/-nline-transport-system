<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<?php
include_once ('layout/head.php');
include_once ('lib/post.php');
include_once ('lib/car.php');
$carData = new Car();
$cars =  $carData->getAllCar();
// foreach ($cars as $car);
?>
<body>
<!-- Header -->
<?php
include_once ('layout/header.php');
include_once ('lib/Post.php');
?>
<?php
$postData = new Post();
$posts = $postData->viewPostById($_GET['id']);
foreach ($posts as $post);
if($_SERVER['REQUEST_METHOD'] = 'POST' && isset($_POST['updatePost'])){
    if($postData->updatePost($_POST, $_GET['id'])){
        header('Location:  viewPost.php?id='.$_GET['id']);
        exit();
    }
}
?>
<!-- Header end -->


<div class="contaier">
    <div style="height: 100px"></div>
    <div class="col-sm-4" style="margin-left: 350px">
        <h2><caption>Edit Post</caption></h2>
        <form method="post" enctype="multipart/form-data" action="">
            <?php
            if(isset($msg)){
                echo $msg;
            }
            ?>
            <input type="hidden" name="userId" value="<?=session::get('userId')?>">
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" id="title" name="title" value="<?=$post->title?>">
            </div>
            <div class="form-group">
                <label for="location">Location</label>
                <input type="text" class="form-control" id="location" name="location" value="<?=$post->location?>">
            </div>
            <div class="form-group">
                <label for="phone">Phone</label>
                <input type="text" class="form-control" id="phone" name="phone" value="<?=$post->phone?>">
            </div>
            <div class="form-group">
                <label for="details">Details</label>
                <textarea type="text" class="form-control" id="details" name="details"><?=$post->description?></textarea>
            </div>
            <div class="form-group">
                <button class="btn btn-success" type="submit" name="updatePost">Update</button>
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