<?php
session_start();
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
  include("../common/connection.php");



    if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 

     $email = mysqli_real_escape_string($db,$_POST['email']);
   $password = mysqli_real_escape_string($db,$_POST['password']); 
 
    $sqllogin = "SELECT * FROM tb_signup WHERE email = '$email' and password = '$password'";

      $resultlogin = mysqli_query($db,$sqllogin);
      if(mysqli_num_rows($resultlogin) < 1) {
        $response = array();
        $response['error'] = "true";
        echo json_encode($response);
        die;
      } else {
        $response = array();
        $rowco = mysqli_fetch_assoc($resultlogin);
        $response['error'] = "false";
        $response['data'] = $rowco;
        echo json_encode($response);
        die;
      }
      }

?>

