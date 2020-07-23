<?php

//fetch_data.php

include('../common/connection.php');


if(isset($_REQUEST["q"]))
{
	$lid = $_REQUEST["q"];
	$query = "
		SELECT * FROM launchpad WHERE status = '1' and l_id='$lid'";


	$sql = mysqli_query($db,$query);

	$total_row = mysqli_num_rows($sql);
	$result = mysqli_fetch_assoc($sql);
		$title = $result['title'];
		$sno = $result['l_id'];
		$content = $result['description'];
		$image = $result['l_img'];
		$logo = $result['logo'];
		$link = $result['link'];
		

$query1 = "
		SELECT * FROM launch_tags WHERE status = '1' and l_id='$sno'";
$sql1 = mysqli_query($db,$query1);

	$total_row1 = mysqli_num_rows($sql1);
	

		$title = strip_tags($title);
echo "<div class='row'>
<div class='col-md-12'><center><h4>".$title."</h4></center></div>
<div class='col-md-12'><center><p>".$content."</p></center></div>

</div>";
}
?>
