<?php

require 'includes/common.php';

if(isset($_SESSION['email']))
    {
        header('location:doctor.php');
    }
?>


<!DOCTYPE html>

<!--to create a web page for health prediction website-->

<html>
    
    <head>
        <title> Welcome | E - Health </title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
        <script type="text/javascript" src="bootstrap/js/jquery-3.5.1.min.js"></script>
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
        <link type="text/css" rel="stylesheet" href="style.css?v=<?php echo time(); ?>">
    </head>
    
    <body>
        
        <!--header with links-->
        
            <?php
            include 'includes/header.php';
            ?>
        
            <div id="image_home">
                <div class="container">
                    <div id="content">
                        <h3>Are you suffering from cold??</h3><br>
                    
                        <a href="login.php" class="btn btn-danger btn-lg active">Consult a doctor</a>
                        <div class="inner_content" style="margin:10px;">
                            <a href="first_aid.php" class="btn btn-primary btn-lg active">First aid</a>
                            <a href="medicine.php" class="btn btn-primary btn-lg active">Medicines</a>
                        </div>
                    </div>
                    
                    
                </div>
            </div>
            
        
       <!--footer of the page-->
        
        
       
    </body>
</html>

 