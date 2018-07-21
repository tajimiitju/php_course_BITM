<?php
include_once '../../../vendor/autoload.php';
$student =new \App\admin\student\Student();

$data = $student->set($_POST)->store();
//$student-> set($_POST);
//var_dump($data);
//$student->store();


//var_dump($_POST);