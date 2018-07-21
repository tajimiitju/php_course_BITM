
<?php
include_once '../../../vendor/autoload.php';
//use App\Connection;
$admin = new App\Admin\Admin();
$user = new App\User\User();


var_dump($_POST);
//var_dump($_GET);
//die();
$admin->set($_POST)->store();
//die();
$user = new App\User\User();
$user->image_delete($_POST['id']);
$user = $user->delete($_POST['id']);

    header('location: requests.php');


?>