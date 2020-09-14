<?php


    include_once 'dbh.inc.php';


    if (isset($_POST['submit']))
    {

    $email = mysqli_real_escape_string($conn, $_POST['email']);

    //error handlers
    //check for empty fields
  if (empty($email)){
      header("Location: ../forgot.html?details=empty");
      exit();
    }else {
         $random = rand(100000, 999999);
         //$sql = "INSERT INTO users(email, token) VALUES ('$email', '$random');";
         $sql = "select email from users where email = '".$email."'";
        $result = $conn->query($sql);
         if($result->num_rows >= 1) {
           $to = "$email";
           $subject = "OTP code";
           $txt = "$random";
           $headers = "From: amanshah709@gmail.c";

           mail($to,$subject,$txt,$headers);

           $sql = "update users set token = '".$random."' where email = '".$email."';";
           mysqli_query($conn, $sql);

           //header("Location: ../otp.php");
          // exit();
          echo "<script>
          window.location.href='../otp.html';
          alert('otp generated');
          </script>";
         } else {

           header("Location: ../otp.html?else_executed");
           exit();

       }
     }
   }else {
      header("Location: ../forgot.html?status=failed");
   }



 ?>
