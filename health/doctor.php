<?php
require 'includes/common.php';
?>

<!DOCTYPE html>

<!--doctor page for the website-->

<html>
    <head>
        <title>Doctors | E - Health</title>|
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
        <script type="text/javascript" src="bootstrap/js/jquery-3.5.1.min.js"></script>
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
        <link type="text/css" rel="stylesheet"  href="style.css?v=<?php echo time(); ?>">
    </head>
    
    <body>
        
        
        <?php
        include 'includes/header.php';
        ?>
        
        
        <!--doctors-->
        <div class="image_doc">
        <div class="container">
            <div class="content_doc">
                    <h2 class="h2_doc">SPECIALISTS</h2>
                   
                        <div class="row text-center">
                            <div class="col-md-3 col-sm-6">
                                <div class="thumbnail">
                                    <img src="images/cardio_1.jpeg" alt="cardio">
                                    <div class="caption">
                                        <h3>CARDIOLOGIST</h3>
                                        <a href="special/cardio.php" class="btn btn-primary btn-block">View doctors</a>
                                    </div>
                                </div> 
                            </div>

                            <div class="col-md-3 col-sm-6">
                                <div class="thumbnail">
                                    <img src="images/neuro_1.jpg" alt="neuro">
                                    <div class="caption">
                                        <h3>NEUROLOGIST</h3>
                                        <a href="special/neuro.php" class="btn btn-primary btn-block">View doctors</a>
                                    </div>
                                </div> 
                            </div>

                            <div class="col-md-3 col-sm-6">
                                <div class="thumbnail">
                                    <img src="images/dentist_1.jpeg" alt="dentist">
                                    <div class="caption">
                                        <h3>DENTIST</h3>
                                        <a href="special/dentist.php" class="btn btn-primary btn-block">View doctors</a>
                                    </div>
                                </div> 
                            </div>

                            <div class="col-md-3 col-sm-6">
                                <div class="thumbnail">
                                    <img src="images/dermis_1.jpg" alt="cardio">
                                    <div class="caption">
                                        <h3>DERMATOLOGIST</h3>
                                        <a href="special/dermis.php" class="btn btn-primary btn-block">View doctors</a>
                                    </div>
                                </div> 
                            </div>
                        </div>

                        <br>
                        <br>

                        <div class="row text-center">
                            <div class="col-md-3 col-sm-6">
                                <div class="thumbnail">
                                    <img src="images/allergy_1.jpg" alt="allergy">
                                    <div class="caption">
                                        <h3>ALLERGIST</h3>
                                        <a href="special/allergy.php" class="btn btn-primary btn-block">View doctors</a>
                                    </div>
                                </div> 
                            </div>

                            <div class="col-md-3 col-sm-6">
                                <div class="thumbnail">
                                    <img src="images/nephron_1.jpg" alt="nephron">
                                    <div class="caption">
                                        <h3>NEPHROLOGIST</h3>
                                        <a href="special/nephron.php" class="btn btn-primary btn-block">View doctors</a>
                                    </div>
                                </div> 
                            </div>

                            <div class="col-md-3 col-sm-6">
                                <div class="thumbnail">
                                    <img src="images/pedia_1.jpg" alt="cardio">
                                    <div class="caption">
                                        <h3>PEDIATRICIANS</h3>
                                        <a href="special/pedia.php" class="btn btn-primary btn-block">View doctors</a>
                                    </div>
                                </div> 
                            </div>

                            <div class="col-md-3 col-sm-6">
                                <div class="thumbnail">
                                    <img src="images/psycha_1.jpg" alt="psycha">
                                    <div class="caption">
                                        <h3>PSYCHIATRISTS</h3>
                                        <a href="special/psycha.php" class="btn btn-primary btn-block">View doctors</a>
                                    </div>
                                </div> 
                            </div>
                        </div>
                     </div>
        </div>
</div>
    </body>
</html>
