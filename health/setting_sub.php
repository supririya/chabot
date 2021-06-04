<?php

require 'includes/common.php';

if(!isset($_SESSION['email']))
{
    header('location:index.php');
}

$oldpass = $_POST['oldpassword'];
$encrypt_old = md5($oldpass);

$newpass = $_POST['newpassword'];
$encrypt_new = md5($newpass);

$retypepass = $_POST['retypepassword'];
$encrypt_retype = md5($retypepass);

$select = "SELECT password FROM users WHERE email='".$_SESSION['email']."'";
$select_query_result = mysqli_query($con, $select);
$row = mysqli_fetch_array($select_query_result);
$originalpass = $row['password'];

if($encrypt_retype != $encrypt_new)
{
    echo "<h1>Password didn't match</h1>";
    header('refresh:3; url:setting.php');
}
else
{
   if($originalpass == $encrypt_old)
   {
        $update = "UPDATE users SET password='$encrypt_new' WHERE email='".$_SESSION['email']."'";
        $update_result = mysqli_query($con, $update);
        echo "<h1>Password Changed</h1>";
        header('refresh:3; url:setting.php');
   }
   else
   {
       echo "<h1>Wrong Old Password</h1>";
       header('refresh:3; url:setting.php');
   }
}

?>