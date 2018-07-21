<?php
session_start();
include_once '../include/header.php';
include_once '../../../vendor/autoload.php';
$admin = new App\Admin\Admin();
$admins = $admin->index();
?>

    <!-- page content -->
<div class="right_col section-padding" role="main">
    <div class="event-area">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">All Events</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <div style="position: fixed; z-index: 99999; right: 50px; top:50px">
        </div>
        <!-- /.row -->
        <div class="row">
            <?php
            $sl = 1;
            foreach ($admins as $admin){
            ?>
            <div class="col-md-4">
                
                <div class="panel panel-default">
                    <div class="panel-heading">
                        The Selected Event Details
                    </div>
                    <div class="panel-body">
                        <img width="250" src="assets/uploads/<?= $admin['image']?>" alt="image loading...">
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
                            <div class="col-md-8 col-md-offset-4">
                                <div class="event-footer">
                                    <a class="btn btn-info right" href="view/admin/fund/view.php?id=<?php echo $admin['unique_id']?>"> Details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php }?>
        </div>
        <!-- /.row -->
    </div>
</div>



    <?php
include_once '../include/footer.php';
?>