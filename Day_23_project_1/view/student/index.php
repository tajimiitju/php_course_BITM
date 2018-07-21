<?php
//session_start();
include_once '../includes/header.php';
include_once '../../vendor/autoload.php';
$student = new App\Student\Student();
$students = $student->index();

?>
    <!-- Page Content -->
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">All Students</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
           <div style="position: fixed; z-index: 111; right: 50px">
               <?php
               if(isset($_SESSION['insert'])){
                   echo "<div class='alert alert-success'>".$_SESSION['insert']."</div>";
                   session_unset();
               }
               if(isset($_SESSION['delete'])){
                   echo "<div class='alert alert-danger'>".$_SESSION['delete']."</div>";
                   session_unset();
               }
               if(isset($_SESSION['update'])){
                   echo "<div class='alert alert-warning'>".$_SESSION['update']."</div>";
                   session_unset();
               }
               ?>
           </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Basic Form Elements
                        </div>
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                <tr>
                                    <th>SL</th>
                                    <th>Name</th>
                                    <th>Department</th>
                                    <th>Address</th>
                                    <th>Action</th>
                                </tr>
                                </thead>

                                <tbody>
                                <?php
                                $sl = 1;
                                    foreach ($students as $student){
                                ?>
                                    <tr>
                                        <td><?= $sl++ ?></td>
                                        <td><?= $student['name']?></td>
                                        <td><?= $student['department']?></td>
                                        <td><?= $student['address']?></td>
                                        <td class="center">
                                            <a href="view/student/view.php?id=<?php echo $student['id']?>">view</a> |
                                            <a href="view/student/edit.php?id=<?php echo $student['id']?>">Edit</a> |
                                            <a class="text-danger" href="view/student/delete.php?id=<?php echo $student['id']?>">Delete</a>
                                        </td>
                                    </tr>
                                <?php }?>
                                </tbody>
                            </table>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- /#page-wrapper -->
<?php
include_once '../includes/footer.php';
?>