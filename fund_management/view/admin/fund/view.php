<?php
session_start();
include_once '../include/header.php';
include_once '../../../vendor/autoload.php';
$admin = new App\Admin\Admin();
$admin = $admin->view($_GET['id']);
?>
<div id="page-wrapper" style="min-height: 349px;">
    
    <div class="row">
        <div class="col-lg-6 col-lg-offset-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    The Selected Event Details
                </div>
                <div class="panel-body">
                    <img width="580" src="assets/uploads/<?= $admin['image']?>" alt="image loading...">
                    <h4>Event Name: <?= $admin['name']?></h4>
                    <div class="ratings">
                        <span class="glyphicon glyphicon-star"></span>
                        <span class="glyphicon glyphicon-star"></span>
                        <span class="glyphicon glyphicon-star"></span>
                        <span class="glyphicon glyphicon-star"></span>
                        <span class="glyphicon glyphicon-star-empty"></span>
                    </div><hr>
                    Details:
                    <p>
                        Starting Date: <?= $admin['start_date']?><br>
                        Ending Date: <?= $admin['end_date']?><br>
                        Area: <?= $admin['location']?><br>
                        Paying Methods: <?= $admin['pay_method']?>
                    </p>
                    <hr class="line">
                    <div class="row">
                        <div class="col-md-12">
                            <p class="price">Target: ৳ <?= $admin['target']?> </p>
                        </div>
                    </div>
                </div>
                <!-- /.panel-body -->
                <div class="panel-footer ">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-3">
                            <div class="event-footer">
                                <a data-target=".bs-example-modal-lg" data-toggle="modal" data-id="<?php echo $admin['unique_id']?>" class="btn btn-danger delete" href="javaScript:void(0)" >Delete</a>
                                <a href="view/admin/fund/edit.php?id=<?php echo $admin['unique_id']?>" class="btn btn-primary">Edit</a>
                                <a href="view/admin/fund/index.php" class="btn btn-default">Back</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.panel -->
        </div>
        <!-- /.col-lg-12 -->
    </div>
</div>
<!-- modals -->
<div aria-hidden="true" role="dialog" tabindex="-1" class="modal fade bs-example-modal-lg">
     <form action="view/admin/fund/tmp_delete.php" method="get">
        <input type="hidden" name="id" id="delete" />
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button data-dismiss="modal" class="close" type="button"><span aria-hidden="true">×</span>
                </button>
                <h4 id="myModalLabel" class="modal-title">Are you sure delete your Event?</h4>
            </div>
            
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
                <input type="submit" class="btn btn-danger" value="Yes" />
            </div>
        </div>
    </div>
</form>
</div>


<?php
include_once '../include/footer.php';
?>