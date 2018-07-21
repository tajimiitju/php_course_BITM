<?php 
// abstract class

/**
* 
*/
abstract class Electronics
{
	public $price;
	protected $brand;
	public function set()
	{
		# code...
	}
	public function carry()
	{
		# code...
	}
	abstract public function pack();
	# abstract lekha thakle sei function ti obossoi child k use korte hobe, er body thakbena
	
}

/**
* 
*/
class Monitor extends Electronics
{
	public function pack()
	{

	}
}

//abstract class er kono object banano jay na, sudhu er property use kora jay
//$obj = new Electronics();
//$monitor new Monitor();
//$monitor -> price;

//...................................................
// Interface 
interface BazarList
{
	// kono property thakbena. method thakbe
	public function buy();
	public function haveMoney();
}
interface cng
{
	// kono property thakbena. method thakbe
	public function change();
}
interface cng2 extends BazarList
{
	// kono property thakbena. method thakbe
	// evabe extend korle r koma die ditio ta lagbena
	public function change2();
}

/**
* 
*/
class Bazar implements BazarList
{
	public function buy()
	{
		
	}
	public function haveMoney()
	{
		
	}
}

class Bazar2 implements BazarList,cng
{
	// koma die dutar jinis use kora jay
	public function buy()
	{
		
	}
	public function haveMoney()
	{
		
	}
	public function change()
	{
		
	}
}

/**
* 
*/
class A{
	public function set()
	{
		echo "From A";
	}
}
class B extends A
{
	
	function __construct()
	{
		echo "From B";
		parent::__construct();
	}
}

final class f
{
	// ei class er kono child hobena. extend kora jabena
	// evabe kono function ba method keu final bole dile ta sudhu oikhanei use kora jabe.
	// onno khane jabena
}
 ?>