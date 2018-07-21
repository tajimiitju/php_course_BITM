<?php

$db = new PDO('mysql:host=localhost;dbname=php66;charset=utf8mb4', 'root', '');

$query = "SELECT * FROM `user_info` WHERE id = ".$_GET['id'];
$stmt = $db->query($query);
$results = $stmt->fetchAll(PDO::FETCH_ASSOC);
foreach ($results as $user){}
var_dump($user);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Update form</title>

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-theme.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

<h2>Registration Form</h2>

<form action="update.php" method="POST" enctype="multipart/form-data">
    <div class="box">
        <hr>
        <div class="form-group">
            <label for="name">Enter Your Name:</label>
            <input type="text" value="<?php echo $user['name']?>" name="name" id="name" class="form-control">
        </div>
        <div class="form-group">
            <label for="email">Enter Your Email:</label>
            <input id="email" value="<?php echo $user['email']?>" type="email" name="email" class="form-control">
        </div>
        <div class="form-group">
            <label for="pass">Enter Your Password:</label>
            <input type="text" value="<?php echo $user['password']?>" name="password" class="form-control">

        </div>
        <div class="form-group">
            <label for="address">Enter Your Address:</label>
            <textarea id="address" name="address" class="form-control">
                <?php echo $user['address']?>
            </textarea>
        </div>
        <div class="form-group">
            <label for="cell">Enter Your Mobile:</label>
            <input id="cell" type="text" value="<?php echo $user['mobile']?>" name="mobile" class="form-control">
        </div>


        <div class="form-group">
            <input type="submit" name="submit" value="Register" class="btn btn-success">
            <input type="reset" name="submit" value="Reset" class="btn btn-info">
        </div>
    </div>
</form>
</body>
</html>

