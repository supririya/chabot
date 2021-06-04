<?php

require 'includes/common.php';


if(isset($_POST['submit']))
{
    $email = $_POST['email'];
    $result = mysqli_query($con,"SELECT * FROM users WHERE email='" . $_POST['email'] . "'");
  
	$fetch_user_id=$row['email'];
	$email_id=$row['email'];
	$password=$row['password'];
	$pass=md5($password);
	if($email==$fetch_user_id) {
				$to = $email_id;
                $subject = "Password";
                $txt = "Your password is : $pass.";
                $headers = "From: supriracool@gmail.com" . "\r\n" .
                "CC: someone@gmail.com";
                mail($to,$subject,$txt,$headers);
			}
				else{
					echo 'invalid username';
				}
}
?>

