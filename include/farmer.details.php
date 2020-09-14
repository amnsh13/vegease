<?php


    include_once 'dbh.inc.php';
    if (isset($_POST['submit']))
    {

    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $add = mysqli_real_escape_string($conn, $_POST['add']);
    $contact = mysqli_real_escape_string($conn, $_POST['contact']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $land = mysqli_real_escape_string($conn, $_POST['land']);
    $crop = $_POST['crop'];
    $harvest = $_POST['harvest'];

    //error handlers
    //check for empty fields
  if (empty($name) || empty($add) || empty($contact) /* || empty($email) || empty($land) || empty($crops)*/){
      header("Location: ../farmer.html?details=empty");
      exit();
    }else {
     //check if input characters are opcache_invalid
    // if (!preg_match("/^[a-zA-Z]*$/", $name)) {
    //   header("Location: ../farmer.html?details=invalid");
    //   exit();
     //}else {
       //check if email is opcache_invalid
       //if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        /// header("Location: ../farmer.html?details=email");
        // exit();
       //}else {
       foreach ((array)$crop as $key => $value) {
         $sql = "INSERT INTO farmer_desk(fname, fadd, fcontact, femail, fland, fcrop, fharvest) VALUES ('$name', '$add', '$contact', '$email', '$land', '".$conn->real_escape_string($value)."','".$conn->real_escape_string($harvest[$key])."');";
         mysqli_query($conn, $sql);
       }
       header("Location: ../farmer.html?details=success");
       exit();

       }
     //}
   }else {
      header("Location: ../farmer.html");
   }



 ?>
