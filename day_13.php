<html>
<head>
	<title></title>
</head>
<body>

<form method="POST">
	<label for="">Enter ID</label>
	<input type="text" name="emp">
	<button type="submit">Submit</button>
</form>

<?php 

$file = fopen('salaryinfo.txt','r');

echo fgets($file);

echo "<br>"."*****"."<br>";

//while (!feof($file)) {
//	echo fgets($file);
//}


while (!feof($file)) {
	$all_data = fgets($file);
	//var_dump($all_data);
	$pair = explode(' ', $all_data);
	$employee[] = $pair[0];
	//var_dump($pair);	
	$salary[] = trim(preg_replace('/\s\s+/', ' ', $pair[1]));
	
}

	fclose($file);

//var_dump($all_data);\
//var_dump($salary);

$mx = max($salary);
$mn = min($salary);
$avg = array_sum($salary)/count($salary);

echo "<br>Max = ".$mx."<br>Min = ".$mn."<br>Average = ".$avg." ";

echo "<br>".array_search($_POST['emp'], $employee)."*****";

if(in_array($_POST['emp'], $employee))
{
	$id = array_search($_POST['emp'], $employee);
	$emp_sal = $salary[$id];
	echo "salary = ".$emp_sal;
}
else
{
	echo "<br>Error<br>";
}


 ?>



</body>
</html>