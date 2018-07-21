<?php
include_once '../../vendor/autoload.php';
//use App\Connection;
$user = new App\User\User();
//var_dump($_POST);
//$user->set($_POST)->store_donation();
//die();
$db = new PDO('mysql:host=localhost;dbname=fund_management;charset=utf8mb4', 'root', '');
$stmt = "INSERT INTO `donation`(`id`, `event_id`, `donor_name`, `donor_mail`, `address`, `phon`, `amount`, `gateway`, `t_id`, `agent_no`, `event_name`)
VALUES (NULL, '".$_POST['event_id']."',
'".$_POST['donor_name']."',
'".$_POST['donor_mail']."',
'".$_POST['address']."',
'".$_POST['phon']."',
'".$_POST['amount']."',
'".$_POST['gateway']."',
'".$_POST['t_id']."',
'".$_POST['agent_no']."',
'".$_POST['event_name']."'
)";
$result = $db->exec($stmt);
if ($result) {
$_SESSION['insert'] = 'Data successfully Inserted !!';
header('location: ../../index.php');
}