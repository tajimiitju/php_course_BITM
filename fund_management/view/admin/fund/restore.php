<?php
include_once '../../../vendor/autoload.php';
$admin = new App\Admin\Admin();
$admin->restore($_GET['id']);
?>