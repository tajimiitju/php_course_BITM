<?php
//session_start();
include_once '../include/header.php';
include_once '../../vendor/autoload.php';
$student = new App\Student\Student();
$students = $student->index();

?>

    <div id="page-wrapper" style="min-height: 349px;">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">All Product</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
        <div class="row">
<?php
$sl = 1;
foreach ($students as $student){
    ?>
            <div class="col-md-3 col-sm-6">
    		<span class="thumbnail">
      			<img src="<?php echo $student['image']?>" alt="" height="300" width="300">
                <h4>Nme: <?= $student['Product_title']?></h4>
      			<div class="ratings">
                    <span class="glyphicon glyphicon-star"></span>
                    <span class="glyphicon glyphicon-star"></span>
                    <span class="glyphicon glyphicon-star"></span>
                    <span class="glyphicon glyphicon-star"></span>
                    <span class="glyphicon glyphicon-star-empty"></span>
                </div>
                <hr>
      			<p>Category: </p><?= $student['Category']?>
                <hr>
                <p>Description: </p><?= $student['Description']?>
                <hr class="line">
      			<div class="row">
      				<div class="col-md-6 col-sm-6">
      					<p class="price"><?= $student['Product_price']?>$</p>
      				</div>
      				<div class="col-md-6 col-sm-6">
      				 <a href="view/student/view.php?id=<?php echo $student['id']?>" target="_blank" >	<button class="btn btn-info right" > Details</button></a>
                    <td class="center">
                                            <a href="view/student/view.php?id=<?php echo $student['id']?>">view</a> |
                                            <a href="view/student/edit.php?id=<?php echo $student['id']?>">Edit</a> |
                                            <a class="text-danger" href="view/student/delete.php?id=<?php echo $student['id']?>">Delete</a>
                                        </td>
      				</div>

      			</div>
    		</span>
            </div>
<?php }?>


            </div>
            <!-- END PRODUCTS -->
        </div>
        <!-- /.row -->
    </div>

<?php
include_once '../include/footer.php';
?>