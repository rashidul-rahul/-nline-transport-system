<?php
include_once ('../path.php');
include (ROOTPATH.'/lib/post.php');
?>
<!DOCTYPE html>
<html lang="en">

<?php
include_once ('adminHead.php');
?>
<?php
$postList = new Post();
$posts = $postList->allPost();
$serial = 1;
//var_dump($users);
?>

<body>

<div id="wrapper">

    <!-- Navigation -->
    <?php
    include_once ('adminNav.php');
    ?>

    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">All Post</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <?php
                    if(isset($_GET['msg'])){
                        echo "<span style='color: red'>".$_GET['msg']."</span>";
                    }
                    ?>
                    <div class="panel-heading">
                        List of All Post
                    </div>

                    <!-- /.panel-heading -->
                    <div class="panel-body">
                        <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                            <thead>
                            <tr>
                                <th>Serial</th>
                                <th>Title</th>
                                <th>Location</th>
                                <th>Phone</th>
                                <th>Description</th>
                                <th>Registered Time</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            foreach ($posts as $post){?>
                                <tr>
                                    <td><?=$serial?></td>
                                    <td><?=$post->title?></td>
                                    <td><?=$post->location?></td>
                                    <td><?=$post->phone?></td>
                                    <td><?=$post->description?></td>
                                    <td class="center"><?=$post->createdAt?></td>
                                    <td><a href="userEdit.php?id=<?=$post->id?>">EDIT</a></td>
                                </tr>
                                <?php
                                $serial++;
                            }
                            ?>
                            </tbody>
                        </table>
                        <!-- /.table-responsive -->
                        <!--                        <div class="well">-->
                        <!--                            <h4>DataTables Usage Information</h4>-->
                        <!--                            <p>DataTables is a very flexible, advanced tables plugin for jQuery. In SB Admin, we are using a specialized version of DataTables built for Bootstrap 3. We have also customized the table headings to use Font Awesome icons in place of images. For complete documentation on DataTables, visit their website at <a target="_blank" href="https://datatables.net/">https://datatables.net/</a>.</p>-->
                        <!--                            <a class="btn btn-default btn-lg btn-block" target="_blank" href="https://datatables.net/">View DataTables Documentation</a>-->
                        <!--                        </div>-->
                    </div>
                    <!-- /.panel-body -->
                </div>
                <!-- /.panel -->
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
        <!--        <div class="row">-->
        <!--            <div class="col-lg-6">-->
        <!--                <div class="panel panel-default">-->
        <!--                    <div class="panel-heading">-->
        <!--                        Kitchen Sink-->
        <!--                    </div>-->
        <!--                    <!-- /.panel-heading -->
        <!--                    <div class="panel-body">-->
        <!--                        <div class="table-responsive">-->
        <!--                            <table class="table table-striped table-bordered table-hover">-->
        <!--                                <thead>-->
        <!--                                <tr>-->
        <!--                                    <th>#</th>-->
        <!--                                    <th>First Name</th>-->
        <!--                                    <th>Last Name</th>-->
        <!--                                    <th>Username</th>-->
        <!--                                </tr>-->
        <!--                                </thead>-->
        <!--                                <tbody>-->
        <!--                                <tr>-->
        <!--                                    <td>1</td>-->
        <!--                                    <td>Mark</td>-->
        <!--                                    <td>Otto</td>-->
        <!--                                    <td>@mdo</td>-->
        <!--                                </tr>-->
        <!--                                <tr>-->
        <!--                                    <td>2</td>-->
        <!--                                    <td>Jacob</td>-->
        <!--                                    <td>Thornton</td>-->
        <!--                                    <td>@fat</td>-->
        <!--                                </tr>-->
        <!--                                <tr>-->
        <!--                                    <td>3</td>-->
        <!--                                    <td>Larry</td>-->
        <!--                                    <td>the Bird</td>-->
        <!--                                    <td>@twitter</td>-->
        <!--                                </tr>-->
        <!--                                </tbody>-->
        <!--                            </table>-->
        <!--                        </div>-->
        <!--                        <!-- /.table-responsive -->
        <!--                    </div>-->
        <!--                    <!-- /.panel-body -->
        <!--                </div>-->
        <!--                <!-- /.panel -->
        <!--            </div>-->
        <!--            <!-- /.col-lg-6 -->
        <!--            <div class="col-lg-6">-->
        <!--                <div class="panel panel-default">-->
        <!--                    <div class="panel-heading">-->
        <!--                        Basic Table-->
        <!--                    </div>-->
        <!--                    <!-- /.panel-heading -->
        <!--                    <div class="panel-body">-->
        <!--                        <div class="table-responsive">-->
        <!--                            <table class="table">-->
        <!--                                <thead>-->
        <!--                                <tr>-->
        <!--                                    <th>#</th>-->
        <!--                                    <th>First Name</th>-->
        <!--                                    <th>Last Name</th>-->
        <!--                                    <th>Username</th>-->
        <!--                                </tr>-->
        <!--                                </thead>-->
        <!--                                <tbody>-->
        <!--                                <tr>-->
        <!--                                    <td>1</td>-->
        <!--                                    <td>Mark</td>-->
        <!--                                    <td>Otto</td>-->
        <!--                                    <td>@mdo</td>-->
        <!--                                </tr>-->
        <!--                                <tr>-->
        <!--                                    <td>2</td>-->
        <!--                                    <td>Jacob</td>-->
        <!--                                    <td>Thornton</td>-->
        <!--                                    <td>@fat</td>-->
        <!--                                </tr>-->
        <!--                                <tr>-->
        <!--                                    <td>3</td>-->
        <!--                                    <td>Larry</td>-->
        <!--                                    <td>the Bird</td>-->
        <!--                                    <td>@twitter</td>-->
        <!--                                </tr>-->
        <!--                                </tbody>-->
        <!--                            </table>-->
        <!--                        </div>-->
        <!--                        <!-- /.table-responsive -->
        <!--                    </div>-->
        <!--                    <!-- /.panel-body -->
        <!--                </div>-->
        <!--                <!-- /.panel -->
        <!--            </div>-->
        <!--            <!-- /.col-lg-6 -->
        <!--        </div>-->
        <!-- /.row -->
        <!--        <div class="row">-->
        <!--            <div class="col-lg-6">-->
        <!--                <div class="panel panel-default">-->
        <!--                    <div class="panel-heading">-->
        <!--                        Striped Rows-->
        <!--                    </div>-->
        <!--                    <!-- /.panel-heading -->
        <!--                    <div class="panel-body">-->
        <!--                        <div class="table-responsive">-->
        <!--                            <table class="table table-striped">-->
        <!--                                <thead>-->
        <!--                                <tr>-->
        <!--                                    <th>#</th>-->
        <!--                                    <th>First Name</th>-->
        <!--                                    <th>Last Name</th>-->
        <!--                                    <th>Username</th>-->
        <!--                                </tr>-->
        <!--                                </thead>-->
        <!--                                <tbody>-->
        <!--                                <tr>-->
        <!--                                    <td>1</td>-->
        <!--                                    <td>Mark</td>-->
        <!--                                    <td>Otto</td>-->
        <!--                                    <td>@mdo</td>-->
        <!--                                </tr>-->
        <!--                                <tr>-->
        <!--                                    <td>2</td>-->
        <!--                                    <td>Jacob</td>-->
        <!--                                    <td>Thornton</td>-->
        <!--                                    <td>@fat</td>-->
        <!--                                </tr>-->
        <!--                                <tr>-->
        <!--                                    <td>3</td>-->
        <!--                                    <td>Larry</td>-->
        <!--                                    <td>the Bird</td>-->
        <!--                                    <td>@twitter</td>-->
        <!--                                </tr>-->
        <!--                                </tbody>-->
        <!--                            </table>-->
        <!--                        </div>-->
        <!--                        <!-- /.table-responsive -->
        <!--                    </div>-->
        <!--                    <!-- /.panel-body -->
        <!--                </div>-->
        <!--                <!-- /.panel -->
        <!--            </div>-->
        <!--            <!-- /.col-lg-6 -->
        <!--            <div class="col-lg-6">-->
        <!--                <div class="panel panel-default">-->
        <!--                    <div class="panel-heading">-->
        <!--                        Bordered Table-->
        <!--                    </div>-->
        <!--                    <!-- /.panel-heading -->
        <!--                    <div class="panel-body">-->
        <!--                        <div class="table-responsive table-bordered">-->
        <!--                            <table class="table">-->
        <!--                                <thead>-->
        <!--                                <tr>-->
        <!--                                    <th>#</th>-->
        <!--                                    <th>First Name</th>-->
        <!--                                    <th>Last Name</th>-->
        <!--                                    <th>Username</th>-->
        <!--                                </tr>-->
        <!--                                </thead>-->
        <!--                                <tbody>-->
        <!--                                <tr>-->
        <!--                                    <td>1</td>-->
        <!--                                    <td>Mark</td>-->
        <!--                                    <td>Otto</td>-->
        <!--                                    <td>@mdo</td>-->
        <!--                                </tr>-->
        <!--                                <tr>-->
        <!--                                    <td>2</td>-->
        <!--                                    <td>Jacob</td>-->
        <!--                                    <td>Thornton</td>-->
        <!--                                    <td>@fat</td>-->
        <!--                                </tr>-->
        <!--                                <tr>-->
        <!--                                    <td>3</td>-->
        <!--                                    <td>Larry</td>-->
        <!--                                    <td>the Bird</td>-->
        <!--                                    <td>@twitter</td>-->
        <!--                                </tr>-->
        <!--                                </tbody>-->
        <!--                            </table>-->
        <!--                        </div>-->
        <!--                        <!-- /.table-responsive -->
        <!--                    </div>-->
        <!--                    <!-- /.panel-body -->
        <!--                </div>-->
        <!--                <!-- /.panel -->
        <!--            </div>-->
        <!--            <!-- /.col-lg-6 -->
        <!--        </div>-->
        <!--        <!-- /.row -->
        <!--        <div class="row">-->
        <!--            <div class="col-lg-6">-->
        <!--                <div class="panel panel-default">-->
        <!--                    <div class="panel-heading">-->
        <!--                        Hover Rows-->
        <!--                    </div>-->
        <!--                    <!-- /.panel-heading -->
        <!--                    <div class="panel-body">-->
        <!--                        <div class="table-responsive">-->
        <!--                            <table class="table table-hover">-->
        <!--                                <thead>-->
        <!--                                <tr>-->
        <!--                                    <th>#</th>-->
        <!--                                    <th>First Name</th>-->
        <!--                                    <th>Last Name</th>-->
        <!--                                    <th>Username</th>-->
        <!--                                </tr>-->
        <!--                                </thead>-->
        <!--                                <tbody>-->
        <!--                                <tr>-->
        <!--                                    <td>1</td>-->
        <!--                                    <td>Mark</td>-->
        <!--                                    <td>Otto</td>-->
        <!--                                    <td>@mdo</td>-->
        <!--                                </tr>-->
        <!--                                <tr>-->
        <!--                                    <td>2</td>-->
        <!--                                    <td>Jacob</td>-->
        <!--                                    <td>Thornton</td>-->
        <!--                                    <td>@fat</td>-->
        <!--                                </tr>-->
        <!--                                <tr>-->
        <!--                                    <td>3</td>-->
        <!--                                    <td>Larry</td>-->
        <!--                                    <td>the Bird</td>-->
        <!--                                    <td>@twitter</td>-->
        <!--                                </tr>-->
        <!--                                </tbody>-->
        <!--                            </table>-->
        <!--                        </div>-->
        <!--                        <!-- /.table-responsive -->
        <!--                    </div>-->
        <!--                    <!-- /.panel-body -->
        <!--                </div>-->
        <!--                <!-- /.panel -->
        <!--            </div>-->
        <!--            <!-- /.col-lg-6 -->
        <!--            <div class="col-lg-6">-->
        <!--                <div class="panel panel-default">-->
        <!--                    <div class="panel-heading">-->
        <!--                        Context Classes-->
        <!--                    </div>-->
        <!--                    <!-- /.panel-heading -->
        <!--                    <div class="panel-body">-->
        <!--                        <div class="table-responsive">-->
        <!--                            <table class="table">-->
        <!--                                <thead>-->
        <!--                                <tr>-->
        <!--                                    <th>#</th>-->
        <!--                                    <th>First Name</th>-->
        <!--                                    <th>Last Name</th>-->
        <!--                                    <th>Username</th>-->
        <!--                                </tr>-->
        <!--                                </thead>-->
        <!--                                <tbody>-->
        <!--                                <tr class="success">-->
        <!--                                    <td>1</td>-->
        <!--                                    <td>Mark</td>-->
        <!--                                    <td>Otto</td>-->
        <!--                                    <td>@mdo</td>-->
        <!--                                </tr>-->
        <!--                                <tr class="info">-->
        <!--                                    <td>2</td>-->
        <!--                                    <td>Jacob</td>-->
        <!--                                    <td>Thornton</td>-->
        <!--                                    <td>@fat</td>-->
        <!--                                </tr>-->
        <!--                                <tr class="warning">-->
        <!--                                    <td>3</td>-->
        <!--                                    <td>Larry</td>-->
        <!--                                    <td>the Bird</td>-->
        <!--                                    <td>@twitter</td>-->
        <!--                                </tr>-->
        <!--                                <tr class="danger">-->
        <!--                                    <td>4</td>-->
        <!--                                    <td>John</td>-->
        <!--                                    <td>Smith</td>-->
        <!--                                    <td>@jsmith</td>-->
        <!--                                </tr>-->
        <!--                                </tbody>-->
        <!--                            </table>-->
        <!--                        </div>-->
        <!--                        <!-- /.table-responsive -->
        <!--                    </div>-->
        <!--                    <!-- /.panel-body -->
        <!--                </div>-->
        <!--                <!-- /.panel -->
        <!--            </div>-->
        <!--            <!-- /.col-lg-6 -->
        <!--        </div>-->
        <!-- /.row -->
    </div>
    <!-- /#page-wrapper -->

</div>
<!-- /#wrapper -->

<!-- jQuery -->
<?php
include_once('adminScript.php');
?>

<!-- Page-Level Demo Scripts - Tables - Use for reference -->
<script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
            responsive: true
        });
    });
</script>

</body>

</html>

