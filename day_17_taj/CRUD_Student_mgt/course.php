<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Course Form</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/bootstrap-theme.css">
	<link rel="stylesheet" href="css/style.css">
</head>
	
<body>
	<h2>Course Making Form</h2>

	<form action="store_subject.php" method="POST" enctype="multipart/form-data">
		<div class="box">
			<hr>
			<div class="form-group">
				<label >Enter Course Title:</label>
				<input type="text" name="c_title" id="c_title" class="form-control">
			</div>
			<div class="form-group">
				<label >Enter Course Code:</label>
				<input id="c_code" type="text" name="c_code" class="form-control">
			</div>
			<div class="form-group">
				<label >Enter Course Duration:</label>
				<input type="text" name="c_duration" class="form-control">
			</div>

			<div class="form-group">
				<label >Enter Course Credit:</label>
				<input id="c_credit" type="text" name="c_credit" class="form-control">
			</div>

			<div class="form-group">
				<label for="cell">Course Teacher:</label>
				<textarea id="c_teacher" name="c_teacher" class="form-control"></textarea>
			</div>
			
			<div class="form-group">
				<input type="submit" name="submit" value="Add Course" class="btn btn-success">
				<input type="reset" name="submit" value="Reset" class="btn btn-info">
			</div>

		</div>
	</form>

</body>
</html>