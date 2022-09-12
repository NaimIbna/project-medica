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
    <title>Dispatch Caregiver - result</title>
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
                                <div class="col-auto col-xl-7" style="font-size: 5px;padding-top: 40px;">
                                    <?php echo '
                                    <h4>Welcome, admin of ' . $hospital->hospital_name . '</h4>
                                    <h4 style="font-weight: normal;font-size: 18px;">' . $hospital->address . '</h4>
                                    <h4 style="font-weight: normal;font-size: 18px;">' . $hospital->phone . '</h4>'
                                    ?>
                                </div>
                                <div class="col-xl-3 offset-xl-3 text-center d-xl-flex align-self-center justify-content-xl-center align-items-xl-center" style="margin-left: 0px;height: auto;">
                                    <div>
                                        <p><a href="./dashboard.php#admit-or-release"><button class="btn btn-primary border rounded" type="button" style="width: 188px;height: 57px;font-size: 18px;">+Admit A Patient</button></a></p>
                                        <p><a href="./dashboard.php#admit-or-release"><button class="btn btn-primary border rounded" type="button" style="width: 188px;height: 57px;font-size: 18px;">-Release A Patient</button></a></p>
                                    </div>
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
                                <h4 class="text-dark card-title" style="padding: 20px;color: #ffffff;font-size: 30px;">Admit or Release a Patient</h4>
                                <?php
                                $subheading_text;
                                $summary_text;

                                $stmt = $db->prepare('SELECT * FROM Patient WHERE Patient_id = ' . $_POST["patient_id"] . ' AND Contact_no = ' . $_POST["contact_no"]);
                                $stmt->execute();
                                $flag = $stmt->fetchAll();
                                if ($flag && isset($_POST["admit"])) {
                                    $stmt = $db->prepare('INSERT INTO P_H (Patient_id, Hospital_id, Date_of_admission) VALUES (' . $_POST["patient_id"] . ', ' . $hospital->hospital_id . ', SYSDATE)');
                                    $stmt->execute();
                                    $subheading_text = "Admitting new Patient";
                                    $summary_text = "Patient ID " . $_POST["patient_id"] . " has been successfully admitted to " . $hospital->hospital_name . ". Let's hope that the patient will get well soon.";
                                } else if ($flag && isset($_POST["release"])) {
                                    $stmt = $db->prepare('UPDATE P_H SET Date_of_discharge = SYSDATE WHERE Patient_id =' . $_POST["patient_id"] . ' AND Date_of_discharge IS  NULL AND Hospital_id = ' . $hospital->hospital_id);
                                    $stmt->execute();
                                    $subheading_text = "Releasing a Patient";
                                    $summary_text = "Patient ID " . $_POST["patient_id"] . " has been successfully released from " . $hospital->hospital_name . ". Let's wish the patient to have a healthy life.";
                                } else {
                                    $subheading_text = "Error encountered";
                                    $summary_text = "Invalid request has been detected. Please be sure to provide correct information.";
                                }
                                echo '
                                    <div class="row">
                                        <div class="col-xl-12">
                                            <div class="card" style="margin: 15px;">
                                                <div class="card-body shadow">
                                                    <h4 class="card-title" style="font-weight: 500;font-size: 20px;">' . $subheading_text . '</h4>
                                                    <h6 class="text-muted card-subtitle mb-2"></h6>
                                                    <div style="padding-top: 15px;">
                                                    <p> ' . $summary_text . ' </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>';
                                ?>
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