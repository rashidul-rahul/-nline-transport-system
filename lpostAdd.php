<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<?php
include_once ('layout/logOutHead.php');
include_once ('lib/post.php');
include_once ('lib/car.php');
$carData = new Car();
$cars =  $carData->getAllCar();
// foreach ($cars as $car);
?>
<body>
<!-- Header -->
<?php
include_once ('layout/logOutHeader.php');
?>
<?php
if($_SERVER['REQUEST_METHOD'] = 'POST' && isset($_POST['addPost'])){
    $_FILES['image']['name'] =  str_replace(' ', '-',  $_FILES['image']['name']);
    $tagerDir = 'upload/postImages/'.basename($_FILES['image']['name']);
    if(move_uploaded_file($_FILES['image']['tmp_name'], $tagerDir)){
        $post = new Post();
        if($post->createUnRegPost($_POST, $tagerDir)){
            header('Location: index.php?msg='.urlencode('Post Added SuccessFully'));
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
        <h2><caption>Create Car Advertisement</caption></h2>
        <form method="post" enctype="multipart/form-data" action="">
            <?php
            if(isset($msgr)){
                echo $msgr;
            }
            ?>
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Enter Your Name">
            </div>
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" id="title" name="title" placeholder="Title">
            </div>
            <div class="form-group">
                <label for="cardId">Select Car</label>
                <select class="form-control" name="carId" id="cardId">

                    <?php
                    foreach ($cars as $car){
                        ?>
                        <option value="<?=$car->id?>"><?=$car->name?></option>
                        <?php
                    }
                    ?>
                </select>
            </div>
            <div class="form-group">
                <label for="details">Details</label>
                <textarea type="text" class="form-control" id="details" name="details" placeholder="Description"></textarea>
            </div>
            <div class="form-group">
                <label for="location">Location</label>
                <input type="text" class="form-control" id="location" name="location" placeholder="Location">
            </div>
            <div class="form-group">
                <label for="phone">Phone</label>
                <input type="text" class="form-control" id="phone" name="phone" placeholder="Phone Number">
            </div>
            <div class="form-group">
                <label for="image">Uplod Picture</label>
                <input type="file" class="form-control" name="image"  id="image">
            </div>
            <div class="form-group">
                <button class="btn btn-success" type="submit" name="addPost">Post</button>
            </div>
        </form>
    </div>
    <div class="" style="height: 755px"></div>
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