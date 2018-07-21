
<?php


abstract class Electronics{
    public $price;
    protected $brand;
    public function set(){

    }
   abstract public function carry();
   abstract public function packaging();

}
class Monitor extends Electronics{
    public function packaging()
    {
        // TODO: Implement packaging() method.
    }
    public function carry()
    {
        // TODO: Implement carry() method.
    }


}



class HP extends Monitor{

}

//$obj = new Electronics();
$monitor = new Monitor();
$monitor->packaging();









