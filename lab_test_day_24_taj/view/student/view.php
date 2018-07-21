<?php
//session_start();

include_once '../include/header.php';
include_once '../../vendor/autoload.php';
$student = new App\Student\Student();
//$students = $student->index();

$student = $student->view($_GET['id']);

?>

    <div id="page-wrapper" style="min-height: 349px;">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">The product you have selected</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
        <div class="row">

                <div class="col-md-3 col-sm-6">
    		<span class="thumbnail">
      			<img src="https://s12.postimg.org/41uq0fc4d/item_2_180x200.png" alt="...">
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


      			</div>
    		</span>
                </div>




        </div>
        <!-- /.row -->
    </div>

<?php
include_once '../include/footer.php';
?>