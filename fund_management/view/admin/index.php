<?php
include_once 'include/header.php';
//include_once 'include/deshbord.php';
//include_once '../../vendor/autoload.php';
//include_once 'Auth/login.php';
//include_once 'include/footer.php';


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">


    <title>loging page</title>

    <!-- Bootstrap core CSS -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <link href="../../assets/font/css/font-awesome.css" rel="stylesheet">
    <link href="../../assets/font/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../../assets/font/css/owl.carousel.css">
    <link rel="stylesheet" href="../../assets/font/css/animate.css">
    <link rel="stylesheet" href="../../assets/font/css/venobox.css">
    <link rel="stylesheet" href="../../assets/font/css/slicknav.css">
    <link href="../../assets/font/style.css" rel="stylesheet">
    <link href="../../assets/font/css/responsive.css" rel="stylesheet">


    <!--[if lt IE 9]>
    <script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
<div class="container">

<br><br><br><br><br><br><br>
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
        
        
            <div class="login-panel panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Admin Site of "Fund Management System"</h3>
                   <p>
                        <?php
                       if(isset($_SESSION['insert'])){
                            echo "<div class='alert alert-success'>".$_SESSION['insert']."</div>";
                            session_unset();
                        }
                        ?>
                    </p>
                </div>
                <div class="panel-body">
                    <form role="form" action="" method="post">
                        <fieldset>
                            <div class="form-group">
                                <p>You have to log in as an Admin</p>
                            </div>
                            <div class="form-group">
                                
                            </div>
                           
                            <button type="submit" name="submit" class="btn btn-lg btn-success btn-block">
                            <a href="Auth/login.php">Login</a>
                            </button>
                            
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


</body>
</html>
