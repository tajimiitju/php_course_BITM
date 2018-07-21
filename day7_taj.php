<?php
$abc='this is simple';
$a = "aaaaaaaaaaaaaa";
$var = 120;
$aa='this is simple $var';
$a = "aaaaaaaaaaaaaa $var";
$abc='this is simple' . $var;
$b = '<p> tag in php. <a href="https://www.google.com">Google</a> </p>';
$c = "<p> tag in php. <a href='https://www.google.com'>Google</a> </p>";
print 'this is text     -----'; 'bbbbb-----';
echo 'this is text', 'aaaa    ------';
$_var1 = 123;
echo $_var1;
define('name',55555); // constant case sensitive
echo name;
define('NAME1',999999,true); // constant but not case snsitive
echo name1;
$color = 'red';
//comment 1 cntrl+/
/*comment1   ... select kore cntrl+shift+/
comment2*/
# comment 3
/*
int, bool, null, float, array, resource, string, object.*/

$v1=10;
$v2=10.11;
$v3="";
$v4='';
$v5='dhaka';
$v6 = false;
$v7 = true;
$v8 = array(12, 13, 14);
echo gettype($v1);
echo '<br>';
echo gettype($v2);
echo '<br>';
var_dump($v2);
echo '<br>';
var_dump($v3);
echo '<br>';
var_dump($v4);
echo '<br>';
var_dump($v5);
echo '<br>';
var_dump($v6);
echo '<br>';
var_dump($v7);
echo '<br>';
var_dump($v8);
echo '<br>';
echo '<br>';

class student
{
    public $first_name="fahim";
    public $last_name="ahmed";
}

$obj = new student();

var_dump($obj);
echo '<br>';

$v9 = null;
var_dump($v9);
echo '<br>';
$vv1 = 12;
echo "before null vv1= ".$vv1;
echo '<br>';
$vv1 = null;
echo "After null vv1= ".$vv1;
echo '<br>';

$vv2=null;
if (empty($vv2))
{
    echo 'this is empty';
}
else
{
    echo 'not empty';
}
echo '<br>';
if (is_null($vv2))
{
    echo 'this is null';
}
else
{
    echo 'this is not null';
}
echo '<br>';
echo '<br>';

$vv3='';
if (empty($vv3))
{
    echo 'this is empty';
}
else
{
    echo 'not empty';
}
echo '<br>';
if (is_null($vv3))
{
    echo 'this is null';
}
else
{
    echo 'this is not null';
}

?>


<html>
<head>
    <title>day 7</title>
</head>
<body>
    <h1 style="color: #0000FF;">This is heading.</h1>

    <h2 style="color: <?php echo $color; ?>;">color value by php</h2>
    <h2>$abc</h2>
    no...
    <h2><?php echo $aa; ?></h2>
    <h2><?php echo $abc; ?></h2>
    <h2><?php echo $a; ?></h2>
    <h2><?php echo $b; ?></h2>
    <h2><?php echo $c; ?></h2>
    <div><?php print $aa?></div>
</body>
</html>