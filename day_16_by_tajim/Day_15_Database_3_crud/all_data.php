<?php
$db = new PDO('mysql:host=localhost;dbname=php-63;charset=utf8mb4', 'root', '');
$query = "SELECT * FROM `user_info`";
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

<div class="container">

    <div class="table-responsive">
        <table class="table table-bordered">
            <thead>
            <tr>
                <th>SL</th>
                <th>Name</th>
                <th>Email</th>
                <th>Password</th>
                <th>Address</th>
                <th>Phone Number</th>
                <th>Gander</th>
                <th>Hobby</th>
                <th>Image</th>
                <th>Date of Birth</th>
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
                    <td><?php echo $user['name']?></td>
                    <td><?php echo $user['email']?></td>
                    <td><?php echo $user['password']?></td>
                    <td><?php echo $user['address']?></td>
                    <td><?php echo $user['mobile']?></td>
                    <td><?php echo $user['gender']?></td>
                    <td><?php echo $user['hobby']?></td>
                    <td><img src="uploads/<?php echo $user['image_name']?>" alt=""></td>
                    <td><?php echo $user['dob']?></td>
                    <td>
                        <a  class="text-info" href="view.php?id=<?php echo $user['id']?>">View</a>
                        <a  class="text-primary" href="edit.php?id=<?php echo $user['id']?>">Edit</a>
                        <a class="text-danger" href="delete.php?id=<?php echo $user['id']?>">Delete</a>
                    </td>


                </tr>

            <?php }?>

            </tbody>
        </table>
    </div>
</div>

</body>
</html>






