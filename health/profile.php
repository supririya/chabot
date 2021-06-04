<?php

require 'includes/common.php';

if(!isset($_SESSION['email']))
{
    header('location:index.php');
}

?>

<!DOCTYPE html>

<!--setting page for the website-->

<html>
    <head>
        <title>Profile | E - Health</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
        <script type="text/javascript" src="bootstrap/js/jquery-3.5.1.min.js"></script>
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
        <link type="text/css" rel="stylesheet" href="style.css?v=<?php echo time(); ?>">
    </head>
    
    <body>
        
        <?php
        include 'includes/header.php';
        ?>
<div class="image_detail">
        <div class="container-fluid">
            <div class="jumbotron text-center">
                <form action="" method:"POST">
                   <!-- <button class="btn btn-primary">Edit</button>-->

                </form>
                    <?php
                        $select = 'SELECT * FROM users WHERE email = "$_SESSION[email]"';
                        $select_query_result = mysqli_query($con, $select);
                        $row =  mysqli_fetch_array($select_query_result);

                    ?>
                    <h3>PROFILE</h3>
                
                <?php 
                    echo "<b>";
                     echo "<table class='table'>";
                        echo "<tr>";
                            echo "<td>";
                                echo "<b> Name : Supriya</b>";
                            echo "</td>";
                            echo "<td>";
                            
                            echo "</td>";
                        echo "</tr>";
                            

                        echo "<tr>";
                            echo "<td>";
                            echo "<b> Email : abcdef@gmail.com</b>";
                            echo "</td>";
                            echo "<td>";
                            
                            echo "</td>";
                        echo "</tr>";
                            

                        echo "<tr>";
                            echo "<td>";
                            echo "<b> City : Ooty</b>";
                            echo "</td>";
                            echo "<td>";
                                
                            echo "</td>";
                        echo "</tr>";
                           

                        echo "<tr>";
                            echo "<td>";
                            echo "<b> Mobile: 1234567890</b>";
                            echo "</td>";
                            echo "<td>";
                            echo "</td>";
                        echo "</tr>";

                        echo "<tr>";
                            echo "<td>";
                            echo "<b> Address :Ooty </b>";
                            echo "</td>";
                            echo "<td>";
                            echo "</td>";
                        echo "</tr>";

                        echo "<tr>";
                            echo "<td>";
                            echo "</td>";
                            echo "<td>";
                            echo "</td>";
                        echo "</tr>";


                     echo "</table>";
                     echo "</b>";

                ?>
                
            </div>    
        </div>
        
        
        
</div>
       

       

    </body>
</html>   