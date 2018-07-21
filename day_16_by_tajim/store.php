<html>
<head>
	<title></title>
</head>
<body>
	Hello!
<br>
<?php 
$db = new PDO('mysql:host=localhost;dbname=php-63;charset=utf8mb4', 'root', '');
//$query = "INSERT INTO `day_16_taj` (`ID`, `name`, `pass`, `email`, `skills`, `image_name`) VALUES ('', '".$_POST["name"]."', '".$_POST["pass"]."', '".$_POST["email"]."', '".$_POST["s1"]."', '".$_POST["i"]."');";
$query = "INSERT INTO `day_16_taj` (`id`, `ct`, `cc`) VALUES ('', '".$_POST["ct"]."', '".$_POST["cc"]."');";
$result = $db -> exec($query);
echo "<br>";
echo $query;
echo "<br>";
if($result)
{
	echo "DB connected";
}


 ?>
<br>
Your Course Title is :  <?php echo $_POST["ct"]; ?><br>
<br>
Your Course Code is :  <?php echo $_POST["cc"]; ?><br>
<br>
</body>
</html>