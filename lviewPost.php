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
include_once ('lib/post.php');
include_once ('lib/user.php');
$postData = new Post();
$posts = $postData->viewPostById($_GET['id']);
foreach ($posts as $post);
$userData = new User();
$users = $userData->viewUserByID($post->userId);
foreach ($users as $user);
//var_dump($user);

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
    <p>Post Owner: <?=$user->name?></p>
    <p>Phone: <?=$post->phone?></p></br>
    <p>Details: <?=$post->description?></p></br>
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