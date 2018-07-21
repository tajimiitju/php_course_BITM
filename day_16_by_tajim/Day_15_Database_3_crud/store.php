<?php
$db = new PDO('mysql:host=localhost;dbname=php-63;charset=utf8mb4', 'root', '');
$_POST['hobby'] = implode(', ',$_POST['hobby']);
$_POST['image'] = $_FILES['image']['name'];
$_POST['dob'] = $_POST['day'].' - '.$_POST['month'].' - '.$_POST['year'];


$query = "INSERT INTO `php-63`.`user_info` (`id`, `name`, `email`, `password`, `address`, `mobile`, `gender`, `hobby`, `image_name`, `dob`) VALUES (NULL, '".$_POST['name']."', '".$_POST['email']."', '".$_POST['password']."', '".$_POST['address']."', '".$_POST['mobile']."', '".$_POST['gender']."', '".$_POST['hobby']."', '".$_POST['image']."', '".$_POST['dob']."');";

$result = $db->exec($query);

if($result){
    echo 'Data Successfully Inserted !!';
}

