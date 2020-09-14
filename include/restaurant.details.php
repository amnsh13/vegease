<?php


    include_once 'dbh.inc.php';

    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $add = mysqli_real_escape_string($conn, $_POST['add']);
    $contact = mysqli_real_escape_string($conn, $_POST['contact']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $business = mysqli_real_escape_string($conn, $_POST['business']);

    //error handlers
    //check for empty fields
  if (empty($name) || empty($add) || empty($contact) /* || empty($email) || empty($land) || empty($crops)*/){
      header("Location: ../restaurant.html?details=empty");
      exit();
    }else {
     //check if input characters are opcache_invalid
    // if (!preg_match("/^[a-zA-Z]*$/", $name)) {
    //   header("Location: ../restaurant.html?details=invalid");
    //   exit();
     //}else {
       //check if email is opcache_invalid
      // if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        // header("Location: ../restaurant.html?details=email");
         //exit();
       //}else {
         $sql = "INSERT INTO restaurant_desk(rname, radd, rcontact, remail, rbusiness) VALUES ('$name', '$add', '$contact', '$email', '$business');";
         mysqli_query($conn, $sql);
         header("Location: ../restaurant.html?<script>alert("message sent successfully") </script>");

             </script>';
         exit();


       }
    // }



 ?>
