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
                                <form role="form" action="view/student/store.php" method="POST">
                                    <div class="form-group">
                                        <label>Product Title</label>
                                        <input name="Product_title" class="form-control">
                                    </div>
                                    <label>Product price</label>
                                    <input name="Product_price" class="form-control">
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
                                        <textarea  name="Description" class="form-control" rows="3"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label>Upload Image</label>
                                        <input name="image" type="file"/>
                                    </div>
                                    <button type="reset" class="btn btn-danger">Reset</button>
                                    <button type="submit" class="btn btn-primary">Submit</button>
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