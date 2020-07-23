 <?php
 include "../common/connection.php";

  if($_SERVER["REQUEST_METHOD"] == "POST") {


    
 $phone = mysqli_real_escape_string($db,$_POST['phone']);
  $email = mysqli_real_escape_string($db,$_POST['email']);
  

$countchecker="no";
 
 //if (strlen($username) < 6)
   // {
     //  $countchecker= "strlength";
    //}
  $sql1="SELECT * from tb_casignup  where  (email='$email') ";
$result1=mysqli_query($db,$sql1);
$count = mysqli_num_rows($result1);
if($count == 1) {
   $countchecker = "email";
}  
    

$sql1="SELECT * from tb_casignup  where  (phone='$phone') ";
$result1=mysqli_query($db,$sql1);
$count = mysqli_num_rows($result1);
if($count == 1) {
   $countchecker = "phone";
}
 

 if($countchecker =="email"){
  
 
//if $row is greater than 0, (means the email exists)
      $success="Your Email already exists"; ?>
 <meta http-equiv="refresh" content="0;URL='../signupca.php?response=0'" /> 
 <?php
}  else if($countchecker =="phone") {
   $success="Your Mobile No. already exists"; ?>
    <meta http-equiv="refresh" content="0;URL='../signupca.php?response=2'" />  
 <?php }
 
else
{



  $phone = mysqli_real_escape_string($db,$_POST['phone']);
        $email = mysqli_real_escape_string($db,$_POST['email']);
            $password = mysqli_real_escape_string($db,$_POST['password']);
 $name = mysqli_real_escape_string($db,$_POST['name']);
  $firmname = mysqli_real_escape_string($db,$_POST['firmname']);
   $ofcadd = mysqli_real_escape_string($db,$_POST['ofcadd']);    
    $state = mysqli_real_escape_string($db,$_POST['state']);    
     $city = mysqli_real_escape_string($db,$_POST['city']);    
      $pincode = mysqli_real_escape_string($db,$_POST['pincode']);    
       
         
      $gst = mysqli_real_escape_string($db,$_POST['gst']);    
       // $b_desc = mysqli_real_escape_string($db,$_POST['b_desc']);    
        $from = mysqli_real_escape_string($db,$_POST['from']); 
                $to = mysqli_real_escape_string($db,$_POST['to']);    
          $cop_date = mysqli_real_escape_string($db,$_POST['cop_date']);    
           $consultant = mysqli_real_escape_string($db,$_POST['consultant']);    
            $mid = mysqli_real_escape_string($db,$_POST['mid']);    
       
$w_hr=$from.'-'.$to;

       $serv=$_POST['serv'];
// start
$target1="../image/"; 
 
 $target1=$target1.uniqid().basename($_FILES['cop']['name']);
  
 //Getting Selected image Type
 $type1=pathinfo($target1,PATHINFO_EXTENSION);

 //Allow Certain File Format To Upload
 if($type1!='jpg' && $type1!='svg' && $type1!='JPEG' && $type1!='PNG'  && $type1!='GIF' && $type1!='jpeg'){
  echo "File format not supported";

 }else{
  //checking for Exsisting image File0
  if(file_exists($target1)){
   echo "File Already Exist";
  }else{
     
   //Moving The Uploaded image file to Desired Directory
  $uplaod_success1=move_uploaded_file($_FILES['cop']['tmp_name'],$target1);
}
}
// }
// end
  // start
$target2="../image/"; 
 
 $target2=$target2.uniqid().basename($_FILES['vcard']['name']);
  
 //Getting Selected image Type
 $type1=pathinfo($target2,PATHINFO_EXTENSION);

// Allow Certain File Format To Upload
 if( $type1!='jpg' && $type1!='svg' && $type1!='JPEG' && $type1!='PNG'  && $type1!='GIF' && $type1!='jpeg'){
  echo "File format not supported";
 }else{
  //checking for Exsisting image File0
  if(file_exists($target2)){
   echo "File Already Exist";
  }else{
     
   //Moving The Uploaded image file to Desired Directory
  $uplaod_success1=move_uploaded_file($_FILES['vcard']['tmp_name'],$target2);
// end
}
}
//}


$sqlco = "SELECT * FROM tb_casignup order by ca_id desc limit 1";
$resultco=mysqli_query($db,$sqlco);
 if(mysqli_num_rows($resultco)>0);

 while($rowco = mysqli_fetch_assoc($resultco)) {
$uid=$rowco['uid'];

}


$l1= "ca";


$a= mb_substr($uid, 0, 3);

$b = $a+1;
$c= 0;
$d=0;

if ($b<=99) {
  

if ($b>=10) {
  $f=$c.$b;
}
elseif ($b<10) {
$f=$d.$c.$b;  
}
}
else {
  $e=1;
  if($b>999){
    $b = $c.$d.$e;
   $f= $b;
  }
  elseif ($b>=100) {
$f=$b;
}
}

 $uid= $f.$l1.date("Ymd");

$sql = "INSERT INTO tb_casignup (uid,status,t_date,phone,email,password,name,firm_name,ofc_address,state,city,pincode,gst,w_hour,cop_file,visiting_card,cop_date,id_type,consultant,mid) 
                        VALUES ('$uid','0',NOW(),'$phone','$email','$password','$name','$firmname','$ofcadd','$state','$city','$pincode','$gst','$w_hr','$target1','$target2','$cop_date','1','$consultant','$mid')";

                
 if ($db->query($sql) === TRUE) {

$sqlcas= "SELECT * from tb_casignup where email='$email'";
$resultcas=mysqli_query($db,$sqlcas);


$rowcas = mysqli_fetch_assoc($resultcas) ;
$ca_id=$rowcas['ca_id'];

foreach($serv as $serv1)  
   {  
$sqlser = "INSERT INTO offered_services (ca_id, service_id,status) 
                        VALUES ('$ca_id','".$serv1."','1')";
$db->query($sqlser);
}
   $success ="Success";
   $_POST['submit']='';
 // $to = "pramodmishra714@gmail.com";
 //        $subject = 'New Ca Signup';
 //        $msg = $name." has just signed up";
 //        $email = mail($to,$subject,$msg);


$sqllogin = "SELECT * FROM tb_casignup where email='$email'";
$sqlserv= "SELECT * FROM offered_services where ca_id=$ca_id";
$serve= mysqli_query($db,$sqlserv);
while ($rowserv=mysqli_fetch_assoc($serve)) {
  $servid[]=$rowserv['service_id'];
  
}
      $resultlogin = mysqli_query($db,$sqllogin);

      if(mysqli_num_rows($resultlogin) < 1) {
        $response = array();
        $response['error'] = "True";
        echo json_encode($response);
        die;
      } else {
        $response = array();
        $rowco = mysqli_fetch_assoc($resultlogin) ;
        $response['error'] = "False";
        $response['data'] = $rowco;
        $response['service'] = $servid;
        echo json_encode($response);
      
        die;
      }


}  else {
 echo "Error: " . $sql . "<br>" . $db->error;	

}
}
} 

$response = array();
      
        $response['error'] = "True";
        $response['data'] = $success;
        echo json_encode($response);
        die;
  ?>

