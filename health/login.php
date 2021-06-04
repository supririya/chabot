<?php
require 'includes/common.php';
?>

<!DOCTYPE html>

<!--login page for the website-->

<html>
    <head>
        <title>Login | E - Health </title>
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
        
        <!--panel for the login -->
        
        <div class="container">
            <div class="row">
                <div class="col-xs-4 col-xs-offset-4">
                    <div class="panels">
                    <div class="panel panel-primary" >
                        <div class="panel-heading">
                            <h4>LOGIN</h4>
                        </div>
                        <div class="panel-body">
                            <p class="text-warning">
                                <i> Login to make an appointment</i>
                            </p>
                        <form method="POST" action="login_sub.php">
                            <div class="form-group">
                                <input type="email" class="form-control"  placeholder="Email" name="email" required = "true">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" placeholder="Password" name="password" required = "true" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}">
                            </div>
                            <button type="submit" name="submit" class="btn btn-primary">Login</button>
                        </form><br/>
                        
                        <?php

                        if(isset($_GET['error'])==true)
                        {
                            echo '<p><span><font color="red" align="center">Invalid E-mail id and Password </font> </span></p>';
                        }

                        ?>
                        <i><a href="forget.php">Forget password?</a></i>
                        
                        </div>
                        <div class="panel-footer">
                            <p>Don't have an account? <a href="signup.php">Register</a></p>
                        </div>
                    </div>
                </div>
              </div>
           </div>
        </div>
        
        
        <!--footer of the page-->
        
         
        
    </body>
</html>


