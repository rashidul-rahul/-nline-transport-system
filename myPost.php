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
$posts = $postData->viewPostByUserId(session::get('userId'));
?>
<!-- Header end -->




<!-- About -->
<!-- About end -->

<!-- Why us -->
<!-- Why us end -->

<!-- Services -->
<section id="services">
    <div class="container">
        <?php
        if(isset($_GET['msg'])){
            echo $_GET['msg'];
        }
        ?>
        <h2>My  Posts</h2>
        <div class="row">
                <?php
                foreach ($posts as $post) {
                    ?>
                    <div class="col-md-4">
                        <div class="service_item">
                            <img src="<?=$post->image?>" alt="Post Image"/>
                            <h3><?=$post->title?></h3>
                            <p><?=$post->description?></p>
                            <a href="viewPost.php?id=<?=$post->id?>" class="btn know_btn">Details</a>
                        </div>
                    </div>
                    <?php
                }
                ?>
        </div>
    </div>
</section><!-- Services end -->

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