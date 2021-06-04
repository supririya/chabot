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

        <?php
        include 'check_appoint.php';
        ?>

        <div class="image_white">
            <div class="container">
            <a href="cardio.php" style="float:left;" class="btn btn-primary">Back</a>

                <div class="content_detail">
                    <h2 class="h2_sp">Dr. AM Karthik Kumar Dos (Cardiologist) - M.Diab, D.Card</h2>
                    <div class="thumbnail center-block" style="width:100px;height:100px;">
                        <img src="../images/doc_1.jpg" alt="cardio">
                    </div> 

                        <?php if(!isset($_SESSION['email']))
                             {
                             ?>
                            <p><a href="login.php" role="button" class="btn btn-primary">Book appointment</a></p>
                            <?php
                             }
                             else
                             {
                                 if(check_if_appointment_booked(1))
                                 {
                                 echo '<a href="#" class="btn btn-success" disabled> Appointment Booked </a><br>';
                                 echo '<br>';
                                 echo '<p><span><font color="#800000" align="center">Your appointment is booked</font> </span></p>';
                                 }
                                 else
                                 {
                                     ?>
                                     <a href="appoint_add.php?id=1" name="add" value="add" class="btn btn-primary">Book appointment</a>
                                    <?php
                                 }
                             }
                        ?>
                </div>
            </div>
        
            <div class="container" style="color:#000;">
                <div class="row text-center">
                    <div class="col-md-6 col-sm-12">
                        
                        <h3>About Dr. AM Karthik Kumar Dos</h3>
                            <p>Cardio-Diabetologist</p><br>
                            <p>Dr. Karthik Kumar. AM says "I am a Cardio -diabetologist with 14 years of experience. with great exposure in ECG,ECHO,TREADMILL TEST. ABPM, 24 hour sugar monitoring etc."</p>
                        
                    </div>

                    <div class="col-md-6 col-sm-12">
                    <h3>Clinic Address & Location</h3>
                    <br>
                   <h4 class="h4_det">
                      <ul style="text-align:left; list-style: none;">
                     <li class="glyphicon glyphicon-home">&nbsp;&nbsp;Smile Health Clinic</li><br>
                     <li class="glyphicon glyphicon-map-marker">&nbsp;&nbsp;VKK Menon Rd,Coimbatore</li><br>
                     <li class="glyphicon glyphicon-earphone">&nbsp;&nbsp;91-9952269805</li><br>
                     <li class="glyphicon glyphicon-time">&nbsp;&nbsp;10-00 am to 08-00 pm</li><br>
                          </ul>
                       </h4>     
                        
                    </div>
                </div>
             </div>
                



        </div>
        
    </body>
</html>


