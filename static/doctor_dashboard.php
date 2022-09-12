 <?php


    include "./helpers/Doctor/doctor_populator.inc.php";
    // TODO: HELPERS!
    include "./helpers/Doctor/doctor_dashboard_cards.inc.php";
    include_once("../classes/entities/Doctor.class.php");
    $doctor = json_decode($_SESSION["Doctor"]);
    ?>

 <!DOCTYPE html>
 <html>

 <head>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
     <title>Doctor Dashboard</title>
     <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
     <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700">
     <link rel="stylesheet" href="assets/css/styles.min.css">
 </head>

 <body>
     <nav class="navbar navbar-light navbar-expand-md navigation-clean">
         <div class="container"><a class="navbar-brand" href="#">Project Medica</a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
             <div class="collapse navbar-collapse" id="navcol-1">
                 <ul class="nav navbar-nav ml-auto">
                     <li class="nav-item" role="presentation"><a class="nav-link text-danger" href="../api/logout.php">Logout</a></li>
                 </ul>
             </div>
         </div>
     </nav>
     <div class="container" style="padding: 30px;">
         <div class="col">
             <div class="row" style="margin-top: 10px;margin-bottom: 10px;">
                 <div class="col">
                     <div class="card border-dark shadow-sm">
                         <div class="card-body">
                             <div class="row">
                                 <div class="col-xl-2"><img class="rounded-circle border border-dark" src="assets/img/blank-profile-picture-973460_1280.jpg" style="width: 150px;"></div>
                                 <div class="col-auto" style="font-size: 5px;padding-top: 40px;">
                                     <h4>Welcome <?php echo $doctor->doctor_name ?></h4>
                                     <h4 style="font-weight: normal;font-size: 18px;"><?php echo $doctor->specialization ?></h4>
                                     <h4 style="font-weight: normal;font-size: 18px;"><?php echo $hospital_name ?></h4>
                                 </div>
                                 <div class="col offset-xl-3 text-center d-xl-flex align-self-center justify-content-xl-center align-items-xl-center"><a href="./create_prescription.php"><button class="btn btn-primary border rounded" type="button" style="width: 188px;height: 57px;font-size: 18px;">+New Prescription</button></a></div>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
             <div>
                 <div class="row" style="margin: 10px -15px;">
                     <div class="col-xl-6">
                         <div class="card shadow-sm">
                             <div class="card-body bg-light shadow-sm">
                                 <h4 class="text-dark card-title" style="padding: 20px;color: #ffffff;font-size: 30px;">Today's schedule</h4>
                                 <?php

                                    // TODAY'S STUFF GENERATED HERE:

                                    for ($i = 0; $i < count($today); $i++) {
                                        generate_chamber_card($today[$i]->CHAMBER_ID, $today[$i]->REGION, $today[$i]->OPENING_TIME, $today[$i]->CLOSING_TIME, $today[$i]->MAP_URL);
                                    }

                                    ?>

                             </div>
                         </div>
                     </div>
                     <div class="col-xl-6">
                         <div class="card shadow-sm">
                             <div class="card-body bg-light shadow-sm">
                                 <h4 class="text-dark card-title" style="padding: 20px;color: #ffffff;font-size: 30px;">Tomorrow's schedule</h4>
                                 <?php

                                    // TOMORROW'S STUFF GENERATED HERE:
                                    for ($i = 0; $i < count($tomorrow); $i++) {
                                        generate_chamber_card($tomorrow[$i]->CHAMBER_ID, $tomorrow[$i]->REGION, $tomorrow[$i]->OPENING_TIME, $tomorrow[$i]->CLOSING_TIME, $tomorrow[$i]->MAP_URL);
                                    }

                                    ?>
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