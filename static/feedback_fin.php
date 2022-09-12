<?php

include_once("../classes/entities/Patient.class.php");
include "./helpers/Patient/patient_populator.inc.php";
include "./helpers/Patient/patient_dashboard_cards.inc.php";

$patient = json_decode($_SESSION["Patient"]);

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Feedback</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700">
    <link rel="stylesheet" href="assets/css/styles.min.css">
</head>

<body>
    <?php
        include_once("./helpers/Common/navbar.inc.php");
    ?>
    <div class="container" style="padding: 30px;">
        <div class="col">
            <div class="row" style="margin-top: 10px;margin-bottom: 10px;">
                <div class="col-xl-12">
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
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-12">
                    <div class="card shadow-sm">
                        <div class="card-body bg-light shadow-sm">
                            <h4 class="text-dark card-title" style="padding: 20px;color: #ffffff;font-size: 30px;">Feedback</h4>
                            <div class="card" style="margin: 15px;">
                                <div class="card-body shadow">
                                    <h6 class="text-muted card-subtitle mb-2">Rating</h6>
                                    <div style="padding-top: 15px;">
                                        <?php
                                            include_once('./helpers/Patient/feedback_fin_populator.inc.php')
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