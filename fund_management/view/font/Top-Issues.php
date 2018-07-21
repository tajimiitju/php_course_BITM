<?php
include_once 'include/header.php';
include_once '../../vendor/autoload.php';
/*$bazar = new App\admin\bazar\Bazar;
$data = $bazar->index();*/
$admin = new App\Admin\Admin();
$admins = $admin->index();
?>
<!-- Top isues start here-->
<div class="container">
    <div class="all-page-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="all-page-text">
                        <h1>How to Donate</h1>
                        <ul>
                            <li><a href="index.php">home <span><i class="fa fa-angle-right"></i></span></a></li>
                            <li>Donate Now!</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="news-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title">
                        <hr>
                        <h2>Running Events</h2>
                        <hr>
                    </div>
                </div>
            </div>
            <div class="row">
                <?php
                $sl = 1;
                foreach ($admins as $admin){
                ?>
                <div class="col-sm-6">
                    <div class="single-news">
                        <div class="news-img">
                            <img class="img-responsive"  src="assets/uploads/<?= $admin['image']?>" alt="image loading...">
                        </div>
                        <div class="news-detail">
                            <h4>Event Name: <?= $admin['name']?></h4>
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
                            <a href="view/font/DonateForm.php?id=<?php echo $admin['unique_id']?>" class="btn btn-danger">Donate Now!</a>
                        </div>
                    </div>
                    <!-- .single-news -->
                </div>
                <?php }?>
            </div>
        </div>
    </div>
    <hr>
    <hr>
    <nav aria-label="Page navigation example" >
        <ul class="pagination">
            <li class="page-item"><a class="page-link" href="#">Previous</a></li>
            <li class="page-item"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item"><a class="page-link" href="#">Next</a></li>
        </ul>
    </nav>
</div>
<?php
include_once 'include/footer.php';
?>