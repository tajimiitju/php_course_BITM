<?php

$db = new PDO('mysql:host=localhost;dbname=php66;charset=utf8mb4', 'root', '');

$query = "SELECT * FROM `user_info`";
$stmt = $db->query($query);
$results = $stmt->fetchAll(PDO::FETCH_ASSOC);

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

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>SL</th>
                <th>Name</th>
                <th>Email</th>
                <th>Password</th>
                <th>Address</th>
                <th>Mobile</th>
                <th>Gender</th>
                <th>Hobby</th>
                <th>Image</th>
                <th>Date of Birth</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $sl = 1;
            foreach ($results as $user){
            ?>
            <tr>
                <td><?php echo $sl++?></td>
                <td><?php echo $user['name']?></td>
                <td><?php echo $user['email']?></td>
                <td><?php echo $user['password']?></td>
                <td><?php echo $user['address']?></td>
                <td><?php echo $user['mobile']?></td>
                <td><?php echo $user['gender']?></td>
                <td><?php echo $user['hobby']?></td>
                <td>
                    <img src="uploads/<?php echo $user['image_name']?>" alt="">
                </td>
                <td><?php echo $user['dob']?></td>
                <td>
                    <a href="view.php?id=<?php echo $user['id']?>">View</a>
                    <a href="edit.php?id=<?php echo $user['id']?>">Edit</a>
                    <a href="delete.php?id=<?php echo $user['id']?>">Delete</a>
                </td>
            </tr>

        <?php }?>

        </tbody>
    </table>

</body>
</html>


