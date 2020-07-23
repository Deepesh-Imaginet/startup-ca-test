<?php 
include '../common/connection.php';
include '../common/method.php';
if (isset($_POST['action'])) {
    
 $service= $_POST['service']; 
 
  $phone=implode("", $_POST['phone']);

    $name=implode("", $_POST['name']); 
 
 $email=implode("", $_POST['email']); 
$fl=0;
    if($name!='' AND $email!='' AND $phone!='' AND $service!='' ){
        if(filter_var($phone, FILTER_VALIDATE_INT) === false ){
             echo "<img style='width: 110px;margin:0 auto;' src='images/wrong.gif'>
        
             <p  style='color:red;text-align:center;font-weight:bold;font-size:30px; margin-top: 25px;'>input valid phone no</p>";
        }
       
     
    
     else{

            
            if(filter_var($email, FILTER_VALIDATE_EMAIL)){
                   $sel = select_data("select * from client");
        while($seldata=mysqli_fetch_assoc($sel)){
            $email_id=$seldata['email'];
            $mobile=$seldata['phone'];
            if($email_id==$email || $mobile==$phone){
                $fl=1;
            }
        }
        if($fl==0){
        $s_id= 'SCA'.mt_rand(100000,999999);
        $sqlen = "INSERT INTO client(name,email,phone,status,client_id) VALUES('$name', '$email','$phone','0','$s_id')";
        $query = mysqli_query($db,$sqlen);
        if($query){
            $data = select_data_row("select cid from client where email = '$email'");
            $cid = $data['cid'];
            $sqlen1 = "INSERT INTO serv_req_client(c_id,s_id,status) VALUES('$cid', '$service','0')";
            $query1 = mysqli_query($db,$sqlen1);
            if($query1){
            echo "<img style='width: 200px;margin:0 auto;' src='images/checkmarksuccess.gif'>
            <p style='color:#77b43f;text-align:center;font-weight:bold;font-size:30px;'>Enquiry Submitted</p>";
        }
        else{
            echo "error";
        }
            
        }
        else{
            echo "<img style='width: 110px;margin:0 auto;' src='images/wrong.gif'>
           <p style='color:red;text-align:center;font-weight:bold;font-size:25px; margin-top: 18px;'>Something Went Wrong, Please Try Again later</p>";

            echo $db->error;
        }
    }
    else{
         $data = select_data_row("select cid from client where email = '$email' or phone='$phone'");
            $cid = $data['cid'];
            $sqlen1 = "INSERT INTO serv_req_client(c_id,s_id,status) VALUES('$cid', '$service','0')";
            $query1 = mysqli_query($db,$sqlen1);
            if($query1){
            echo "<img style='width: 200px;margin:0 auto;' src='images/checkmarksuccess.gif'>
            <p style='color:#77b43f;text-align:center;font-weight:bold;font-size:30px;'>Enquiry Submitted</p>";
            }
            }
            
        }
        else{
              echo "<img style='width: 110px;margin:0 auto;' src='images/wrong.gif'>
        
             <p  style='color:red;text-align:center;font-weight:bold;font-size:30px; margin-top: 25px;'>input valid email id</p>";  
            }

           
        }
    
}
else{
        echo"<img style='width: 110px;margin:0 auto;' src='images/wrong.gif'>
        
             <p  style='color:red;text-align:center;font-weight:bold;font-size:30px; margin-top: 25px;'>Please Fill All The Fields</p>";


    }
}
// function alert($msg) {
//     echo "<script type='text/javascript'>alert('$msg');</script>";
// }

  ?>