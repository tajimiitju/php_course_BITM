<?php
session_start();
include_once '../include/header.php';
include_once '../../../vendor/autoload.php';
$admin = new App\Admin\Admin();
$admins = $admin->index_dntn();

$db = new PDO('mysql:host=localhost;dbname=fund_management;charset=utf8mb4', 'root', '');
$query1 = "SELECT * FROM `assign`";
$stmt = $db->query($query1);
$data =  $stmt->fetchAll(PDO::FETCH_ASSOC);





?>







<div class="right_col section-padding" role="main">
    <div class="event-area">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">All Transactions Details</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>

        <!-- /.row -->
        <div class="row">
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th>SL</th>
                        <th>Trans. ID</th>
                        <th>Agent No.</th>
                        <th>Received Money</th>
                        <th>Said Money</th>
                        <th>Found Event Name</th>
                        <th>Found Event ID</th>
                        <th>Status</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    $sl = 0;
                    foreach ($data as $user){
                        $sl ++;
                        $query2 = "SELECT *  FROM `donation` WHERE `t_id` LIKE '".$user['t_id']."'";
                        $stmt = $db->query($query2);
                        $data2 =  $stmt->fetchAll(PDO::FETCH_ASSOC);

                        //var_dump($data2);

                        foreach ($data2 as $event)
                        {
                            $money = $event['amount'];
                            $e_name = $event['event_name'];
                            $e_id = $event['event_id'];
                        }

                        ?>
                        <tr>
                            <td><?php echo $sl?></td>
                            <td><?php echo $user['t_id']?></td>
                            <td><?php echo $user['agent_no']?></td>
                            <td><?php echo $user['received_money']?></td>

                            <td><?php echo $money ?></td>
                            <td><?php echo $e_name ?></td>
                            <td><?php echo $e_id ?></td>
                            <td><?php
                                $query3 = "SELECT * FROM `fund` WHERE `unique_id` LIKE '".$e_id."'";
                                $stmt = $db->query($query3);
                                $data3 =  $stmt->fetchAll(PDO::FETCH_ASSOC);
                                //var_dump($data3);
                                $rcv=0;
                                foreach ($data3 as $e){
                                    $rcv = $e['rcv_money'];
                                }

                                //constant(y);
                            $a='y';
                            if ($user['received_money']==$money && $user['status']!=$a)
                                {
                                    echo "Money Accepted";
                                    $rcv = $rcv + $money;

                                    $update_rcv = "UPDATE `fund` SET `rcv_money`='".$rcv."' WHERE `unique_id` LIKE '".$e_id."'";
                                    $stmt = $db->query($update_rcv);


                                    $du = "UPDATE `assign` SET `status`='".$a."' WHERE `t_id` = '".$user['t_id']."'";
                                    $db->query($du);


                                    /*

                                    $update_rcv = "UPDATE `fund` SET `rcv_money`='".$rcv."' WHERE `unique_id` LIKE '".$e_id."'";
                                        $stmt = $db->query($update_rcv);
                                        if($stmt)
                                        {
                                            $dt = "DELETE FROM `donation` WHERE `t_id` = '".$user['t_id']."'";
                                            $db->query($dt);
                                            $dt2 = "DELETE FROM `assign` WHERE `t_id` = '".$user['t_id']."'";
                                            $db->query($dt2);
                                        }
                                    */
                                }
                                else{
                                    echo "Money or TID not matched or Used";
                                    $rcv = 0;
                                }

                                //echo $rcv;
                                $money = 0;
                                $e_name = '';
                                $e_id = '';
                                $rcv = 0;
                                //session_abort();

                                ?>
                            </td>

                        </tr>

                    <?php }?>

                    </tbody>
                </table>
            </div>



            <!-- END PRODUCTS -->
        </div>
        <!-- /.row -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">All Events Statistics</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>

        <!-- /.row -->
        <div class="row">
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th>SL</th>
                        <th>Event Name</th>
                        <th>Event ID</th>
                        <th>Start Date</th>
                        <th>End Date</th>
                        <th>Target</th>
                        <th>Total Recieved Money</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    $sl = 0;
                    $query3 = "SELECT * FROM `fund`";
                    $stmt = $db->query($query3);
                    $data3 =  $stmt->fetchAll(PDO::FETCH_ASSOC);


                    foreach ($data3 as $e){
                        $sl ++;

                        //$rcv_money = "";
                        //$rcv_money = $e['rcv_money'];

                        ?>
                        <tr>
                            <td><?php echo $sl?></td>
                            <td><?php echo $e['name'] ?></td>
                            <td><?php echo $e['unique_id'] ?></td>
                            <td><?php echo $e['start_date'] ?></td>
                            <td><?php echo $e['end_date'] ?></td>
                            <td><?php echo $e['target'] ?></td>
                            <td><?php echo $e['rcv_money'] ?></td>

                        </tr>

                    <?php }?>

                    </tbody>
                </table>
            </div>



            <!-- END PRODUCTS -->
        </div>
        <!-- /.row -->
    </div>
</div>







<?php
include_once '../include/footer.php';
?>
