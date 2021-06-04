<?php
require '../includes/common.php';
?>

<!DOCTYPE html>



<html>
    <head>
        <title>Cardiologist | E - Health </title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css">
        <script type="text/javascript" src="../bootstrap/js/jquery-3.5.1.min.js"></script>
        <script type="text/javascript" src="../bootstrap/js/bootstrap.min.js"></script>
        <link type="text/css" rel="stylesheet" href="../style.css?v=<?php echo time(); ?>">
    </head>
    
    <body>
        
        <!--header with links-->
        
        <?php
        include 'header_1.php';
        ?>

        <div class="image_detail">
            <div class="container">
            <a href="../doctor.php" style="float:left;" class="btn btn-primary">Back</a>
                <div class="content_sp">
                    <h2 class="h2_sp">CARDIOLOGIST</h2>
                </div>
            </div>
        
            <div class="container">
                <div class="row text-center">
                    <div class="col-md-4 col-sm-8" id="profile">
                        <div class="thumbnail" style="width:100px;height:100px;">
                            <img src="../images/doc_1.jpg" alt="cardio">
                        </div> 
                        <h4>Dr. AM Karthik Kumar Dos (Cardiologist)</h4>
                        <a href="cardio_detail_1.php" class="btn btn-primary btn-block">Details</a>
                    </div>

                    <div class="col-md-4 col-sm-8" id="profile">
                       
                        <div class="thumbnail" style="width:100px;height:100px;">
                            <img src="../images/pic_girl.jpg" alt="cardio">
                        </div> 
                        <div class="caption">
                        <h4>Dr. Supriya Jayakumar (Cardiologist)</h4>
                        <a href="cardio_detail_2.php" class="btn btn-primary btn-block">Details</a>
</div>
                    </div>

                    <div class="col-md-4 col-sm-8" id="profile">
                        <div class="thumbnail" style="width:100px;height:100px;">
                            <img src="../images/pic_girl.jpg" alt="cardio">
                        </div> 
                        <h4>Dr. Vaishnavi (Cardiologist)</h4>
                        <a href="cardio_detail_3.php" class="btn btn-primary btn-block">Details</a>
                    </div>

                </div>
            </div>
        </div>
        
    </body>
</html>


