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
include_once ('lib/post.php');
$postData = new Post();
$posts = $postData->viewPostById($_GET['id']);
foreach ($posts as $post);

if($_SERVER['REQUEST_METHOD'] = 'POST' && isset($_POST['deletePost'])){
    if($postData->deletePost($_GET['id'])){
        header('Location: myPost.php?msg='.urlencode('Delete SuccessFul'));
    } else{
        echo 'delete  failed';
    }
} elseif ($_SERVER['REQUEST_METHOD'] = 'POST' && isset($_POST['editPost'])){
    header('Location: editPost.php?id='.$post->id);
    exit();
}

?>



<!-- About -->
<!-- About end -->

<!-- Why us -->
<!-- Why us end -->

<!-- Services -->
<div style="height: 50px"></div>
<div class="col-sm-4" style="margin-left: 350px">
    <img src="<?=$post->image?>" alt="Post  Image"></br></br></br>
    <h3><?=$post->title?></h3></br>
    <p>Location: <?=$post->location?></p></br>
    <p>Phone: <?=$post->phone?></p></br>
    <p>Details: <?=$post->description?></p></br>
    <form action="" method="post">
    <button type="submit" name="editPost" class="btn btn-success">Edit This Post</button>
    <button type="submit" name="deletePost" class="btn btn-danger">Delete This Post</button>
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