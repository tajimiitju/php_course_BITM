<?php
/*
 * Created by PhpStorm.
 * User: Web App Develop - PH
 * Date: 9/9/2017
 * Time: 1:33 PM
 */

class Computer {
	public $mouse = 'red';

}

class Mouse{
	public $color = 'black';
	public $price = 300;	
	public function show()
	{
		echo "This is show function";
	}
}

$object = new Mouse;

echo $object -> color;
echo "<br>";
echo $object -> color = 'green';

echo "<br>";
$object->show();

echo "<br>";
echo $object -> price."<br>";
echo $object -> price = 500;

?>