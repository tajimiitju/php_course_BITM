<?php
include_once 'view/font/include/header.php';
include_once 'vendor/autoload.php';
/*$bazar = new App\admin\bazar\Bazar;
$data = $bazar->index();*/
$admin = new App\Admin\Admin();
$admins = $admin->index();
?>

    <!------------------------SLIDER-AREA START--------------------->
    <div class="slider-area">
        <div class="slider">
            <div class="single-slider" style="background:url(assets/uploads/flood.jpg) no-repeat scroll center top / cover;">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-sm-8">
                            <div class="slider-content">
                                <h3>Be a human</h3>
                                <h2>Help People</h2>
                                <p>You Can Create Event and Make fund in a smart way for various reasons.</p>
                                <a href="view/font/Top-Issues.php" class="slide-btn">Donate Now</a>
                                <a href="view/font/contact.php" class="slide-btn">Contact us</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- .single-slider -->
            <div class="single-slider" style="background:url(assets/uploads/flood1.jpg) no-repeat scroll center top / cover;">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-sm-8">
                            <div class="slider-content">
                                <h3>Be a human</h3>
                                <h2>Help People</h2>
                                <p>You Can Create Event and Make fund in a smart way for various reasons.</p>
                                <a href="view/font/Top-Issues.php" class="slide-btn">Donate Now</a>
                                <a href="view/font/contact.php" class="slide-btn">Contact us</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- .single-slider -->
            <div class="single-slider" style="background:url(assets/uploads/tran.jpg) no-repeat scroll center top / cover;">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-sm-8">
                            <div class="slider-content">
                                <h3>Be a human</h3>
                                <h2>Help People</h2>
                                <p>You Can Create Event and Make fund in a smart way for various reasons.</p>
                                <a href="view/font/Top-Issues.php" class="slide-btn">Donate Now</a>
                                <a href="view/font/contact.php" class="slide-btn">Contact us</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- .single-slider -->
        </div>
    </div>
    <!------------------------SLIDER-AREA END--------------------->

    <!------------------------COURSE-AREA START--------------------->
    <div class="course-area section-padding">



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
                    <div class="col-md-4 col-sm-6">
                        <div class="single-news">
                            <div class="news-img">
                                <img class="img-responsive" width="200" src="assets/uploads/<?= $admin['image']?>" alt="image loading...">
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


    </div>
    <!------------------------COURSE-AREA END--------------------->

    <!------------------------COUNTER-AREA START--------------------->
    <div class="counter-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6 col-xs-6">
                    <div class="single-counter">
                        <div class="counter-img">
                            <img src="img/counter1.png" alt="*">
                        </div>
                        <div class="counter-detail">
                            <h4 class="counter">500</h4>
                            <p>Help People</p>
                        </div>
                    </div>
                    <!-- .single-counter -->
                </div>
                <div class="col-md-3 col-sm-6 col-xs-6">
                    <div class="single-counter">
                        <div class="counter-img">
                            <img src="img/counter2.png" alt="*">
                        </div>
                        <div class="counter-detail">
                            <h4 class="counter">140000</h4>
                            <p>Tergate Money</p>
                        </div>
                    </div>
                    <!-- .single-counter -->
                </div>
                <div class="col-md-3 col-sm-6 col-xs-6">
                    <div class="single-counter">
                        <div class="counter-img">
                            <img src="img/counter3.png" alt="">
                        </div>
                        <div class="counter-detail">
                            <h4 class="counter">20000</h4>
                            <p>Neded Money</p>
                        </div>
                    </div>
                    <!-- .single-counter -->
                </div>
                <div class="col-md-3 col-sm-6 col-xs-6">
                    <div class="single-counter">
                        <div class="counter-img">
                            <img src="img/counter4.png" alt="*">
                        </div>
                        <div class="counter-detail">
                            <h4 class="counter">4 Days</h4>
                            <p>Day Remaining</p>
                        </div>
                    </div>
                    <!-- .single-counter -->
                </div>
            </div>
        </div>
    </div>
    <!------------------------COUNTER-AREA END--------------------->

    <!------------------------TRAINER-AREA START--------------------->

    <!------------------------TRAINER-AREA END--------------------->

   

    <!------------------------QUOTE-AREA START--------------------->
    <div class="quote-area">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-sm-8">
                    <h2>Start your journey with us!</h2>
                </div>
                <div class="col-md-4 col-sm-4">
                    <a href="contact.html" class="quote-btn">Contact us</a>
                </div>
            </div>
        </div>
    </div>
    <!------------------------QUOTE-AREA END--------------------->

    <!------------------------NEWS-AREA START--------------------->

    <!------------------------NEWS-AREA END--------------------->


<?php
include_once 'view/font/include/footer.php';
?>