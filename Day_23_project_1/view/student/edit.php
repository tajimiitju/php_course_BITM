<?php
include_once '../includes/header.php';
include_once '../../vendor/autoload.php';
$student = new App\Student\Student();
$student = $student->view($_GET['id']);

?>

    <div id="page-wrapper" style="min-height: 349px;">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Update</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Basic Form Elements
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-8 col-md-offset-2">
                                <form role="form" action="view/student/update.php" method="POST">
                                    <div class="form-group">
                                        <label>Student Name</label>
                                        <input name="name" value="<?php echo $student['name']?>" class="form-control">
                                        <input type="hidden" name="id" value="<?php echo $student['id']?>" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Department</label>
                                        <select name="department" id="" class="form-control">
                                            <option>Select One</option>
                                            <option <?php echo ($student['department']=='CSE')?'selected':'' ?> value="CSE">CSE</option>
                                            <option <?php echo ($student['department']=='BBA')?'selected':'' ?> value="BBA">BBA</option>
                                            <option <?php echo ($student['department']=='EEE')?'selected':'' ?> value="EEE">EEE</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Address</label>
                                        <textarea name="address" class="form-control" rows="3"><?php echo $student['address']?></textarea>
                                    </div>
                                    <button type="reset" class="btn btn-default">Reset Button</button>
                                    <button type="submit" class="btn btn-warning">Update</button>
                                </form>
                            </div>
                        </div>
                        <!-- /.row (nested) -->
                    </div>
                    <!-- /.panel-body -->
                </div>
                <!-- /.panel -->
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
    </div>

<?php
include_once '../includes/footer.php';
?>