<?php

include_once '../../vendor/autoload.php';
$student = new App\Student\Student();
$student = $student->delete($_GET['id']);

