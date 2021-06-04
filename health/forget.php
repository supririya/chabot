<?php
require 'includes/common.php';
?>

<!DOCTYPE html>



<html>
    <head>
        <title>Forget Password | E - Health </title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
        <script type="text/javascript" src="bootstrap/js/jquery-3.5.1.min.js"></script>
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
        <link type="text/css" rel="stylesheet" href="style.css">
    </head>
    
    <body>
        
        <!--header with links-->
        
        <?php
        include 'includes/header.php';
        ?>
        
         <div class="container">
            <div class="row">
                <div class="col-xs-4 col-xs-offset-4">
                    <div class="panels">
                    <div class="panel panel-primary" >
                        <div class="panel-heading">
                            <h4>Enter Your Email ID</h4>
                        </div>
                        <div class="panel-body">
                            
                        <form method="POST" action="forget_sub.php">
                            <div class="form-group">
                                <input type="email" class="form-control"  placeholder="Email" name="email" required = "true"><BR>
                                 <button type="submit" name="submit" class="btn btn-primary">SUBMIT</button>
                            </div>
                        </form>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
         </div>
