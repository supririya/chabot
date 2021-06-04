<?php

require 'includes/common.php';

$email = $_POST['email'];
$password = $_POST['password'];
$encryptpass = md5($password);

$select = "SELECT id,email FROM users WHERE email = '$email' AND password='$encryptpass'";
$select_query_result = mysqli_query($con, $select);

if(mysqli_num_rows($select_query_result ) == 0)
{
   
    header('location: login.php?error=1');
}
 else 
{
    $row = mysqli_fetch_array($select_query_result);
    $_SESSION['email']=$row['email'];
    $_SESSION['id']= $row['id'];
    $_SESSION['username']=$row['name'];
    

    if(isset($_SESSION['email']))
    {
        header('location:doctor.php');
    }
}

?>

