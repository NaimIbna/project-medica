<?php
include_once("../classes/entities/Hospital.class.php");
include "./helpers/Hospital/hospital_populator.inc.php";
include "./helpers/Hospital/hospital_employee_counter.inc.php";
include_once("./helpers/Common/navbar.inc.php");

$hospital = json_decode($_SESSION["Hospital"]);

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Hospital Dashboard</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700">
    <link rel="stylesheet" href="assets/css/styles.min.css">
</head>

<body>
    <?php
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
                                <h4 class="text-dark card-title" style="padding: 20px;color: #ffffff;font-size: 30px;">Health Service Configuration</h4>
                                <div class="row">
                                    <div class="col-xl-6">
                                        <div class="card" style="margin: 15px;">
                                            <div class="card-body shadow">
                                                <h4 class="card-title" style="font-weight: 500;font-size: 20px;">Employees</h4>
                                                <h6 class="text-muted card-subtitle mb-2"></h6>
                                                <div style="padding-top: 15px;">
                                                    <?php echo '
                                                    <p>' . $employee_counter->doctors . ' doctor(s)</p>
                                                    <p>' . $employee_counter->caregivers . ' caregiver(s)</p>
                                                    <p>' . $employee_counter->technicians . ' technician(s)</p>'
                                                    ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="card" style="margin: 15px;">
                                            <div class="card-body shadow">
                                                <h4 class="card-title" style="font-weight: 500;font-size: 20px;">Ambulance</h4>
                                                <h6 class="text-muted card-subtitle mb-2"></h6>
                                                <div style="padding-top: 15px;">
                                                    <?php echo '
                                                    <p>' . $hospital->general_ambulance . ' general ambulance(s)</p>
                                                    <p>' . $hospital->intensive_care_ambulance . ' intensive care ambulance(s)</p>'
                                                    ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-12">
                        <div class="card shadow-sm">
                            <div class="card-body bg-light shadow-sm">
                                <h4 class="text-dark card-title" style="padding: 20px;color: #ffffff;font-size: 30px;">Dedicating Caregiver for a Patient</h4>
                                <div class="card" style="margin: 15px;">
                                    <div class="card-body shadow">
                                        <div class="row" id="dispatch">
                                            <form method="POST" action="./dispatch_fin.php">
                                                <div class="col-xl-6">
                                                    <h4 style="font-weight: 500;font-size: 20px;">Patient Info</h4>
                                                    <div>
                                                        <p>Patient ID:<input name="patient_id" type="text" style="width: 100%;" required></p>
                                                    </div>
                                                    <div>
                                                        <p>Contact:<input name="contact_no" type="text" style="width: 100%;" required></p>
                                                    </div>
                                                    <div>
                                                        <p>Starting Date:<input name="starting_date" type="date" required></p>
                                                    </div>
                                                    <div>
                                                        <p>Ending Date:<input name="ending_date" type="date" required></p>
                                                    </div>
                                                </div>
                                                <div class="col-xl-6">
                                                    <h4 style="font-weight: 500;font-size: 20px;">Caregiver Info</h4>
                                                    <div></div>
                                                    <div>
                                                        <p>Caregiver ID:<input name="caregiver_id" type="text" style="width: 100%;" required></p>
                                                    </div>
                                                    <div>
                                                        <p><select name="nurse_rank" required>
                                                                <optgroup label="Select Nurse Rank">
                                                                    <option value="CNA" selected="">CNA</option>
                                                                    <option value="LPN">LPN</option>
                                                                    <option value="LVN">LVN</option>
                                                                    <option value="RN">RN</option>
                                                                    <option value="NP">NP</option>
                                                                    <option value="CNM">CNM</option>
                                                                    <option value="APRN">APRN</option>
                                                                    <option value="CRNA">CRNA</option>
                                                                    <option value="DNP">DNP</option>
                                                                </optgroup>
                                                            </select></p>
                                                        <div class="form-check"><input name="gender" class="form-check-input" type="radio" id="formCheck-2" name="Gender" value="M"><label class="form-check-label" for="formCheck-2">Male</label></div>
                                                        <div class="form-check"><input name="gender" class="form-check-input" type="radio" id="formCheck-1" name="Gender" value="F"><label class="form-check-label" for="formCheck-1">Female</label></div>

                                                        <div class="text-center"><button name="dispatch" class="btn btn-primary border rounded" type="submit" style="width: 188px;height: 57px;font-size: 18px;">Dispatch Caregiver</button></div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-12">
                    <div class="card shadow-sm">
                        <div class="card-body bg-light shadow-sm">
                            <h4 class="text-dark card-title" style="padding: 20px;color: #ffffff;font-size: 30px;">Admit/Release Patient</h4>
                            <div class="card" style="margin: 15px;">
                                <div class="card-body shadow">
                                    <div class="row" id="admit-or-release">
                                        <form method="POST" action="./admit_release_fin.php">
                                            <div class="col-xl-6">
                                                <h4 style="font-weight: 500;font-size: 20px;">Patient Info</h4>
                                                <div>
                                                    <p>Patient ID:<input name="patient_id" type="text" style="width: 100%;" required></p>
                                                </div>
                                                <div>
                                                    <p>Contact:<input name="contact_no" type="text" style="width: 100%;" required></p>
                                                </div>
                                                <div></div>
                                                <div></div>
                                            </div>
                                            <div class="col align-self-end">
                                                <div>
                                                    <p class="text-center"><button name="admit" class="btn btn-primary border rounded" type="submit" style="width: 188px;height: 57px;font-size: 18px;">+Admit A Patient</button></p>
                                                    <p class="text-center"><button name="release" class="btn btn-primary border rounded" type="submit" style="width: 188px;height: 57px;font-size: 18px;">-Release Patient</button></p>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
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