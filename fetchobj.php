<?php

//fetch_data.php

include('common/connection.php');


if(isset($_POST["action"]))
{
	$query = "
		SELECT * FROM bus_obj WHERE status = '1' ";


	// if(isset($_POST["minimum_price"], $_POST["maximum_price"]) && !empty($_POST["minimum_price"]) && !empty($_POST["maximum_price"]))
	// {
	// 	$query .= "
	// 	 AND product_price BETWEEN '".$_POST["minimum_price"]."' AND '".$_POST["maximum_price"]."'
	// 	";
	// }

	if(isset($_POST["input"]))
	{
		$input = implode("','", $_POST["input"]);
		if($input!=''){
		$query .= "
		 AND heading LIKE '%".$input."%'
		";}
	}
	
	$query.="limit 20";

	// $statement = $db->prepare($query);
	// $statement->execute();
	// $result = $statement->fetchAll();
	// $total_row = $statement->rowCount();
	$sql = mysqli_query($db,$query);

	$total_row = mysqli_num_rows($sql);
	while ( $result = mysqli_fetch_assoc($sql)) {
		$title = $result['heading'];
		$sno = $result['sno'];
		$content = $result['content'];

$query1 = "
		SELECT * FROM obj_tags WHERE status = '1' and obj_id='$sno' ";
$sql1 = mysqli_query($db,$query1);

	$total_row1 = mysqli_num_rows($sql1);
	

		$title = strip_tags($title);


if (strlen($title) > 25) {

    // truncate string
    $stringCut = substr($title, 0, 25);
    $endPoint = strrpos($title, ' ');

    //if the string doesn't contain any space then it will cut without word basis.
    $title = $endPoint? substr($stringCut, 0, $endPoint) : substr($stringCut, 0);

}
		$content = strip_tags($content);
if (strlen($content) > 105) {

    // truncate string
    $stringCut = substr($content, 0, 105);
    $endPoint = strrpos($content, ' ');

    //if the string doesn't contain any space then it will cut without word basis.
    $content = $endPoint? substr($stringCut, 0, $endPoint) : substr($stringCut, 0);

}
		echo '
			<div class="col-md-3 cardbody pointer" style="border-radius:0px;">
				

				<div class="container-fluid" style="padding: 0px; ">
					<div class="col-md-12 pd-0" >
					<img src="images/business/startup_ca_business12.png" height="150px;" width="100%">
					</div>
					<div class="col-md-12 pd-0">
				<a href="objdetails?id='.$sno.'"><p class="pt-20" style="padding-left:10px;color:black;font-weight:600;text-transform:uppercase;"> '.$title.'.. </p>
				<p class="objcontent" style="font-size:11px;line-height:15px;">'.$content.'...</p></a>
		<div class="col-md-12 pb-10">
		<p style="font-size:13px;line-height:20px;font-weight:600;">Related Tags</p>
		<ul class="tags">
		'; while ( $result = mysqli_fetch_assoc($sql1)) {
		$tags = $result['tags'];
  echo ' <li><a href="#" class="tag">'.$tags.'</a></li>'; }
 echo ' </ul>
		</div>
		<center><a href="#" class="mybtn1" style="margin-bottom:10px!important;width:90%;height:40px;padding-top:5px; border-radius:0px;">VIEW OBJECTIVE</a></center>
		</div>
		</div>
		</div>
		';
	}
	
}



?>

<!-- <script>
function getdata(str) {
    if (str.length == 0) {
        document.getElementById("c_modal").innerHTML = "";
        return;
    } else {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("c_modal").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET", "details.php?p=" + str, true);
        xmlhttp.send();
    }
}
</script> -->