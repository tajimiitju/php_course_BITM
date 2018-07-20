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
<hr>
<h1 style="text-align: center;">Sudent Management System With Database CRUD and PHP</h1>
<hr>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">tajim iitju</a>
    </div>
    <ul class="nav navbar-nav">
      <li><a href="#">Home</a></li>
      
      <li class="active"><a href="course.php">Add Course</a></li>
      <li><a href="form.php">Add Student</a></li>

      <li><a href="all_data.php">All Students</a></li>
      <li><a href="all_course.php">All Courses</a></li>
      <li><a href="assign.php">Assign Student and Courses</a></li>
    </ul>
    <form class="navbar-form navbar-left">
      <div class="input-group">
        <input type="text" class="form-control" placeholder="Search">
        <div class="input-group-btn">
          <button class="btn btn-default" type="submit">
            <i class="glyphicon glyphicon-search"></i>
          </button>
        </div>
      </div>
    </form>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    </ul>
  </div>
</nav>

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