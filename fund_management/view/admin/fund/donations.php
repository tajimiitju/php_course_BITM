<?php
session_start();
include_once '../include/header.php';
include_once '../../../vendor/autoload.php';
$admin = new App\Admin\Admin();
$admins = $admin->index_dntn();

$db = new PDO('mysql:host=localhost;dbname=fund_management;charset=utf8mb4', 'root', '');
$query = "SELECT * FROM `donation`";
$stmt = $db->query($query);
$data =  $stmt->fetchAll(PDO::FETCH_ASSOC);



?>







<div class="right_col section-padding" role="main">
    <div class="event-area">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">All Donations Details</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <div style="position: fixed; z-index: 99999; right: 50px; top:50px">

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
                        <th>Donor Name</th>
                        <th>Email</th>
                        <th>Address</th>
                        <th>Phone Number</th>
                        <th>Amount</th>
                        <th>Gateway</th>
                        <th>Trans. ID</th>
                        <th>Agent No.</th>
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
                            <td><?php echo $user['event_name']?></td>
                            <td><?php echo $user['event_id']?></td>
                            <td><?php echo $user['donor_name']?></td>
                            <td><?php echo $user['donor_mail']?></td>
                            <td><?php echo $user['address']?></td>
                            <td><?php echo $user['phon']?></td>
                            <td><?php echo $user['amount']?></td>
                            <td><?php echo $user['gateway']?></td>
                            <td><?php echo $user['t_id']?></td>
                            <td><?php echo $user['agent_no']?></td>

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
