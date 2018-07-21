<?php
session_start();
include_once '../include/header.php';
include_once '../../../vendor/autoload.php';
/*$bazar = new App\admin\bazar\Bazar;
$data = $bazar->index();*/
$user = new App\User\User();
$users = $user->index();
?>

    <!-- page content -->
    <div class="right_col section-padding" role="main">
        <div class="event-area">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Requested Events</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <div style="position: fixed; z-index: 99999; right: 50px; top:50px">

            </div>
            <!-- /.row -->
            <div class="row">
                <?php
                $sl = 1;
                foreach ($users as $user){
                    ?>

                    <div class="col-md-4">
                        <div class="layer">
                            <img height="200" src="assets/uploads/<?= $user['image']?>" alt="image loading...">
                            <h4>Event Name: <?= $user['name']?></h4>
                            <div class="ratings">
                                <span class="glyphicon glyphicon-star"></span>
                                <span class="glyphicon glyphicon-star"></span>
                                <span class="glyphicon glyphicon-star"></span>
                                <span class="glyphicon glyphicon-star"></span>
                                <span class="glyphicon glyphicon-star-empty"></span>
                            </div><hr>
                            Details:
                            <p>
                                Starting Date: <?= $user['start_date']?><br>
                                Ending Date: <?= $user['end_date']?><br>
                                Area: <?= $user['location']?><br>
                                Paying Methods: <?= $user['pay_method']?>
                            </p>
                            <hr class="line">
                            <div class="row">
                                <div class="col-md-12">
                                    <p class="price">Target: ৳ <?= $user['target']?> </p>
                                </div>
                            </div>
                            <div class="event-detail">

                                <form role="form" action="view/admin/fund/accept.php" enctype="multipart/form-data" method="POST">

                                    <a class="btn btn-danger" href="view/font/delete.php?id=<?php echo $user['id']?>">Delete</a>

                                    <input type="hidden" name="name" value="<?php echo $user['name']?>"/>
                                    <input type="hidden" name="id" value="<?php echo $user['id']?>">
                                    <input type="hidden" name="image" value="<?php echo $user['image']?>"/>
                                    <input type="hidden" name="start_date" value="<?php echo $user['start_date']?>">
                                    <input type="hidden" name="end_date" value="<?php echo $user['end_date']?>"/>
                                    <input type="hidden" name="location" value="<?php echo $user['location']?>">
                                    <input type="hidden" name="pay_method" value="<?php echo $user['pay_method']?>"/>
                                    <input type="hidden" name="target" value="<?php echo $user['target']?>">
                                    <input type="submit" name="submit" value="Accept" class="btn btn-success">
                                </form>

                            </div>
                        </div>
                    </div>

                <?php }?>




                <!-- END PRODUCTS -->
            </div>
            <!-- /.row -->
        </div>
    </div>



<?php
include_once '../include/footer.php';
?>