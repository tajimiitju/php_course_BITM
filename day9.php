<?php 
$animal = 'turtles';
$turtles = 103;
print $$animal;


define("PONDIT", "Welcome to pondits.com!", true);

echo pondit;

$x = "1.100w";

if(is_float($x)){

    echo "This value is float";

}

$x = 50.10101;
$x1 = 10.10101;
if(is_float($x.$x1)){
    echo "This value is float:".$x.$x1;
}

$data='I am a student';
echo $data;

$x = "Hello";
echo $x;

$x = "500,100";

echo $x;
var_dump((bool) '');

var_dump((bool) 5);

$cars = array("Volvo", "BMW", "Toyota");
echo "I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . ".";

$obj = (object)array("Test" => "Apple");

$var = "Test";

echo $obj->$var;

$x = "Hello world!";
$x = null;
var_dump($x);

$var1 = "test";
$var2 = $var1;
$var2 = "new test";
$var3 = &$var2;
$var3 = "final test";

print ("var1: $var1, var2: $var2, var3: $var3");

echo "<br>";

// till this is exam php1

echo gettype(102).'<br>'; 
echo intval('420000000000000000000');
echo intval(420000000000000000000);
var_dump((bool) "false");
$value ='1234.10abc ';
echo intval($value);

$var1 = 'Hello World';
$var2 = '';
$var2 =& $var1;
debug_zval_dump($var1);
var_dump((bool) array());


$var = '';
$a = "test";
$b = "anothertest";
var_dump(isset($a));
echo "<br>";
var_dump(isset($a, $b));

echo floatval($value);

echo "<br>";
$var_name1=678; 

if (is_numeric($var_name1)) 

{ 

echo "$var_name1 is Numeric.<br>" ; 

} 

else 

{ 

echo "$var_name1 is not Numeric. <br>" ; 

}

echo "<br>";
$var1 = 19191919; 

if (is_scalar ($var1))  {

                echo $var1. 'is a scalar value'.'<br>'; 
} 
else
	{
         echo $var1.' is not a  scalar value'.'<br>';
     }            

echo "<br>";
class StrValTest

{

   public function __toString()

   {

       return __CLASS__;

  }

}

echo strval(new StrValTest);
echo "<br>";


echo "<br>";

function destroy_foo()

{

    global $foo;

   unset($foo);

}

$foo = 'bar';

destroy_foo();

echo $foo;

echo "<br>";

$array=array("A","B","C");

echo $array;

var_dump($array);

echo "<br>";

$array=array("A","B","C");

var_export($array);
echo "<br>";

$array=array("1","2","3");

var_export($array);

echo "<br>";
$array=array("1","2","'");

var_export($array);


echo "<br>";
$array=array("1","2",array("1","2"));

var_export($array);

echo "<br>";
$var_name1=678;

if (is_numeric($var_name1)) 

{ 

echo "$var_name1 is Numeric.<br>" ; 

} 

else 

{ 

echo "$var_name1 is not Numeric. <br>" ; 

}


echo "<br>";
$var_name="a678"; 

if (is_numeric($var_name)) 

{ 

echo "$var_name is Numeric.<br>" ; 

} 

else 

{ 

echo "$var_name is not Numeric.<br>" ; 

} 


echo "<br>";
$a="abc@gamil.com"; 

if (is_numeric($a)){        

                echo $a."is  numeric";

}

else {

                echo $a."is not numeric";

}


echo "<br>";
$a=698.99; 

if (is_numeric($a)){        

                echo $a."is  numeric";

}

else {

                echo $a."is not numeric";

}


echo "<br>";
$a=698.99; 

if (is_numeric($a)){        

                echo $a."is  numeric";

}

else {

                echo $a."is not numeric";

}


echo "<br>";
$var1 = 19191919; 

if (is_scalar ($var1))  {

                echo $var1. ' is a scalar value'.'<br>'; 

}

else

{

                echo $var1.' is not a  scalar value'.'<br>';

}             


echo "<br>";
$var = 0;
if (empty($var)) {
    echo '$var is either 0, empty, or not set at all';
}


echo "<br>";
$var ='1';
if (empty($var)) {
    echo '$var is either 0, empty, or not set at all';
}
else {
    echo $var;
}


echo "<br>";
var_dump((bool) 2.3e5);

echo "<br>";
var_dump((bool) "foo");

echo "<br>";
var_dump((bool) -2);

echo "<br>";
var_dump((bool) 1);

echo "<br>";
var_dump((bool) "");

echo "<br>";
$array=array("A","B","C");

echo $array;

var_dump($array);

// ans: error and var dump er ta

// php xm2

 ?>