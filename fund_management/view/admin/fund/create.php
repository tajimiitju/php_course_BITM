<?php
include_once '../include/header.php';

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
                    <form action="view/admin/fund/store.php" method="POST" enctype="multipart/form-data">
                      <div class="form-group">
                        <label for="name" class="control-label">Event Name</label>
                        <div class="cols-sm-10">
                         <div class="input-group">
                          <span class="input-group-addon"><i class="fa fa-id-card" aria-hidden="true"></i></span>
                          <input type="text" class="form-control" name="name" id="name" required placeholder="Enter Event name" />
                         </div>
                        </div>
                      </div>
                      <div class="form-group">
                       <label class="cols-sm-2 control-label">Target Ammount</label>
                       <div class="cols-sm-10">
                            <div class="input-group">
                             <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                             <input type="text" class="form-control" name="target" id="target" required placeholder="Enter Your Target Ammount" />
                            </div>
                        </div>
                       </div>                                                 
                        <div class="form-group">
                            <label class="cols-md-4 control-label">Location</label>
                          <div class="cols-sm-10">
                            <div class="input-group">
                              <span class="input-group-addon"><i class="fa fa-phone" aria-hidden="true"></i></span>
                              <input type="location" class="form-control" name="location" id="location" required placeholder="Enter your Location" />
                            </div>
                          </div>
                        </div>
                                                   
                        <div class="payoption">
                        <p>Permitted Paying Methods</p>
                        <div class="checkbox">
                        <div class="form-check form-check-inline">
                         <label class="form-check-label">
                          <input class="form-check-input" type="checkbox" id="Bkash" value="Bkash" name="pay_method[]"> Bkash
                         </label>
                        </div>
                        <div class="form-check form-check-inline">
                            <label class="form-check-label">
                              <input class="form-check-input" type="checkbox" id="DBBL" value="DBBL" name="pay_method[]"> DBBL
                            </label>
                        </div>
                        <div class="form-check form-check-inline">
                        <label class="form-check-label">
                            <input class="form-check-input" type="checkbox" id="Mkash" value="Mkash" name="pay_method[]"> Mkash
                        </label>
                        </div>
                        <div class="form-check form-check-inline">
                        <label class="form-check-label">
                          <input class="form-check-input" type="checkbox" id="SureCash" value="SureCash" name="pay_method[]"> SureCash
                        </label>
                        </div>
                    </div>
                </div>
                    <div class="form-group date mr10">
                    <label><p>Start Date:</p></label>
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
                    <label><p>End Date:</p></label>
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
                    <label>Event Banner</label>
                    <input type="file" name="image" class="btn btn-default" />
                    </div>
                    <div class="form-group">
                    <input type="submit" name="submit" value="Register" class="btn btn-success">
                    <input type="reset" name="submit" value="Reset" class="btn btn-info">
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