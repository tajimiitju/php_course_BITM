<?php
$db = new PDO('mysql:host=localhost;dbname=php-63;charset=utf8mb4', 'root', '');
$query = "SELECT * FROM `day_16_taj`";
$stmt = $db->query($query);
$data =  $stmt->fetchAll(PDO::FETCH_ASSOC);
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

    <table border = "2" class="table table-bordered">
        <thead>
            <tr>
                <th>SL</th>
                <th>Course Name</th>
                <th>Course Code</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
        <?php
        $sl = 0;
        foreach ($data as $user){
        $sl ++;

        ?>
            <tr>
                <td><?php echo $sl?></td>
                <td><?php echo $user['cc']?></td>
                <td><?php echo $user['ct']?></td>
                <td><a href="del.php?id=<?php echo $user['id']?>">Delete</a></td>
            </tr>

        <?php }?>

        </tbody>
    </table>

</body>
</html>






