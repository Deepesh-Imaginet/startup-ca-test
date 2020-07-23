<?php
include '../common/method.php';
include '../common/connection.php';
if(isset($_REQUEST['add_comp'])){
	$list_id = "SCA".rand(100000,999999);
	if($_REQUEST['last_y_profit']!=''){
	$last_y_profit = $_REQUEST['last_y_profit'];
}
else{
	$last_y_profit = 0;
}
if($_REQUEST['last_y_loss']!=''){
	$last_y_loss = $_REQUEST['last_y_loss'];
}else{
	$last_y_loss=0;
}
if($_REQUEST['web_name']!=''){
	$web_name = $_REQUEST['web_name'];
}
else{
	$web_name ='no website';
}
	$company_name = mysqli_real_escape_string($db, $_REQUEST['company_name']);
	$est_price = mysqli_real_escape_string($db, $_REQUEST['estimated_p']);
	$last_y_turnover = mysqli_real_escape_string($db, $_REQUEST['last_y_turnover']);
	$other_registration = mysqli_real_escape_string($db, $_REQUEST['other_registration']);
	$copy_patent = mysqli_real_escape_string($db, $_REQUEST['copy_patent']);
	$govt_dues = mysqli_real_escape_string($db, $_REQUEST['govt_dues']);
	$cin = mysqli_real_escape_string($db, $_REQUEST['cin']);
	$industry = mysqli_real_escape_string($db, $_REQUEST['industry']);
	$city = mysqli_real_escape_string($db, $_REQUEST['city']);
	$gst = mysqli_real_escape_string($db, $_REQUEST['gst']);
	$trademark = mysqli_real_escape_string($db, $_REQUEST['trademark']);
	$entity_type = mysqli_real_escape_string($db, $_REQUEST['entity_type']);
	$date = mysqli_real_escape_string($db, $_REQUEST['date']);
	$roc = mysqli_real_escape_string($db, $_REQUEST['roc']);
	$employees = mysqli_real_escape_string($db, $_REQUEST['employees']);
	$business_object = mysqli_real_escape_string($db, $_REQUEST['business_object']);
	$abt_business = mysqli_real_escape_string($db, $_REQUEST['editor1']);
	$pin = mysqli_real_escape_string($db, $_REQUEST['pin']);
	$address = mysqli_real_escape_string($db, $_REQUEST['address']);

	$image = $_FILES['image']['name'];
	$target ='../image/';

	$target1 =uniqid().basename($image);
    move_uploaded_file($_FILES['image']['tmp_name'], $target.$target1);

    $data = "insert into company_adv (ca_id,address, com_name, last_y_turnover, l_y_profit, l_y_loss, industry, roc, city, pincode, entity_type, started_in,cin,  employees,  website_n, gst_num, patent_copy, trademark,  other_registration, govt_dues, busi_object,estimated_price, about_business, c_img, rating, status, d_time) values('$list_id','$address','$company_name','$last_y_turnover','$last_y_profit','$last_y_loss','$industry','$roc','$city','$pin','$entity_type','$date','$cin','$employees','$web_name','$gst','$copy_patent','$trademark','$other_registration','$govt_dues','$business_object','$est_price','$abt_business','$target1','0','0',NOW())";
    
	$ins = insert_data($data,"successfully","error");
	if($ins=="successfully"){
		?>
<script>
	window.alert("Ad posted successfully! your ad currently under review , wait for active");
</script>
		<?php 
		echo  '<meta http-equiv="refresh" content="0;URL=../company.php">';
	}
}



?>