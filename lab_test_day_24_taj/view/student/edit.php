<?php
include_once '../include/header.php';
include_once '../../vendor/autoload.php';
$student = new App\Student\Student();
$student = $student->view($_GET['id']);

?>


<?php
include_once '../include/header.php';

?>

    <div id="page-wrapper" style="min-height: 349px;">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Add Product</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        Basic Product Add Form
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-8 col-md-offset-2">
                                <form role="form" action="view/student/update.php" method="POST">
                                    <div class="form-group">
                                        <label>Product Title</label>
                                        <input name="Product_title" value="<?php echo $student['Product_title']?>" class="form-control">
                                        <input type="hidden" name="id" value="<?php echo $student['id']?>" class="form-control">
                                    </div>
                                    <label>Product price</label>
                                    <input name="Product_price" value="<?php echo $student['Product_price']?>" class="form-control">
                                    <div class="form-group">
                                        <label>Category</label>
                                        <select name="Category" class="form-control">
                                            <option>Select One</option>
                                            <option>Male</option>
                                            <option>Female</option>
                                            <option>Baby</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Description</label>
                                        <textarea name="Description" value="<?php echo $student['Description']?>" class="form-control" rows="3"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label>Upload Image</label>
                                        <input name="image"  value="<?php echo $student['image']?>" type="file"/>
                                    </div>
                                    <button type="reset" class="btn btn-danger">Reset</button>
                                    <button type="update" class="btn btn-primary">Update</button>
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
include_once '../include/footer.php';
?>


