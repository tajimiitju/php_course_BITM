
<?php
include_once '../../vendor/autoload.php';

$user = new App\User\User();
$user->image_delete($_GET['id']);
$user = $user->delete($_GET['id']);


?>