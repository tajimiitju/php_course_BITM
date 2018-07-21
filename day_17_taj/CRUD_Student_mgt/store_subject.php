<?php
$db = new PDO('mysql:host=localhost;dbname=php-63;charset=utf8mb4', 'root', '');



//$query = "INSERT INTO `php-63`.`user_info` (`id`, `name`, `email`, `password`, `address`, `mobile`, `gender`, `hobby`, `image_name`, `dob`) VALUES (NULL, '".$_POST['name']."', '".$_POST['email']."', '".$_POST['password']."', '".$_POST['address']."', '".$_POST['mobile']."', '".$_POST['gender']."', '".$_POST['hobby']."', '".$_POST['image']."', '".$_POST['dob']."');";

$query = "INSERT INTO `course` (`id`, `c_title`, `c_code`, `c_duration`, `c_credit`, `c_teacher`) VALUES ('', '".$_POST['c_title']."', '".$_POST['c_code']."', '".$_POST['c_duration']."', '".$_POST['c_credit']."', '".$_POST['c_teacher']."');";

$result = $db->exec($query);

if($result){
    echo 'Data Successfully Inserted !!';
}

