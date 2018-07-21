<?php


$db = new PDO('mysql:host=localhost;dbname=php-63;charset=utf8mb4', 'root', '');
$query = "DELETE FROM `php-63`.`day_16_taj` WHERE `day_16_taj`.`id` = ".$_GET['id'];
$stmt = $db->exec($query);

if($stmt){
    header('location: index.php');
}

