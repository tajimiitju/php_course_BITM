<?php
include_once '../../../vendor/autoload.php';
$admin = new App\Admin\Admin();
$a=$admin->tmp_delete($_GET['id']);
?>