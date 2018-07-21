<?php
include_once '../../../vendor/autoload.php';
include_once '../include/header.php';
//use App\Connection;
$admin = new App\Admin\Admin();

//var_dump($_POST);

//$admin->set($_POST)->store();



//$user->set($_POST)->store_donation();

//die();
$db = new PDO('mysql:host=localhost;dbname=fund_management;charset=utf8mb4', 'root', '');

$query1 = "SELECT `t_id` FROM `assign` WHERE `t_id` = '".$_POST['t_id']."'";
$stmt1 = $db->query($query1);
$data =  $stmt1->fetchAll(PDO::FETCH_ASSOC);

$query2 = "SELECT `status` FROM `assign` WHERE `t_id` = '".$_POST['t_id']."'";
$stmt2 = $db->query($query2);
$data2 =  $stmt2->fetchAll(PDO::FETCH_ASSOC);
$b='n';
$result = '';
//var_dump($data2);
//die();
if(!$data) {
    $stmt = "INSERT INTO `assign` (`id`, `t_id`, `agent_no`, `received_money`) VALUES (NULL, '" . $_POST['t_id'] . "',
                                                            '" . $_POST['agent_no'] . "', '" . $_POST['received_money'] . "');";

}
else
{
    if ($data2==$b)
    {
        $s1 = "DELETE FROM `assign` WHERE `t_id` = '".$_POST['t_id']."'";
        $db->exec($s1);
        $stmt = "INSERT INTO `assign` (`id`, `t_id`, `agent_no`, `received_money`, `status`) VALUES (NULL, '" . $_POST['t_id'] . "',
                                                            '" . $_POST['agent_no'] . "', '" . $_POST['received_money'] . "', '".$b."');";
    }

}
$result = $db->exec($stmt);




?>

    <div class="right_col" role="main">
        <!-- top tiles -->
        <div class="row tile_count">
            <div class="right_col" role="main">
                <!-- top tiles -->
                <div class="row tile_count">
                    <div id="page-wrapper">
                        <div class="row">
                            <div class="col-lg-8">
                                <h1 class="page-header">Assign Transection ID and Money</h1>
                            </div>
                            <!-- /.col-lg-12 -->
                        </div>
                        <!-- /.row -->
                        <div class="row">
                            <div class="col-lg-8">
                                <div class="panel panel-primary">
                                    <div class="panel-heading">
                                        Assign Status
                                    </div>
                                    <div class="panel-body">
                                        <div class="row">
                                            <div class="col-md-8 col-md-offset-2">

                                                <form action="view/admin/fund/assign.php" method="POST" enctype="multipart/form-data">
                                                    <div class="form-group">
                                                        <?php
                                                            if ($result) {
                                                            echo 'Data successfully Assigned !!';
                                                            //header('location: assign.php');
                                                            }
                                                            else
                                                            {
                                                                echo 'Transaction ID exist / ERROR !!';
                                                            }
                                                        ?>

                                                    </div>
                                                    <div class="form-group">
                                                        <input type="submit" name="submit" value="New Assign" class="btn btn-success">
                                                    </div>
                                                    <div class="clearfix"></div>

                                                    <div class="separator">

                                                        <div>

                                                            <p>If transaction ID found in donations then the donated Event will receive money
                                                                and the donor will get notification.
                                                                <a href="https://colorlib.com"></a>
                                                        </div>
                                                    </div>
                                                    <hr>

                                                </form>


                                            </div>
                                        </div>
                                        <!-- /.row (nested) -->
                                    </div>
                                    <!-- /.panel-body -->
                                </div>
                                <!-- /.panel -->
                            </div>
                            <!-- /.col-lg-12 -->
                        </div>
                        <!-- /.row -->
                    </div>
                </div>
                <!-- /top tiles -->
            </div>
        </div>
        <!-- /top tiles -->
    </div>



<?php


include_once '../include/footer.php';
?>

