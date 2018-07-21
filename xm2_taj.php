<html>
<head>
	<title>exam 2 by tajim</title>
	<!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">

</head>
<body>

	<div class="container">
		<?php
		$a = file_get_contents("salaryinfo.txt");
		echo $a;
		echo "<br>";
		$a2 = (explode(" ",$a));
		print_r ($a2);
		echo "<br>";
		echo "<br>";

		$avg = ($a2[1]+$a2[3]+$a2[5]+$a2[7]+$a2[9]) / 5;

		//echo max(($a2[1],$a2[3],$a2[5],$a2[7],$a2[9]));
		$m = max($a2[1], $a2[3], $a2[5], $a2[7], $a2[9]);
		$mn = min($a2[1], $a2[3], $a2[5], $a2[7], $a2[9]);
	?>
	<hr>
	<h3>Average salary amount: <?php echo $avg." "; ?></h3>
	<h3>Maximum salary amount: <?php echo $m." "; ?></h3>
	<h3>Minimum salary amount: <?php echo $mn." "; ?></h3>
	<hr>
	<form action="xm2_taj.php" method="post">
  		<div class="form-group">
    		<label>Employee ID</label>
    		<input type="text" class="form-control" placeholder="Enter ID" name="id">
  		</div>

  		<button type="submit" class="btn btn-primary">Submit</button>
	</form>

	<h3>Salary amount: 
	<?php 
	echo " ";
	if ($_POST['id']==$a2[0]) {
		# code...
		echo $a2[1];
	}

	else if ($_POST['id']==$a2[2]) {
		# code...
		echo $a2[3];
	}

	else if ($_POST['id']==$a2[4]) {
		# code...
		echo $a2[5];
	}

	else if ($_POST['id']==$a2[6]) {
		# code...
		echo $a2[7];
	}

	else if ($_POST['id']==$a2[8]) {
		# code...
		echo $a2[9];
	}

	else
	{
		# code...
		echo "<br>"."You have enter an wrong ID. Employee is not found."."<br>";
	}

	?>

	</h3>


	</div>

</body>
</html>

