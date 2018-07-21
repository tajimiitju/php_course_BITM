<?php
$db = new PDO('mysql:host=localhost;dbname=php66', 'root', '');

$_POST['hobby'] = implode(', ',$_POST['hobby']);
$_POST['img_name'] = $_FILES['image']['name'];
$_POST['dob'] = $_POST['day'].'-'.$_POST['month'].'-'.$_POST['year'];

$query = "INSERT INTO `php66`.`user_info` (`name`, `email`, `password`, `address`, `mobile`, `gender`, `hobby`, `image_name`, `dob`) VALUES ('".$_POST['name']."', '".$_POST['email']."', '".$_POST['password']."', '".$_POST['address']."', '".$_POST['mobile']."', '".$_POST['gender']."', '".$_POST['hobby']."', '".$_POST['img_name']."', '".$_POST['dob']."');";

$result = $db->exec($query);

if($result){
    echo 'Data successfully inserted !!!';
}
















