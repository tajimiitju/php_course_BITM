<?php
$db = new PDO('mysql:host=localhost;dbname=php66;charset=utf8mb4', 'root', '');

$query = "DELETE FROM `user_info` WHERE id = ".$_GET['id'];
$stmt = $db->exec($query);

if($stmt == true){
    header('location: all_data.php');
}
