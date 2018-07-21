<?php

$var = (int) '123';

var_dump($var);

$arr  = array(12,25);
//echo $arr;

class A {
    public $x;
}
$ar = new A;

class B {
    public $x;
}
$br = new B;

class string{

}

function sum($x){
    //echo array_sum($arr);
    echo 'Class A objects';
}
$ar = '';
if(is_string($ar)){
   sum($ar);
}
