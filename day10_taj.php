<?php 

echo "Indexed array.............."."<br>";

$cars = array("Volvo", "BMW", "Toyota");
echo "I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . ".";


$cars = array("Volvo", "BMW", "Toyota");
$arrlength = count($cars);

for($x = 0; $x < $arrlength; $x++) {
    echo $cars[$x];
    echo "<br>";
}
$cars = array("Volvo", "BMW", "Toyota");
echo count($cars);



echo "associative array.........."."<br>";

$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
echo "Peter is " . $age['Peter'] . " years old.";

echo '<br>'."******************"."<br>";



$student = array(
	'Name' => 'tajim',
	'Reg'  => 123 
	);


echo $student['Reg'];
echo "<br>";
foreach ($student as $item => $info) {
	# code...
	echo $item."<br>";
	echo $info."<br>";
}

echo "******************"."<br>";

$subject = array('Bengali', 'Math', 'English');

$student1 = array(
	'Name' => 'tajim',
	'Reg'  => 123 ,
	'Sub' => $subject
	);

echo "<pre>";
print_r($student1);
echo "</pre>";

echo implode($student1[Sub][0])."<br>";

/////////////////////////////////////

$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");

foreach($age as $x => $x_value) {
    echo "Key=" . $x . ", Value=" . $x_value;
    echo "<br>";
}


echo "while loop........"."<br>";

$x = 1; 

while($x <= 5) {
    echo "The number is: $x <br>";
    $x++;
} 


echo "do .. while loop........"."<br>";

$x = 1; 

do {
    echo "The number is: $x <br>";
    $x++;
} while ($x <= 5);

// condition false holeo ekbar execute kore.....

$x = 6;

do {
    echo "The number is: $x <br>";
    $x++;
} while ($x <= 5);

////////////////////////////////////////////////////

echo "<br>"."*******************************"."<br>";



 ?>