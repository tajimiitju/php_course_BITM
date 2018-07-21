
<?php

$db = new PDO('mysql:host=localhost;dbname=php66;charset=utf8mb4', 'root', '');

$query = "SELECT * FROM `user_info` WHERE id = ".$_GET['id'];

$stmt = $db->query($query);
$results = $stmt->fetch(PDO::FETCH_ASSOC);

?>




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
            <input type="text" name="name" value="<?php echo $results['name']?>" id="name" class="form-control">
        </div>
        <div class="form-group">
            <label for="email">Enter Your Email:</label>
            <input id="email" type="email" name="email" value="<?php echo $results['email']?>" class="form-control">
        </div>
        <div class="form-group">
            <label for="pass">Enter Your Password:</label>
            <input type="text" name="password" value="<?php echo $results['password']?>" class="form-control">

        </div>
        <div class="form-group">
            <label for="address">Enter Your Address:</label>
            <textarea id="address" name="address"  class="form-control">
                <?php echo $results['address']?>
            </textarea>
        </div>
        <div class="form-group">
            <label for="cell">Enter Your Mobile:</label>
            <input id="cell" type="text" name="mobile"  value="<?php echo $results['mobile']?>" class="form-control">
        </div>

        <?php $g = $results['gender']?>

        <div class="form-group">
            <label>Select your Gender:</label>
            <input id="male" <?php echo ($g=='male')?'checked':'' ?> type="radio" name="gender" value="male">
            <label for="male">Male</label>

           <input id="female" <?php echo ($g=='female')?'checked':'' ?> type="radio" name="gender" value="female">
            <label for="female">Female</label>
        </div>


        <?php

        $data = explode(', ',$results['hobby']);
        //var_dump($data);

        ?>

        <div class="form-group">
            <label for="name">Check your hobbies:</label>

            <input id="cricket" type="checkbox" name="hobby[]" value="cricket" <?php if(in_array('cricket', $data)){ echo 'checked';}?>>
            <label for="cricket">Cricket</label>

            <input id="sing" type="checkbox" name="hobby[]" value="singing" <?php if(in_array('singing', $data)) echo 'checked'?>>
            <label for="sing">Singing</label>

            <input id="dance" type="checkbox" name="hobby[]" value="dancing" <?php if(in_array('dancing', $data)) echo 'checked'?>>
            <label for="dance">Dancing</label>
        </div>

        <div class="form-group">
            <label for="image">Chosose yor profile pic</label>
            <input id="image" type="file" name="image" class="btn btn-default">
        </div>
        <?php
        $date = explode('-',$results['dob']);
         var_dump($date);

        ?>
        <div class="form-group">
            <label>Select your DOB:</label>
            <select name="day" class="btn btn-default">
                <option value="">Day</option>

                <?php
                for ($i=1; $i<=31; $i++){
                    if($i==$date[0]){
                        $key = 'selected';
                    }else{
                        $key = '';
                    }
                    echo "<option $key value='".$i."'>$i</option>";
                }
                ?>
            </select>
            <select name="month" class="btn btn-default">
                <option value="">Month</option>

                <?php
                for ($i=1; $i<=12; $i++){
                    if($i==$date[1]){
                        $key = 'selected';
                    }else{
                        $key = '';
                    }
                    echo "<option $key value='".$i."'>$i</option>";
                }

                ?>
            </select>
            <select name="year" class="btn btn-default">
                <option value="">Year</option>
                <?php
                for ($i=1990; $i<=2017; $i++){
                    if($i==$date[2]){
                        $key = 'selected';
                    }else{
                        $key = '';
                    }
                    echo "<option $key value='".$i."'>$i</option>";
                }

                ?>
            </select>
        </div>
        <div class="form-group">
            <input type="submit" name="submit" value="Update" class="btn btn-success">
            <input type="reset" name="submit" value="Reset" class="btn btn-info">
        </div>
    </div>
</form>

</body>
</html>