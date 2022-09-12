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
                                        <p><button class="btn btn-primary border rounded" type="button" style="width: 188px;height: 57px;font-size: 18px;" href="./hospital_dashboard.php/#admit-or-release">+Admit A Patient</button></p>
                                        <p><button class="btn btn-primary border rounded" type="button" style="width: 188px;height: 57px;font-size: 18px;" href="./hospital_dashboard.php/#admit-or-release">-Release A Patient</button></p>
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
                                <h4 class="text-dark card-title" style="padding: 20px;color: #ffffff;font-size: 30px;">Dedicating Caregiver for a Patient</h4>
                                <?php
                                $subheading_text = "Error encountered";
                                $summary_text = "Invalid request has been detected. Please be sure to provide correct information.";

                                if (isset($_POST['gender'])) {
                                    $stmt1 = $db->prepare('SELECT * FROM Patient WHERE Patient_id = ' . $_POST["patient_id"] . ' AND Contact_no = ' . $_POST["contact_no"]);
                                    $stmt1->execute();
                                    $stmt2 = $db->prepare("SELECT * FROM Caregiver WHERE Caregiver_id = '" . $_POST["caregiver_id"] . "' AND Nurse_rank = '" . $_POST["nurse_rank"] . "' AND Gender = '" . $_POST["gender"] . "'");
                                    $stmt2->execute();
                                    if ($stmt1->fetchAll() && $stmt2->fetchAll()) {
                                        $stmt = $db->prepare("INSERT INTO P_C VALUES ('" . $_POST["patient_id"] . "', '" . $_POST["caregiver_id"] . "')");
                                        $stmt->execute();
                                        $stmt = $db->prepare("UPDATE Caregiver SET Starting_date = to_date('" . $_POST["starting_date"] . "', 'YYYY-MM-DD'), Ending_date = to_date('" . $_POST["ending_date"] . "', 'YYYY-MM-DD') WHERE Caregiver_id = '" . $_POST["caregiver_id"] . "'");
                                        $stmt->execute();
                                        $subheading_text = "Dispatched";
                                        $summary_text = "Caregiver ID " . $_POST["caregiver_id"] . " will now be providing service to Patient ID " . $_POST["patient_id"] . ' from ' . $_POST["starting_date"] . ' to ' . $_POST["ending_date"];
                                    }
                                }
                                echo '
                                    <div class="row">
                                        <div class="col-xl-12">
                                            <div class="card" style="margin: 15px;">
                                                <div class="card-body shadow">
                                                    <h4 class="card-title" style="font-weight: 500;font-size: 20px;">' . $subheading_text  . '</h4>
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
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>