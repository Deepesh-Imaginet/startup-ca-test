<?php
include "common/connection.php"; 
$idx= $_GET['id'];
 $sqlloc1= "SELECT * FROM bus_obj WHERE sno='$idx' and status='1'";
 $resultloc1=mysqli_query($db,$sqlloc1);
 if(mysqli_num_rows($resultloc1)>0);
				while($rowloc1 = mysqli_fetch_assoc($resultloc1)) {
						$heading1=$rowloc1['heading'];
					}
$active= "obj" ;
$titlex= $heading1 ;

include "common/header.php"; 
$id= $_GET['id'];
// $test= str_replace('xyhgdfrtjmsdggbdmndef', '', $id);
// echo $test;
 $sqlloc= "SELECT * FROM bus_obj WHERE sno='$id' and status='1'";
 $resultloc=mysqli_query($db,$sqlloc);
 if(mysqli_num_rows($resultloc)>0);
				while($rowloc = mysqli_fetch_assoc($resultloc)) {						
	$heading=$rowloc['heading'];											
$desc=$rowloc['content'];
} ?>

<!-- 
			=============================================
				Theme Solid Inner Banner
			============================================== 
			-->
			<div class="solid-inner-banner servicetop" >
				<div class="col-md-6">
				<h2 class="page-title">Object Details</h2>
			</div>
				<ul class="page-breadcrumbs">
					<li><a href="index.html">Home</a></li>
					<li><i class="fa fa-angle-right" aria-hidden="true"></i></li>
					<li>Object Details</li>
				</ul>
			</div> <!-- /.solid-inner-banner -->

	<div class="theme-title-three " style="padding: 120px 70px;">
						<h2 class="title text-center"><?php echo $heading ?></h2>
						<p style="font-size: 17px;"><?php echo $desc ?></p>
					</div>


<?php include "common/footer.php"; ?>