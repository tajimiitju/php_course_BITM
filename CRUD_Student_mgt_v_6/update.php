
<html>
<head>
	<title>update info</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/bootstrap-theme.css">
	<link rel="stylesheet" href="css/style.css">

    <style>
        label{
            display: block;
            border-bottom: 2px solid green;
            padding: 7px 5px;
        }
    </style>
</head>
<body>
<hr>
<h1 style="text-align: center;">Sudent Management System With Database CRUD and PHP</h1>
<hr>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">tajim iitju</a>
    </div>
    <ul class="nav navbar-nav">
      <li><a href="#">Home</a></li>
      <li><a href="course.php">Add Course</a></li>
      <li><a href="form.php">Add Student</a></li>
      <li><a href="all_data.php">All Students</a></li>
      <li><a href="all_course.php">All Courses</a></li>
      <li><a href="assign.php">Assign Student and Courses</a></li>
    </ul>
    <form class="navbar-form navbar-left">
      <div class="input-group">
        <input type="text" class="form-control" placeholder="Search">
        <div class="input-group-btn">
          <button class="btn btn-default" type="submit">
            <i class="glyphicon glyphicon-search"></i>
          </button>
        </div>
      </div>
    </form>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    </ul>
  </div>
</nav>

<?php
$db = new PDO('mysql:host=localhost;dbname=php-63;charset=utf8mb4', 'root', '');
$_POST['hobby'] = implode(', ',$_POST['hobby']);
$_POST['image_name'] = $_FILES['image']['name'];
$_POST['dob'] = $_POST['day'].' - '.$_POST['month'].' - '.$_POST['year'];




$query = "UPDATE `php-63`.`user_info` SET `name` = '".$_POST['name']."', `email` = '".$_POST['email']."', `password` = '".$_POST['password']."', `address` = '".$_POST['address']."', `mobile` = '".$_POST['mobile']."', `gender` = '".$_POST['gender']."', `hobby` = '".$_POST['hobby']."', `image_name` = '".$_POST['image_name']."', `dob` = '".$_POST['dob']."' WHERE `user_info`.`id` = ".$_POST['id'];

$result = $db->exec($query);

if($result){

    header("location:view.php?id=".$_POST['id']);
}
?>
</body>
</html>


























