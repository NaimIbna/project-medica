<?php

include_once("../classes/entities/Technician.class.php");
include "./helpers/Technician/technician_populator.inc.php";

$technician = json_decode($_SESSION["Technician"]);

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>PatientDashboard_2</title>
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
                <div class="col-xl-12">
                    <div class="card border-dark shadow-sm">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-xl-2"><img class="rounded-circle border border-dark" src="assets/img/blank-profile-picture-973460_1280.jpg" style="width: 150px;"></div>
                                <div class="col-auto" style="font-size: 5px;padding-top: 40px;">
                                    <h4><?php echo 'Welcome, ' . $technician->technician_name ?></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-12">
                    <div class="card shadow-sm">
                        <div class="card-body bg-light shadow-sm">
                            <h4 class="text-dark card-title" style="padding: 20px;color: #ffffff;font-size: 30px;">Report Attachment</h4>
                            <form action="./report_attachment_fin.php" method="POST">
                                <div class="card" style="margin: 15px;">
                                    <div style="padding-top: 15px;">
                                        <p>Patient id: <input name="patient_id" type="text" style="width: 100%;" required></p>
                                        <p>Report id: <input name="report_id" type="text" style="width: 100%;" required></p>
                                        <p>Test name: <input name="test_name" type="text" style="width: 100%;" required></p>
                                        <p>Date: <input name="report_date" type="text" style="width: 100%;" required></p>
                                        <p>Referred by: <input name="referred_by" type="text" style="width: 100%;" required></p>
                                        <p>Diagnosed by: <input name="diagnosed_by" type="text" style="width: 100%;" required></p>
                                        <p>Impression: <input name="impression" type="text" style="width: 100%;" required></p>
                                        <p>File: <input name="file1" type="file" style="width: 100%;" required></p>
                                    </div>
                                </div>
                                <button name="attach_report" class="btn btn-primary" type="submit" style="width: 150px;">Attach Report</button>
                            </form>
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