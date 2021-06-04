<?php

function check_if_appointment_booked($doctor_id)
{
    $con = mysqli_connect("localhost","root","");
    mysqli_select_db($con, "health");
    
    $user_id = $_SESSION['id'];
    
    $select = "SELECT * FROM doctor WHERE user_id = '$user_id' 
               AND doctor_id ='$doctor_id'
               AND status='Appointment booked' ";
    $select_result = mysqli_query($con, $select);
    
   if(mysqli_num_rows($select_result)>= 1)
   {
       return 1;
   }
   else
   {
       return 0; 
   }
    
}
