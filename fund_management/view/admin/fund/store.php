<?php
include_once '../../../vendor/autoload.php';
$admin = new App\Admin\Admin();
$_POST['image'] = $admin->upload();
$_POST['pay_method'] = implode(', ',$_POST['pay_method']);
$_POST['start_date'] = $_POST['sday'].' - '.$_POST['smonth'].' - '.$_POST['syear'];
$_POST['end_date'] = $_POST['eday'].' - '.$_POST['emonth'].' - '.$_POST['eyear'];
$admin->set($_POST)->store();
