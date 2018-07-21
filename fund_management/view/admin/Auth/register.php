<?php
include_once '../include/header.php';
include_once '../../../vendor/autoload.php';

if (isset($_POST['submit'])){
$Auth=new \App\Auth\Auth();
 $Auth->set($_POST)->store();
 }

?>

<div class="right_col section-padding" role="main">
    <div class="event-area">
        <div style="position: fixed; z-index: 99999; right: 50px; top:50px">
        </div>
        <!-- /.row -->
        <div class="row">
            <div class="login">
                
                <div class="login_wrapper">
                    <div id="register">
                        <section class="login_content">
                            <form action="" method="post">
                                <h1>Create Admin Account</h1>
                                <div>
                                    <input type="text" name="user" class="form-control" placeholder="Enter your Username" required="" />
                                </div>
                                <div>
                                    <input type="email" name="email" class="form-control" placeholder="Enter your Email" required="" />
                                </div>
                                <div>
                                    <input type="text" name="phone" class="form-control" placeholder="Enter your phone NUmber" required="" />
                                </div>
                                <div>
                                    <input type="password" name="password" class="form-control" placeholder="Enter your Password" required="" />
                                </div>
                                <div>
                                    <button type="submit" name="submit" class="btn btn-lg btn-success btn-block">Register</button>
                                </div>
                                <div class="clearfix"></div>
                                <div class="separator">
                                    <p class="change_link">Already a member ?
                                        <a href="view/admin/auth/login.php" class="to_register"> Log in </a>
                                    </p>
                                    <div class="clearfix"></div>
                                    <br />
                                    <div>
                                        <h1><i class="fa fa-paw"></i> Team HackSlash!</h1>
                                        <p>Copywrite &copy 2017
                                            <a href="https://colorlib.com"></a></p>
                                        </div>
                                    </div>
                                </form>
                            </section>
                        </div>
                    </div>
                </div></div>
                
                <?php
                include_once '../include/footer.php';
                ?>