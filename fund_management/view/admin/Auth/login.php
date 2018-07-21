<?php
if(!isset($_SESSION)){
    session_start();
}
include_once '../../../vendor/autoload.php';
if(isset($_POST['submit'])){
    $auth = new \App\Auth\Auth();
    $auth->set($_POST)->login();

}

?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<!-- Meta, title, CSS, favicons, etc. -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Admin Login</title>
		<!-- Base File Like as include -->
		<base href="http://localhost/fund_management/">
		<!-- Bootstrap -->
		<link href="assets/admin/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
		<!-- Font Awesome -->
		<link href="assets/admin/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
		<!-- NProgress -->
		<link href="assets/admin/vendors/nprogress/nprogress.css" rel="stylesheet">
		<!-- Animate.css -->
		<link href="assets/admin/vendors/animate.css/animate.min.css" rel="stylesheet">
		<!-- Custom Theme Style -->
		<link href="assets/admin/build/css/custom.min.css" rel="stylesheet">
	</head>
	<div class="right_col section-padding" role="main">
		<div class="event-area">
			
			
			<body class="login">				
				<div class="login_wrapper">
					<div class="login_wrapper">
						<div class="animate form login_form">
							<section class="login_content">
								<form action="" method="post">
									<h1>Admin Login</h1>
									<div>
										<input name="email" type="text" class="form-control" placeholder="Username" required="" />
									</div>
									<div>
										<input name="password" type="password" class="form-control" placeholder="Password" required="" />
									</div>
									<div>
										<button type="submit" name="submit" class="btn btn-default submit">Log in</button>
										<a class="reset_pass" href="#">Lost your password?</a>
									</div>
									<div class="clearfix"></div>
									<div class="separator">	
										
									</div>
									
									<div>
										<h1><i class="fa fa-paw"></i> Team HackSlash!</h1>
										<p>Copywrite &copy 2017
											<a href="https://colorlib.com"></a>
										</div>
										
									</form>
								</section>
							</div>
						</div>
					</div>
					<!-- jQuery -->
					<script src="assets/admin/vendors/jquery/dist/jquery.min.js"></script>
					<!-- Bootstrap -->
					<script src="assets/admin/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
					<!-- Custom Theme Scripts -->
					<script src="assets/admin/build/js/custom.min.js"></script>
					<!-- Custom Scripts -->
					<script type="text/javascript" src="../../../assets/admin/js/main.js"></script>
				</body>
			</html>