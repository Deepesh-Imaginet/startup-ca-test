<?php 
 include "../common/connection.php";

 if (isset($_POST['signup'])) {

//  $fname = $_POST['fname'];
// $lname = $_POST['lname'];
// $username = $_POST['username'];
// $phone = $_POST['phone'];
// $email = $_POST['email'];
// $password = $_POST['password'];

// echo $fname.'<br>'.$lname.'<br>'.$username.'<br>'.$phone ;

  if($_SERVER["REQUEST_METHOD"] == "POST") {


    
 $phone = mysqli_real_escape_string($db,$_POST['phone']);
  $email = mysqli_real_escape_string($db,$_POST['email']);
  

$countchecker="no";
 
 //if (strlen($username) < 6)
   // {
     //  $countchecker= "strlength";
    //}
  $sql1="SELECT * from tb_signup  where  (email='$email') ";
$result1=mysqli_query($db,$sql1);
$count = mysqli_num_rows($result1);
if($count == 1) {
   $countchecker = "email";
}  
    

$sql1="SELECT * from tb_signup  where  (phone='$phone') ";
$result1=mysqli_query($db,$sql1);
$count = mysqli_num_rows($result1);
if($count == 1) {
   $countchecker = "phone";
}
 

 if($countchecker =="email"){
  
 
//if $row is greater than 0, (means the email exists)
      $success="Your Email already exists";  
}  else if($countchecker =="phone") {
   $success="Your Mobile No. already exists";  
  }
 
else
{



  $fname = mysqli_real_escape_string($db,$_POST['fname']);
        $lname = mysqli_real_escape_string($db,$_POST['lname']);
            $username = mysqli_real_escape_string($db,$_POST['username']);
 $phone = mysqli_real_escape_string($db,$_POST['phone']);
  $email = mysqli_real_escape_string($db,$_POST['email']);
   $password = mysqli_real_escape_string($db,$_POST['password']);    
     $sucess="";


$sqlco = "SELECT * FROM tb_signup order by id desc limit 1";
$resultco=mysqli_query($db,$sqlco);
 if(mysqli_num_rows($resultco)>0);

 while($rowco = mysqli_fetch_assoc($resultco)) {
$uid=$rowco['uid'];

}


$l1= $fname[0];
$l2= $lname[0];

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

 $uid= $f.$l1.$l2.date("Ymd") ;

$sql = "INSERT INTO tb_signup (status,dtime,fname,lname,username,phone,email,password,uid) 
                        VALUES ('1',NOW(),'$fname','$lname','$username','$phone','$email','$password','$uid')";

                 
 if ($db->query($sql) === TRUE) {


   $success ="Success";
   $_POST['submit']='';

// $email=  $_POST['email'];
// $password= $_POST['password'];


// $regarray= array($email,$password,$success);
//  $response = array();
//         // $regarray = mysqli_fetch_assoc($resultlogin);
//         $response['error'] = "False";
//         $response['data'] = $regarray;
//         echo json_encode($response);
//         die;

 
 
    $sqllogin = "SELECT * FROM tb_signup order by id desc limit 1";

      $resultlogin = mysqli_query($db,$sqllogin);
      if(mysqli_num_rows($resultlogin) < 1) {
        $response = array();
        $response['error'] = "True";
        echo json_encode($response);
        die;
      } else {
        $response = array();
        $rowco = mysqli_fetch_assoc($resultlogin);
        $response['error'] = "False";
        $response['data'] = $rowco;
        echo json_encode($response);
        die;
      }


}  
else {
 echo "Error: " . $sql . "<br>" . $db->error;	

} 
}

}

}

$response = array();
      
        $response['error'] = "True";
        $response['data'] = $success;
        echo json_encode($response);
        die;
  ?>

