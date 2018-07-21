<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Registration form</title>

	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/bootstrap-theme.css">
	<link rel="stylesheet" href="css/style.css">
</head>
	
<body>


	<h2>Registration Form</h2>

	<form action="store.php" method="POST" enctype="multipart/form-data">
		<div class="box">
			<hr>
			<div class="form-group">
				<label for="name">Enter Your Name:</label>
				<input type="text" name="name" id="name" class="form-control">
			</div>
			<div class="form-group">
				<label for="email">Enter Your Email:</label>
				<input id="email" type="email" name="email" class="form-control">
			</div>
			<div class="form-group">
				<label for="pass">Enter Your Password:</label>
				<input type="password" name="password" class="form-control">
				
			</div>
			<div class="form-group">
				<label for="address">Enter Your Address:</label>
				<textarea id="address" name="address" class="form-control"></textarea>	
			</div>
			<div class="form-group">
				<label for="cell">Enter Your Mobile:</label>
				<input id="cell" type="text" name="mobile" class="form-control">
			</div>

            <?php $g = 'female'?>

			<div class="form-group">
				<label>Select your Gender:</label>
				  <input id="male" <?php echo ($g=='Male')?'checked':'' ?> type="radio" name="gender" value="male">
				  <label for="male">Male</label>
				  
				<input id="female" <?php echo ($g=='female')?'checked':'' ?> type="radio" name="gender" value="female">
				<label for="female">Female</label>
			</div>



			<div class="form-group">
				<label for="name">Check your hobbies:</label>
				
				<input id="cricket" type="checkbox" name="hobby[]" value="cricket">
				<label for="cricket">Cricket</label>
				
				<input id="sing" type="checkbox" name="hobby[]" value="singing">
				<label for="sing">Singing</label>
				
				<input id="dance" type="checkbox" name="hobby[]" value="dancing">
				<label for="dance">Dancing</label>
			</div>
				
			<div class="form-group">
				<label for="image">Chosose yor profile pic</label>
				<input id="image" type="file" name="image" class="btn btn-default">
			</div>

			<div class="form-group">
				<label>Select your DOB:</label>
				<select name="day" class="btn btn-default">
					<option value="">Day</option>

                    <?php
                    for ($i=1; $i<=31; $i++){

                        echo "<option value='".$i."'>$i</option>";
                    }
                    ?>
				</select>
				<select name="month" class="btn btn-default">
					<option value="">Month</option>

					<?php
                    for ($i=1; $i<=12; $i++){

                        echo "<option  value='".$i."'>$i</option>";
                    }

                    ?>
				</select>
				<select name="year" class="btn btn-default">
					<option value="">Year</option>
                    <?php
                    for ($i=1990; $i<=2017; $i++){

                        echo "<option  value='".$i."'>$i</option>";
                    }

                    ?>
				</select>
			</div>
			<div class="form-group">
				<input type="submit" name="submit" value="Register" class="btn btn-success">
				<input type="reset" name="submit" value="Reset" class="btn btn-info">
			</div>
		</div>
	</form>

</body>
</html>