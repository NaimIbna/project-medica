<?php

include_once("../classes/entities/Caregiver.class.php");
include "./helpers/Caregiver/caregiver_populator.inc.php";
include "./helpers/Caregiver/caregiver_dashboard_cards.inc.php";

$caregiver = json_decode($_SESSION["Caregiver"]);

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Caregiver Dashboard</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700">
    <link rel="stylesheet" href="assets/css/styles.min.css">
</head>

<body>
    <?php
    include_once("./helpers/Common/navbar.inc.php");
    navbar();
    ?>
    <div class="container" style="padding: 30px;">
        <div class="col">
            <div class="row" style="margin-top: 10px;margin-bottom: 10px;">
                <div class="col">
                    <div class="card border-dark shadow-sm">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-xl-2"><img class="rounded-circle border border-dark" src="assets/img/blank-profile-picture-973460_1280.jpg" style="width: 150px;"></div>
                                <div class="col-auto" style="font-size: 5px;padding-top: 40px;">
                                    <h4>Welcome <?php echo $caregiver->caregiver_name  ?></h4>
                                    <h4 style="font-weight: normal;font-size: 18px;"><?php echo $caregiver->nurse_rank  ?></h4>
                                </div>
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
                                <!-- CARDS HERE boii -->
                                <?php
                                for ($i = 0; $i < count($schedule_today); $i++) {
                                    generate_caregiver_card($schedule_today[$i]);
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="card shadow-sm">
                            <div class="card-body bg-light shadow-sm">
                                <h4 class="text-dark card-title" style="padding: 20px;color: #ffffff;font-size: 30px;">Tomorrow's schedule</h4>

                                <!-- CARDS HERE boii -->
                                <?php
                                for ($i = 0; $i < count($schedule_tomorrow); $i++) {
                                    generate_caregiver_card($schedule_tomorrow[$i]);
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