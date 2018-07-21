<?php
//session_start();
include_once '../includes/header.php';
include_once '../../vendor/autoload.php';
$student = new App\Student\Student();
$student = $student->view($_GET['id']);

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
                if(isset($_SESSION['msg'])){
                    echo "<div class='alert alert-success'>".$_SESSION['msg']."</div>";
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
                            <dl>
                                <dt>Student Name</dt>
                                <dd><?php echo $student['name']?></dd>
                                <dt>Department</dt>
                                <dd><?php echo $student['department']?></dd>
                                <dt>Address</dt>
                                <dd><?php echo $student['address']?></dd>
                            </dl>
                        </div>
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