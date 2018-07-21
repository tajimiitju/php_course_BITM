<?php

class Electronics {
	public $price;

	protected $features;

	private $board;

	public function test()
	{
		return $this -> board = 'iphone';
	}
	
	public function feature()
	{
		return $this -> features = '32GB';
	}

	// magic method : age thekei defined thake

	public function __construct()
	{
		echo "This is construct"."<br>";
		// construct k create korlei seta object creat koar sathe sathei auto call hobe 
	}

	public function __toString()
	{
		return 'From to string';
		// jokhon kono object k print korte bola hoy tokhon eta kaj kore
	}
}

$phone = new Electronics();
echo $phone -> price;
echo $phone -> test();
echo $phone -> feature();
echo $phone;


/**
* monitor is clid class jeta parent class er protected gula k access korte pare
* inheritance ... ager take inherit kore.
* kintu eitar property abr parent use korte parbena
*/
class Monitor extends Electronics
{
	// parent er eki name arekta likhlam..eke bole function over writing
	public function feature()
	{
		return $this -> features = '64GB';
	}
}
echo "<br>";
$p = new Monitor();
echo $p -> price;
echo $p -> test();
echo $p -> feature();


/**
* eta abr monitor er child j oi protected k access korte pare; inheritance ... ager take inherit kore.
* kintu eitar property abr parent use korte parbena
*/
class A extends Monitor
{

}



?>