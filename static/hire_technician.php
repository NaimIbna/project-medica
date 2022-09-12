<?php

include_once("../classes/entities/Hospital.class.php");
include "./helpers/Hospital/hospital_populator.inc.php";
//include "./helpers/Hospital/hospital_employee_counter.inc.php";

$hospital = json_decode($_SESSION["Hospital"]);

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Hire a Technician</title>
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
                                <div class="col-auto col-xl-10" style="font-size: 5px;padding-top: 40px;">
                                    <?php echo '
                                        <h4>Welcome, admin of ' . $hospital->hospital_name . '</h4>
                                        <h4 style="font-weight: normal;font-size: 18px;">' . $hospital->address . '</h4>
                                        <h4 style="font-weight: normal;font-size: 18px;">' . $hospital->phone . '</h4>'
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div class="row" style="margin: 10px -15px;">
                    <div class="col-xl-12">
                        <div class="card shadow-sm">
                            <div class="card-body bg-light shadow-sm">
                                <h4 class="text-dark card-title" style="padding: 20px;color: #ffffff;font-size: 30px;">Hire Technician</h4>
                                <form action="./hiring_fin.php" method="POST">
                                    <div class="row">
                                        <div class="col">
                                            <p>Technician_ID<input name="technician_id" required type="text" style="width: 100%;"></p>
                                            <p>Technician Name<input name="technician_name" required type="text" style="width: 100%;"></p>
                                        </div>
                                    </div>
                                    <button name="hire_technician" class="btn btn-primary" type="submit">Hire Technician</button>
                                </form>
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