 <?php

    include_once("../classes/entities/Patient.class.php");
    include "./helpers/Patient/patient_report_card.inc.php";
    include "./helpers/Patient/patient_report_populator.inc.php";
    include "../static/Reusables/head.inc.php";
    include "../static/Reusables/navbar.inc.php";

    $patient = json_decode($_SESSION["Patient"]);

    ?>

 <!DOCTYPE html>
 <html>

 <?php head("My Reports") ?>

 <body>
     <?php navbar("Patient") ?>
     <div class="container" style="padding: 30px;">
         <div class="col">
             <div class="row" style="margin-top: 10px;margin-bottom: 10px;">
                 <div class="col">
                     <div class="card border-dark shadow-sm">
                         <div class="card-body">
                             <div class="row">
                                 <div class="col-xl-2"><img class="rounded-circle border border-dark" src="assets/img/blank-profile-picture-973460_1280.jpg" style="width: 150px;"></div>
                                 <div class="col-auto" style="font-size: 5px;padding-top: 40px;">
                                     <h4>Welcome <?php echo $patient->patient_name ?> </h4>
                                     <h4 style="font-weight: normal;font-size: 18px;">Here are your reports so far</h4>
                                 </div>
                                 <div class="col offset-xl-3 text-center d-xl-flex align-self-center justify-content-xl-center align-items-xl-center"><button class="btn btn-primary border rounded" type="button" style="width: 188px;height: 57px;font-size: 18px;">+New Appointment</button></div>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
             <div class="row" style="margin-top: 10px;margin-bottom: 10px;">
                 <div class="col" style="padding: 0px;">
                     <div style="padding-top: 10px;padding-bottom: 10px;">
                         <!--  -->
                         <?php
                            for ($i = 0; $i < count($reports); $i++) {
                                generate_patient_report($reports[$i]->TEST_NAME, $reports[$i]->REFERRED_BY, $reports[$i]->DIAGNOSED_BY, $reports[$i]->IMPRESSION, $reports[$i]->TECHNICIAN_NAME, $reports[$i]->REPORT_DATE, $reports[$i]->FILE1);
                            }
                            ?>
                     </div>
                 </div>
             </div>
         </div>
         <script src="assets/js/jquery.min.js"></script>
         <script src="assets/bootstrap/js/bootstrap.min.js"></script>
 </body>

 </html>