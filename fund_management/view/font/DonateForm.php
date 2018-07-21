<?php
include_once 'include/header.php';
include_once '../../vendor/autoload.php';
$admin = new App\Admin\Admin();
//$students = $student->index();
$admin = $admin->view($_GET['id']);
?>
<div class="col-sm-4"></div>
<div class="container">
    <div class="col-md-6">
        <hr>
        <h2 align="center" style="color: blue">Donate</h2>
    <form></form>
    <form action="view/font/store3.php" method="POST" enctype="multipart/form-data">
        <hr>
        <h2 for="name" class="control-label">Event Name: <?php echo $admin['name']?></h2>
        <div class="cols-sm-10">
            <div class="input-group">
                <input type="hidden" name="event_id" id="event_id" value="<?php echo $admin['unique_id']?>" class="form-control">
                <input type="hidden" name="event_name" id="event_name" value="<?php echo $admin['name']?>" class="form-control">
            </div>
        </div>
        <hr>
        <div class="form-group">
            <label>Donor Name</label>
            <input name="donor_name" type="text" class="form-control" id="donor_name" aria-describedby="text" placeholder="Enter Full Name">
            <small id="name" class="form-text text-muted"></small>
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input name="donor_mail" type="email" class="form-control" id="donor_mail" aria-describedby="emailHelp" placeholder="Enter email">
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
        <div class="form-group">
            <label class="col-form-label">Address</label>
            <input name="address" id="address" type="text" class="form-control" placeholder="1234 Main St">
        </div>
        <div class="form-group">
            <label for="cellNumber" class="col-form-label">Enter your mobile number</label>
            <input name="phon" id="phon" type="tel" class="form-control" placeholder="01********">
        </div>
        <div class="form-group">
            <label class="">Amount</label>
            <input name="amount" type="number" class="form-control" id="amount" placeholder="amount of donation">
        </div>
        <div class="form-group">
            <label>Select payment gateway:</label><br>
            <?php
            $p = explode(', ',$admin['pay_method']);
            //echo $admin['pay_method'];
            //var_dump($p);
            //foreach ($p as $value) {
            // echo "$value <br>";
            // }
            ?>
            <select name="gateway" id="gateway" class="btn btn-default">
                <option value="">Select payment gateway</option>
                <?php
                foreach ($p as $uu){
                echo "<option value='$uu'>".$uu."</option>";
                }
                ?>
            </select>
        </div>
        <div class="form-group">
            <label class="">Transaction ID</label>
            <input name="t_id" type="text" class="form-control" id="t_id" placeholder="">
        </div>
        <div class="form-group">
            <label for="cellNumber" class="col-form-label">Agent Number</label>
            <input name="agent_no" type="tel" class="form-control" id="agent_no" placeholder="01********">
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
</div>
</div>
<?php
include_once 'include/footer.php';
?>