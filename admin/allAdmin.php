<?php
include_once ('../path.php');
include (ROOTPATH.'/lib/admin.php');
?>
<!DOCTYPE html>
<html lang="en">

<?php
include_once ('adminHead.php');
?>
<?php
$adminList = new admin();
$admins = $adminList->viewAllAdmin();
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
                <h1 class="page-header">Admin</h1>
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
                        List of Admins
                    </div>

                    <!-- /.panel-heading -->
                    <div class="panel-body">
                        <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                            <thead>
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>User Name</th>
                                <th>Registered Time</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            foreach ($admins as $admin){?>
                                <tr>
                                    <td><?=$admin->name?></td>
                                    <td><?=$admin->email?></td>
                                    <td class="center"><?=$admin->userName?></td>
                                    <td class="center"><?=$admin->createdAt?></td>
                                    <td><a href="adminEdit.php?id=<?=$admin->id?>">EDIT</a></td>
                                </tr>
                                <?php
                            }
                            ?>
                            </tbody>
                        </table>
                    </div>
                    <!-- /.panel-body -->
                </div>
                <!-- /.panel -->
            </div>
            <!-- /.col-lg-12 -->
        </div>
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

