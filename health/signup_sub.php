<?php

require 'includes/common.php';

$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$encryptpass = md5($password);
$contact = $_POST['contact'];
$city = $_POST['city'];
$address = $_POST['address'];

$select = "SELECT * FROM users WHERE email = '$email'";
$select_query_result = mysqli_query($con, $select);

if(mysqli_num_rows($select_query_result )> 0)
{
    echo 'Email Id is already registered';
    header('refresh:3; url:signup.php');
}
 else 
{
   $insert =  "INSERT INTO users (name,email,password,contact,city,address)
               VALUES ('$name','$email','$encryptpass','$contact','$city','$address')";
   $insert_query_result = mysqli_query($con, $insert);
   
   if($insert_query_result)
   {
      $user_id = mysqli_insert_id($con);
      $_SESSION['email']=$email;
      $_SESSION['id']= $user_id;
      $_SESSION['username']=$name;
      header('location:doctor.php');
   }
   else 
   {
       echo 'registration failed';
       header('refresh:3; url:signup.php');
   }
}
?>

