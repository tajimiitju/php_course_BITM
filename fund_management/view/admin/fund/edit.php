<?php
session_start();
include_once '../include/header.php';
include_once '../../../vendor/autoload.php';
$admin = new App\Admin\Admin();
//$students = $student->index();

$admin = $admin->view($_GET['id']);


?>

    <!-- page content -->
    <div class="right_col" role="main">
        <!-- top tiles -->
        <div class="row tile_count">
            <div class="right_col" role="main">
                <!-- top tiles -->
                <div class="row tile_count">
                    <div id="page-wrapper">
                        <div class="row">
                            <div class="col-lg-12">
                                <h1 class="page-header">Event Form</h1>
                            </div>
                            <!-- /.col-lg-12 -->
                        </div>
                        <!-- /.row -->
        <div class="row">
          <div class="col-lg-12">
            <div class="panel panel-primary">
              <div class="panel-heading">
                Create A Event
                </div>
                 <div class="panel-body">
                  <div class="row">
                   <div class="col-md-8 col-md-offset-2">
                    <form role="form" action="view/admin/fund/update.php" enctype="multipart/form-data" method="POST">
                      <div class="form-group">
                        <label for="name" class="control-label">Event Name</label>
                        <div class="cols-sm-10">
                         <div class="input-group">
                          <span class="input-group-addon"><i class="fa fa-id-card" aria-hidden="true"></i></span>
                          <input type="text" class="form-control" name="name" id="name" value="<?php echo $admin['name']?>" />
                         </div>
                         <input type="hidden" name="id" value="<?php echo $admin['unique_id']?>" class="form-control">
                            <input type="hidden" name="image" value="<?php echo $admin['image']?>"
                        </div>
                      </div>
                      <div class="form-group">
                       <label class="cols-sm-2 control-label">Target Ammount</label>
                       <div class="cols-sm-10">
                            <div class="input-group">
                             <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                             <input type="text" class="form-control" name="target" id="target" value="<?php echo $admin['target']?>"/>
                            </div>
                        </div>
                       </div>                                                 
                        <div class="form-group">
                            <label class="cols-md-4 control-label">Location</label>
                          <div class="cols-sm-10">
                            <div class="input-group">
                              <span class="input-group-addon"><i class="fa fa-phone" aria-hidden="true"></i></span>
                              <input type="location" class="form-control" name="location" id="location" value="<?php echo $admin['location']?>" />
                            </div>
                          </div>
                        </div>
                                                   
                        <div class="payoption">
                        <p>Permitted Paying Methods</p>
                        <div class="checkbox">
                        <div class="form-check form-check-inline">
                         <label class="form-check-label">
                          <input <?php echo (in_array('Bkash', explode(', ',$admin['pay_method'])))?'checked':''?> class="form-check-input" type="checkbox" id="Bkash" value="Bkash" name="pay_method[]"> Bkash
                         </label>
                        </div>
                        <div class="form-check form-check-inline">
                            <label class="form-check-label">
                              <input <?php echo (in_array('DBBL', explode(', ',$admin['pay_method'])))?'checked':''?> class="form-check-input" type="checkbox" id="DBBL" value="DBBL" name="pay_method[]"> DBBL
                            </label>
                        </div>
                        <div class="form-check form-check-inline">
                        <label class="form-check-label">
                            <input <?php echo (in_array('Mkash', explode(', ',$admin['pay_method'])))?'checked':''?> class="form-check-input" type="checkbox" id="Mkash" value="Mkash" name="pay_method[]"> Mkash
                        </label>
                        </div>
                        <div class="form-check form-check-inline">
                        <label class="form-check-label">
                          <input <?php echo (in_array('SureCash', explode(', ',$admin['pay_method'])))?'checked':''?> class="form-check-input" type="checkbox" id="SureCash" value="SureCash" name="pay_method[]"> SureCash
                        </label>
                        </div>
                    </div>
                </div>
                    <div class="form-group date mr10">
                    <hr>
                    <label><p>Previous Start Date: <?= $admin['start_date']?> </p></label><br>
                    <label><p>New Start Date:</p></label>
                    <select name="sday" class="btn btn-default">
                    <?php
                        for($i=1;$i<=31;$i++)
                           {
                            echo '<option value='.$i.'>'.$i.'</option>';
                           }
                    ?>
                    </select>
                    <select name="smonth" class="btn btn-default">             
                        <option>Select One</option>
                    <option value="January">January</option>
                    <option value="Febryary">Febryary</option>
                    <option value="March">March</option>          
                    <option value="April">April</option>          
                    <option value="May">May</option>          
                    <option value="June">June</option>          
                    <option value="July">July</option>          
                    <option value="August">August</option>          
                    <option value="September">September</option>
                    <option value="October">October</option>        
                    <option value="November">November</option>
                    <option value="December">December</option>
                    </select>
                    <select name="syear" class="btn btn-default">
                    <?php
                        for($i=2016;$i<=2020;$i++)
                        {
                           echo '<option value='.$i.'>'.$i.'</option>';
                        }
                    ?>
                    </select>
                    </div>

                    <div class="form-group date mr10">
                    <hr>
                    <label><p>Previous Ending Date: <?= $admin['end_date']?> </p></label><br>
                    <label><p>New Ending Date:</p></label>
                    <select name="eday" class="btn btn-default">
                    <?php
                        for($i=1;$i<=31;$i++)
                           {
                            echo '<option value='.$i.'>'.$i.'</option>';
                           }
                    ?>
                    </select>
                    <select name="emonth" class="btn btn-default">             
                        <option>Select One</option>
                    <option value="January">January</option>
                    <option value="Febryary">Febryary</option>
                    <option value="March">March</option>          
                    <option value="April">April</option>          
                    <option value="May">May</option>          
                    <option value="June">June</option>          
                    <option value="July">July</option>          
                    <option value="August">August</option>          
                    <option value="September">September</option>
                    <option value="October">October</option>        
                    <option value="November">November</option>      <option value="December">December</option>
                    </select>
                    <select name="eyear" class="btn btn-default">
                    <?php
                        for($i=2017;$i<=2022;$i++)
                        {
                           echo '<option value='.$i.'>'.$i.'</option>';
                        }
                    ?>
                    </select>
                    </div>
                    <div class="form-group">
                    <hr>
                    <label>Previous Event Banner</label>
                    <img width="100" src="assets/uploads/<?= $admin['image']?>" alt="">
                    </div>
                    <div class="form-group">
                    <label>Change Event Banner</label>
                    <input type="file" name="image" class="btn btn-default"  />
                    </div>
                    <hr>
                    <div class="form-group">
                        <hr>
                    <button type="reset" class="btn btn-default">Reset</button>
                    <button type="submit" class="btn btn-warning">Update</button>
                    <a href="view/admin/fund/index.php" class="btn btn-default">Back</a>
                    </div>
                    
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