<?php 
include '../common/connection.php';
include '../common/method.php';
if (isset($_REQUEST['pass'])) {
    
 $pass= mysqli_real_escape_string($db,$_REQUEST['pass']); 
$c_pass= mysqli_real_escape_string($db,$_REQUEST['cpass']);
 $email= $_REQUEST['email']; 
 

    if($pass!='' AND $c_pass!=''){
        if($pass == $c_pass){
        $select = "select * from client where email='$email'";
        $query1 = mysqli_query($db,$select);
        $res=mysqli_fetch_assoc($query1);
        $data = $res['pass'];
        $email1 = urlencode(base64_encode($email));
        if($data==''){
        $upd = "UPDATE client set pass='$c_pass' where email = '$email'";
        $query = mysqli_query($db,$upd);

        if($query){
           
            echo "<img style='width: 200px;margin:0 auto;' src='images/checkmarksuccess.gif'>
            <p style='color:#77b43f;text-align:center;font-size:20px;'> Password Generated Successfully! you will be redirect in 3...</p>
           ";
            echo '<meta http-equiv="refresh" content="4;URL=login?id='.$email1.'" />';
        }
    }
    else{
        echo "<img style='width: 100px;margin:0 auto;' src='images/wrong.gif'>
            <p style='color:red;text-align:center;font-size:20px;'> You Have Already generated your pasword</p>
           ";
         echo '<meta http-equiv="refresh" content="4;URL=login?id='.$email1.'" />';
    }
        
        }  
        else{
             echo "";
        }
        }
       
    else{
        echo'
        
             <div class="alert alert-danger alert-dismissible" style="width 80%">
    <button type="button" class="close" data-dismiss="alert">&times;</button>
     Please Fill Both Fields
  </div>';


    }
}
// function alert($msg) {
//     echo "<script type='text/javascript'>alert('$msg');</script>";
// }

  ?>