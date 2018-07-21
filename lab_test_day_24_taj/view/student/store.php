
<?php
include_once '../../vendor/autoload.php';
$student = new App\Student\Student();
$student->set($_POST);
$oo=$student->store();
var_dump($oo);

