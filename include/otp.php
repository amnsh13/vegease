<?php


    include_once 'dbh.inc.php';


    if (isset($_POST['submit']))
    {

    $otp = mysqli_real_escape_string($conn, $_POST['otp']);


    //error handlers
    //check for empty fields
  if (empty($otp)){
      header("Location: ../otp.html?details=empty");
      exit();
    }else {
         //$sql = "INSERT INTO users(email, token) VALUES ('$email', '$random');";
         $sql = "select email from users where token = '".$otp."'";
        $result = $conn->query($sql);
         if($result->num_rows >= 1) {
          echo "<script>
          window.location.href='../reset.html';
          </script>";
         } else {

          // header("Location: ../otp.html?invalid otp");
          echo "<script>
          window.location.href='../otp.html?invalid_otp';
       document.getElementById('otperror').innerHTML += 'Query did not work';
      </script>";
           exit();

       }
     }
   }else {
      header("Location: ../forgot.html?status=failed");
   }



 ?>
