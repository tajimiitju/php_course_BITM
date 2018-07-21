<?php
//session_start();
include_once '../include/header.php';

//include_once '../../../vendor/autoload.php';


?>


<?php
include_once '../include/header.php';

?>

<!-- page content -->
<div class="right_col" role="main">
    <!-- top tiles -->
    <div class="row tile_count">
        <div class="right_col" role="main">
            <!-- top tiles -->
            <div class="row tile_count">
                <div id="page-wrapper">
                    <div class="row">
                        <div class="col-lg-8">
                            <h1 class="page-header">Assign Transection ID and Money</h1>
                        </div>
                        <!-- /.col-lg-12 -->
                    </div>
                    <!-- /.row -->
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="panel panel-primary">
                                <div class="panel-heading">
                                    Insert the transection ID/Acc no from where you receive money and the amount carefully
                                </div>
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-md-8 col-md-offset-2">

                                            <form action="view/admin/fund/assign_store.php" method="POST" enctype="multipart/form-data">
                                                <div class="form-group">
                                                    <label for="">Enter Transection ID</label>
                                                    <input type="text" name="t_id" class="form-control" placeholder="Enter Transection ID" required="" />
                                                </div>
                                                <div class="form-group">
                                                    <label for="">Enter Agent/Acc Number</label>
                                                    <input type="text" name="agent_no" class="form-control" placeholder="Enter Agent/Acc Number" required="" />
                                                </div>
                                                <div class="form-group">
                                                    <label for="">Enter Received Amount of Money</label>
                                                    <input type="text" name="received_money" class="form-control" placeholder="Enter Received Money" required="" />
                                                </div>
                                                <div class="form-group">
                                                    <input type="submit" name="submit" value="Assign" class="btn btn-success">
                                                    <input type="reset" name="submit" value="Reset" class="btn btn-info">
                                                </div>
                                                <div class="clearfix"></div>

                                                <div class="separator">

                                                    <div>

                                                        <p>If transaction ID found in donations then the donated Event will receive money
                                                            and the donor will get notification.
                                                            <a href="https://colorlib.com"></a>
                                                    </div>
                                                </div>
                                                <hr>

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
            </div>
            <!-- /top tiles -->
        </div>
    </div>
    <!-- /top tiles -->
</div>


<?php
include_once '../include/footer.php';
?>






<?php
include_once '../include/footer.php';
?>
