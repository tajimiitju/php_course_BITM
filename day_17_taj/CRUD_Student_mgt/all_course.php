<?php
$db = new PDO('mysql:host=localhost;dbname=php-63;charset=utf8mb4', 'root', '');
$query = "SELECT * FROM `course`";
$stmt = $db->query($query);
$data =  $stmt->fetchAll(PDO::FETCH_ASSOC);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>All courses info</title>

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
                <th>Title</th>
                <th>Code</th>
                <th>Duration</th>
                <th>Credit</th>
                <th>Teacher</th>
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
                    <td><?php echo $user['c_title']?></td>
                    <td><?php echo $user['c_code']?></td>
                    <td><?php echo $user['c_duration']?></td>
                    <td><?php echo $user['c_credit']?></td>
                    <td><?php echo $user['c_teacher']?></td>
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






