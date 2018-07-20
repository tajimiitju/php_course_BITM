<?php


$db = new PDO('mysql:host=localhost;dbname=php-63;charset=utf8mb4', 'root', '');
//$query = "DELETE FROM `php-63`.`course` WHERE `course`.`id` = ".$_GET['id'];
//$stmt = $db->exec($query);
$_POST['subject'] = implode(', ',$_POST['subject']);
	
	echo $_POST['subject'];
	echo "<br>";
    echo $_POST['st_name'];
/*
if($stmt){
    header('location: assign.php');  
}
*/
