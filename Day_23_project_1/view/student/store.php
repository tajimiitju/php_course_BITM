<?php
include_once '../../vendor/autoload.php';
$student = new App\Student\Student();
$student->set($_POST);
$student->store();
