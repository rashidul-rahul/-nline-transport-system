<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<?php
include_once ('layout/logOutHead.php');
//include_once ('layout/header.php');
include_once ('lib/post.php');

$postData = new Post();
$posts = $postData->allPost();
$loop = 1;
?>

    <body>
        <!-- Header -->
        <?php
        include_once ('layout/logOutHeader.php');
        ?>
        <!-- Header end -->


        <section id="home" class="home">
            <!-- Carousel -->
            <div id="carousel" class="carousel slide" data-ride="carousel">
                <!-- Carousel-inner -->
                <div class="carousel-inner" role="listbox">
                    <div class="item active">
                        <img src="images/slider_img.jpg" alt="Construction">
                        <div class="overlay">
                            <div class="carousel-caption">
                                <h3>Online Transport Service</h3>
<!--                                <h1>Construction Services</h1>-->
<!--                                <h1 class="second_heading">Creative & Professional</h1>-->
                                <p>We serve here lots of car, bus, truck, pickup</p>
                                <a href="signup.php" class="btn know_btn">Signup and Add Post</a>
                                <a href="" class="btn know_btn">Need Transport Service</a>
                            </div>					
                        </div>
                    </div>
                </div><!-- Carousel-inner end -->



                <!-- Controls -->
<!--                <a class="left carousel-control" href="#carousel" role="button" data-slide="prev">-->
<!--                    <span class="fa fa-angle-left" aria-hidden="true"></span>-->
<!--                    <span class="sr-only">Previous</span>-->
<!--                </a>-->
<!--                <a class="right carousel-control" href="#carousel" role="button" data-slide="next">-->
<!--                    <span class="fa fa-angle-right" aria-hidden="true"></span>-->
<!--                    <span class="sr-only">Next</span>-->
<!--                </a>-->
            </div><!-- Carousel end-->

        </section>


        <!-- About -->
        <!-- About end -->

        <!-- Why us -->
        <!-- Why us end -->

        <!-- Services -->
        <section id="services">
            <div class="container">
                <h2>AVAILABLE TRANSPORT</h2>
<!--                    <div class="col-md-4">-->
<!--                        <div class="service_item">-->
<!--                            <img src="images/service_img1.jpg" alt="Our Services" />-->
<!--                            <h3>CONSTRUCTION MANAGEMENT</h3>-->
<!--                            <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit,</p>-->
<!--                            <a href="#services" class="btn know_btn">know more</a>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="col-md-4">-->
<!--                        <div class="service_item">-->
<!--                            <img src="images/service_img2.jpg" alt="Our Services" />-->
<!--                            <h3>RENOVATION</h3>-->
<!--                            <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit,</p>-->
<!--                            <a href="#services" class="btn know_btn">know more</a>-->
<!--                        </div>-->
<!--                    </div>-->
                    <?php
                    foreach ($posts as $post){
                        ?>
                        <?php
                        if ($loop%3==0){
                            echo '<div class="row">';
                        }
                        ?>
                        <div class="col-md-4">
                            <div class="service_item">
                                <img src="<?= $post->image ?>" alt="Our Services"/>
                                <h4><?= $post->title ?></h4>
                                <a href="lviewPost.php?id=<?=$post->id?>" class="btn know_btn">know more</a>
                            </div>
                        </div>
                        <?php
                        if ($loop%3==0){
                            echo '</div>';
                        }
                        $loop++;
                    }
                    ?>

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