<?php

class A {
    public function __construct(){
        echo 'From set A';
    }
}
class B extends A{
    public function __construct(){
        echo 'From set B';
       parent::__construct();
    }
}

new B;















