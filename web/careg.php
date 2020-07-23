<?php 
$ark_root = "http://".$_SERVER['HTTP_HOST'];
$ark_root .= str_replace(basename($_SERVER['SCRIPT_NAME']),"",$_SERVER['SCRIPT_NAME']);
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
  // send email to admin
     
  // end email

$sqlcas= "SELECT * from tb_casignup where email='$email'";
$resultcas=mysqli_query($db,$sqlcas);


 $rowcas = mysqli_fetch_assoc($resultcas);
 $ca_id=$rowcas['ca_id'];
foreach($serv as $serv1)  
   {  
$sqlser = "INSERT INTO offered_services (ca_id, service_id,status) 
                        VALUES ('$ca_id','".$serv1."','1')";
$db->query($sqlser);
}
//   $success ="Success";
//   $_POST['submit']='';
//     $to = "pramodmishra714@gmail.com";
//         $subject = 'New Ca Signup';
//         $msg = $name." has just signed up";
//         $email = mail($to,$subject,$msg);
        
    // email

     $to ="pramodmishra714@gmail.com";
      $headers = "From: " . strip_tags("StartupCA-info@startupca.org") . "\r\n";
    $emailid = urlencode(base64_encode($email));
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
   
  
    $subject = 'New CA Signup';
       $message = '<html>
<head>
<title></title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<style type="text/css">
    /* FONTS */
    @media screen {
        @font-face {
          font-family: "Lato";
          font-style: normal;
          font-weight: 400;
          src: local("Lato Regular"), local("Lato-Regular"), url(https://fonts.gstatic.com/s/lato/v11/qIIYRU-oROkIk8vfvxw6QvesZW2xOQ-xsNqO47m55DA.woff) format("woff");
        }
        
        @font-face {
          font-family: "Lato";
          font-style: normal;
          font-weight: 700;
          src: local("Lato Bold"), local("Lato-Bold"), url(https://fonts.gstatic.com/s/lato/v11/qdgUG4U09HnJwhYI-uK18wLUuEpTyoUstqEm5AMlJo4.woff) format("woff");
        }
        
        @font-face {
          font-family: "Lato";
          font-style: italic;
          font-weight: 400;
          src: local("Lato Italic"), local("Lato-Italic"), url(https://fonts.gstatic.com/s/lato/v11/RYyZNoeFgb0l7W3Vu1aSWOvvDin1pK8aKteLpeZ5c0A.woff) format("woff");
        }
        
        @font-face {
          font-family: "Lato";
          font-style: italic;
          font-weight: 700;
          src: local("Lato Bold Italic"), local("Lato-BoldItalic"), url(https://fonts.gstatic.com/s/lato/v11/HkF_qI1x_noxlxhrhMQYELO3LdcAZYWl9Si6vvxL-qU.woff) format("woff");
        }
    }
    
    /* CLIENT-SPECIFIC STYLES */
    body, table, td, a { -webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%; }
    table, td { mso-table-lspace: 0pt; mso-table-rspace: 0pt; }
    img { -ms-interpolation-mode: bicubic; }

    /* RESET STYLES */
    img { border: 0; height: auto; line-height: 100%; outline: none; text-decoration: none; }
    table { border-collapse: collapse !important; }
    body { height: 100% !important; margin: 0 !important; padding: 0 !important; width: 100% !important; }

    /* iOS BLUE LINKS */
    a[x-apple-data-detectors] {
        color: inherit !important;
        text-decoration: none !important;
        font-size: inherit !important;
        font-family: inherit !important;
        font-weight: inherit !important;
        line-height: inherit !important;
    }

    /* ANDROID CENTER FIX */
    div[style*="margin: 16px 0;"] { margin: 0 !important; }
</style>
</head>
<body style="background-color: #f4f4f4; margin: 0 !important; padding: 0 !important;">



<table border="0" cellpadding="0" cellspacing="0" width="100%">
    <!-- LOGO -->
    <tr>
        <td bgcolor="#7c72dc" align="center">
            <table border="0" cellpadding="0" cellspacing="0" width="480" >
                <tr>
                    <td align="center" valign="top" style="padding: 40px 10px 40px 10px;">
                        
                            <img alt="Logo" src="'.strip_tags($ark_root).'../images/startupca.png"  border="0">
                        </a>
                    </td>
                </tr>
            </table>
        </td>
    </tr>
    <!-- HERO -->
    
    <tr>
        <td bgcolor="#7c72dc" align="center" style="padding: 0px 10px 0px 10px;">
            <table border="0" cellpadding="0" cellspacing="0" width="480" >
                <tr>
                    <td bgcolor="#ffffff" align="center" valign="top" style="padding: 40px 20px 20px 20px; border-radius: 4px 4px 0px 0px; color: #111111;  font-size: 48px; font-weight: 400; letter-spacing: 4px; line-height: 48px;">
                      <h1 style="font-size: 28px; font-weight: 400; margin: 0;">New CA Signup!</h1>
                    </td>
                </tr>
            </table>
        </td>
    </tr>
    <!-- COPY BLOCK -->
    <tr>
        <td bgcolor="#f4f4f4" align="center" style="padding: 0px 10px 0px 10px;">
            <table border="0" cellpadding="0" cellspacing="0" width="480" >
              <!-- COPY -->
              <tr>
                <td bgcolor="#ffffff" align="left" style="padding:15px 30px 30px 30px; color: #666666;  font-size: 15px; font-weight: 400; line-height: 25px;" >
                  <p style="margin: 0;">A New CA Has Just Signed Up, CA Username <strong>'.strip_tags($name).'<br>'.strip_tags($email).'</strong></p>
                </td>
              </tr>
              <!-- BULLETPROOF BUTTON -->
              <tr>
                <td bgcolor="#ffffff" align="left">
                  <table width="100%" border="0" cellspacing="0" cellpadding="0">
                    <tr>
                      <td bgcolor="#ffffff" align="center" style="padding: 20px 30px 60px 30px;">
                        <table border="0" cellspacing="0" cellpadding="0">
                          <tr>
                           
                            <form >
                              <input type="hidden" name="email" value="<?php echo $email?>">
                              <td align="center" style="border-radius: 3px;" bgcolor="#7c72dc"><a href="'.strip_tags($ark_root).'../admin/login" style="font-size: 15px; font-family: Helvetica, Arial, sans-serif; color: #ffffff; text-decoration: none; padding: 7px 10px; border-radius: 2px; border: 1px solid #7c72dc; display: inline-block;" id="gen_pass">Login</a>
                              </td>
                            </form>
                          </tr>
                        </table>
                      </td>
                    </tr>
                  </table>
                </td>
              </tr>
            </table>
        </td>
    </tr>
   
   
</table>

</body>
</html>';

     $mail =  mail($to, $subject, $message, $headers);
     if ($mail) {
         "Email has been sent";

     }
     else{
         "sorry something went wrong";
     }     
        
        
        
        
        
        
        
        
        
        
?>

 <meta http-equiv="refresh" content="0;URL='../admin/login.php?response=1'" />    
<?php
}  
 else {
 echo "Error: " . $sql . "<br>" . $db->error;	
 ?>
 <meta http-equiv="refresh" content="0;URL='../signupca.php?response=3'" />    
<?php
} 
}

}


?>

