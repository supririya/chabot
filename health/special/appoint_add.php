<?php

require '../includes/common.php';

$user_id = $_SESSION['id'];
$doctor_id = $_GET['id'];
$insert_query = "INSERT INTO doctor(user_id, doctor_id, status)
           VALUES ('$user_id','$doctor_id','Appointment booked')";
$insert_result = mysqli_query($con, $insert_query);

if($insert_result)
{
    header('location:doctor.php');
}
else
{
    echo 'connection error';
    
}
?>

