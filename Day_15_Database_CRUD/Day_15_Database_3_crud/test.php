<?php

class student{

   public $name  = 'Al Amin';

   public function __construct($a){
       echo 'From Sum function'.$a;
   }


   public function sum($b){
       echo $b;
   }

}
$object = new student(5);

$object->sum(10);

echo $object->name;

















