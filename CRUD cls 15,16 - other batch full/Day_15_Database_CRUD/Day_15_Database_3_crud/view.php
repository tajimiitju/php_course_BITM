
<?php

$db = new PDO('mysql:host=localhost;dbname=php66;charset=utf8mb4', 'root', '');

$query = "SELECT * FROM `user_info` WHERE id = ".$_GET['id'];
$stmt = $db->query($query);
$results = $stmt->fetchAll(PDO::FETCH_ASSOC);
foreach ($results as $user){}
?>








<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Registration form</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/bootstrap-theme.css">
	<link rel="stylesheet" href="css/style.css">

    <style>
        label{
            display: block;
            border-bottom: 2px solid #ccc;
            padding: 7px 5px;

        }


    </style>
</head>

<body>



	<div class="area">
		<h3>Your Information Show</h3>
		<hr>
		<label for="">Your Name: <i><?php echo $user['name']?></i></label>
		
		<label for="">Your Email:<i><?php echo $user['email']?></i></label>

		<label for="">Your Password:<i><?php echo $user['password']?></i></label>
		
		<label for="">Your Address:<i><?php echo $user['address']?></i></label>

		<label for="">Your Mobile:<i><?php echo $user['mobile']?></i></label>

		<label for="">Your Gender:<i><?php echo $user['gender']?></i></label>

		<label for="">Your Hobbies:<i><?php echo $user['hobby']?></i></label>

		<label for="">Your Profile Pic: 
			<img class="img-responsive" src="images/<?php echo $user['image_name']?>">
		</label>

		<label for="">Your DOB:<i><?php echo $user['dob']?></i></label>
	</div>






</body>
</html>