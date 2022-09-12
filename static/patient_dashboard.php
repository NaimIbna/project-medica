 <?php

    include_once("../classes/entities/Patient.class.php");
    include "./helpers/Patient/patient_populator.inc.php";
    include "./helpers/Patient/patient_dashboard_cards.inc.php";
    include "../static/Reusables/head.inc.php";
    include "../static/Reusables/navbar.inc.php";

    $patient = json_decode($_SESSION["Patient"]);

    ?>

 <!DOCTYPE html>
 <html>

 <?php head("Patient Dashboard") ?>

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
                                     <h4>Welcome <?php echo $patient->patient_name ?></h4>
                                     <h4 style="font-weight: normal;font-size: 18px;">You have <?php
                                                                                                //  NEED TO FETCH COUNT OF UPCOMING APPOINTMENTS, CONSIDER PROCESSING APPOINTMENT COUNT BEFORE PAGE RENDER
                                                                                                echo count($appointments)

                                                                                                ?> appointments this week</h4>
                                 </div>
                                 <div class="col offset-xl-3 text-center d-xl-flex align-self-center justify-content-xl-center align-items-xl-center"><a href="./new_appointment.php"><button class="btn btn-primary border rounded" type="button" style="width: 188px;height: 57px;font-size: 18px;">+New Appointment</button></a></div>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
             <div>
                 <div style="padding: 10px;"><a class="btn btn-primary" data-toggle="collapse" aria-expanded="false" aria-controls="collapse-1" href="#collapse-1" role="button" style="padding: 15px 15 px;">My Appointments</a>
                     <div class="collapse" id="collapse-1">
                         <div class="row" style="margin: 10px -15px;">
                             <div class="col">
                                 <div class="card shadow-sm">
                                     <div class="card-body bg-light shadow-sm">
                                         <h4 class="text-dark card-title" style="padding: 20px;color: #ffffff;font-size: 30px;">Appointments</h4>

                                         <!-- APPOINTMENT CARD GENERATION -->

                                         <?php
                                            for ($i = 0; $i < count($appointments); $i++) {
                                                generate_appointment_card($appointments[$i]->DOCTOR_NAME, $appointments[$i]->REGION, $appointments[$i]->SL_NO, $appointments[$i]->ETA, $appointments[$i]->OPENING_TIME);
                                            }


                                            ?>
                                     </div>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
                 <div style="padding: 10px;"><a class="btn btn-primary" data-toggle="collapse" aria-expanded="false" aria-controls="collapse-2" href="#collapse-2" role="button">My Prescriptions</a>
                     <div class="collapse" id="collapse-2">
                         <div class="row" style="margin: 10px -15px;">
                             <div class="col">
                                 <div class="card shadow-sm">
                                     <div class="card-body bg-light shadow-sm">
                                         <h4 class="text-dark card-title" style="padding: 20px;color: #ffffff;font-size: 30px;">Prescriptions</h4>


                                         <!-- PRESCRIPTION CARD GENERATION -->
                                         <?php
                                            for ($i = 0; $i < count($prescriptions); $i++) {
                                                generate_prescription_card($prescriptions[$i]->DOCTOR_NAME, $prescriptions[$i]->MEDICINE, $prescriptions[$i]->NOTES, $prescriptions[$i]->PRESCRIBED_TESTS);
                                            }
                                            ?>
                                     </div>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
     <script src="assets/js/jquery.min.js"></script>
     <script src="assets/bootstrap/js/bootstrap.min.js"></script>
 </body>

 </html>