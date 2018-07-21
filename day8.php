<?php
$a = 10; 
function sub_sum($x, $y, $z)
{
	echo "Welcome".'<br>';
	echo $x+$y+$z;
	global $a;
	echo $a.'inside'.'<br>';
}
sub_sum(10,20,30);
echo "<br>";
sub_sum(30,20,30);
echo "<br>";
sub_sum(40,20,30);
echo "<br>";
sub_sum(50,20,30) + 5555;
echo "<br>";
echo sub_sum(50,20,30) + 5555;
echo "<br>";
echo $a.'outside'.'<br>';
function sub_sum1($x, $y, $z=10)
{
	echo "sub_sum1".'<br>';
	return $x+$y+$z;
}
echo sub_sum1(50,20,30);
echo "<br>";
echo sub_sum1(50,20);
echo "<br>";

function s1($aa)
{
	return $aa+10;
}
$aa=1;
echo "<br>inside from function ".s1($aa);
echo "<br>from outside ".$aa;

// call by value
function s2($a2)
{
	$a2 = 10;
	echo "<br>inside".$a2;
}
$a2=1;
echo "<br>outside from function ".s2($a2);

//call by reference
function s3(&$a3)
{
	$a3 = 10;
	echo "<br>inside".$a3;
}
$a3=1;
echo "<br>outside from function ".s3($a3);
echo '<br>';
$vv2='';
if (empty($vv2))
{
    echo 'this is empty';
}
else
{
    echo 'not empty';
}
echo '<br>';

if (isset($vv2))
{
    echo 'this is set';
}
else
{
    echo 'not set';
}
echo '<br>';

$vv3=null;
if (empty($vv3))
{
    echo 'this is empty';
}
else
{
    echo 'not empty';
}
echo '<br>';

if (isset($vv3))
{
    echo 'this is set';
}
else
{
    echo 'not set';
}
echo '<br>';

$text = '<p>Test paragraph.</p><!-- Comment --> <a href="#fragment">Other text</a>';
echo strip_tags($text);
echo "<br>";

// Allow <p> and <a>
echo strip_tags($text, '<a>');


 ?>