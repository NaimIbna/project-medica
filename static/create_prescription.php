<?php
session_start();
include "../static/Reusables/head.inc.php";
include "../static/Reusables/navbar.inc.php";
include "./helpers/Doctor/doctor_populator.inc.php";
include_once("../classes/entities/Doctor.class.php");
$doctor = json_decode($_SESSION["Doctor"]);
?>

<!DOCTYPE html>
<html>

<?php head("Create prescription") ?>

<body>
    <?php navbar("Doctor") ?>
    <div class="container" style="padding: 30px;">
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
                            <div class="col offset-xl-3 text-center d-xl-flex align-self-center justify-content-xl-center align-items-xl-center"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col">
            <div>
                <form method="POST" action="../api/create_prescription.php" id="prescription_form">
                    <div class="row" style="margin: 10px -15px;">
                        <div class="col-xl-12">
                            <div class="card shadow-sm">
                                <div class="card-body bg-light shadow-sm">
                                    <h4 class="text-dark card-title" style="padding: 20px;color: #ffffff;font-size: 30px;">Create A Prescription</h4>
                                    <div class="card" style="margin: 15px;">
                                        <div class="card-body shadow">
                                            <h4 class="card-title" style="font-weight: 500;font-size: 20px;">Patient ID</h4>
                                            <div style="padding-top: 15px;"><textarea required class="form-control-lg" style="width: 100%;height: 3rem;" placeholder="Write down Patient ID" name="patient_id"></textarea></div>
                                        </div>
                                        <div class="card-body shadow">
                                            <h4 class="card-title" style="font-weight: 500;font-size: 20px;">Notes</h4>
                                            <div style="padding-top: 15px;"><textarea required class="form-control-lg" style="width: 100%;height: 15rem;" placeholder="List down notes here" name="notes"></textarea></div>
                                        </div>
                                    </div>
                                    <div class="card" style="margin: 15px;">
                                        <div class="card-body shadow">
                                            <h4 class="card-title" style="font-weight: 500;font-size: 20px;">Tests to be Prescribed</h4>
                                            <div style="padding-top: 15px;"><textarea required class="form-control-lg" style="width: 100%;height: 15rem;" placeholder="Prescribed test names" name="prescribed_tests"></textarea></div>
                                        </div>
                                    </div>
                                    <div class="card" style="margin: 15px;">
                                        <div class="card-body shadow">
                                            <h4 class="card-title" style="font-weight: 500;font-size: 20px;">Medicines</h4>
                                            <div style="padding-top: 15px;"><textarea required class="form-control-lg" style="width: 100%;height: 15rem;" placeholder="Medicine Name 0+0+0" name="medicine"></textarea></div>
                                        </div>
                                    </div>
                                    <div class="card" style="margin: 15px;">
                                        <div class="card-body shadow">
                                            <div style="padding-top: 15px;"><button class="btn btn-primary" type="submit" style="width: 150px;">Create</button><span style="width: auto;padding: 0px 10px;"></span><button id="clearButton" class="btn btn-danger" type="button" style="width: 150px;">Reset Form</button></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

<script>
    document.getElementById("clearButton").addEventListener('click', () => {
        document.getElementById("prescription_form").reset();
    });
</script>

</html>