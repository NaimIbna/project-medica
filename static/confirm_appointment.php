<?php
include_once("../classes/entities/Doctor.class.php");
include_once("../classes/entities/Chamber.class.php");
include "./helpers/Patient/confirm_appointment_populator.inc.php";

?>


<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Confirm Appointment</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700">
    <link rel="stylesheet" href="assets/css/styles.min.css">
</head>

<body>
    <nav class="navbar navbar-light navbar-expand-md navigation-clean">
        <div class="container"><a class="navbar-brand" href="#">Project Medica</a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="nav navbar-nav ml-auto">
                    <li class="nav-item" role="presentation"><a class="nav-link active" href="#">First Item</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="#">Second Item</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="#">Third Item</a></li>
                    <li class="nav-item dropdown"><a class="dropdown-toggle nav-link" data-toggle="dropdown" aria-expanded="false" href="#">Dropdown </a>
                        <div class="dropdown-menu" role="menu"><a class="dropdown-item" role="presentation" href="#">First Item</a><a class="dropdown-item" role="presentation" href="#">Second Item</a><a class="dropdown-item text-danger" role="presentation" href="../api/logout.php">Logout</a></div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container" style="padding: 30px;width: 1351px;">
        <div class="row">
            <div class="col-xl-12">
                <div class="card shadow-sm">
                    <div class="card-body bg-light shadow-sm">
                        <h4 class="text-dark card-title" style="padding: 20px;color: #ffffff;font-size: 30px;">Appointment Info</h4>
                        <div class="row">
                            <div class="col">
                                <div class="card" style="margin: 15px;">
                                    <div class="card-body shadow">
                                        <div class="row">
                                            <div class="col-xl-4"><img class="rounded-circle border border-dark" src="assets/img/blank-profile-picture-973460_1280.jpg" style="width: 150px;"></div>
                                            <div class="col">
                                                <h6 class="text-muted mb-2"><?php echo $current_doctor->doctor_name ?></h6>
                                                <div style="padding-top: 15px;">
                                                    <!-- TODO: ADD HOSPITAL NAME -->
                                                    <p><?php echo $current_doctor->specialization ?><br><?php echo $current_doctor->designation ?></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4">
                                <form action="../api/confirm_appointment.php" method="POST">
                                    <input hidden name="doctor_id" value="<?php echo $current_doctor->doctor_id ?>"></input>
                                    <div class="card" style="margin: 15px;">
                                        <div class="card-body shadow">
                                            <h6 class="text-muted card-subtitle mb-2">Appointment Info</h6>
                                            <div style="padding-top: 15px;">
                                                <p>Location:&nbsp;</p>
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <label class="input-group-text" for="inputGroupSelect01">Choose Chamber</label>
                                                    </div>

                                                    <select required name="chamber_id" class="custom-select" id="inputGroupSelect01">
                                                        <?php

                                                        for ($i = 0; $i < count($chambers); $i++) {
                                                            echo '<option name="chamber_id" value="' . $chambers[$i]->chamber_id . '">' . $chambers[$i]->region . '</option>';
                                                        }

                                                        ?>
                                                    </select>
                                                </div>
                                            </div>
                                            <div style="padding-top: 15px;">
                                                <p>Date:&nbsp;</p><input required placeholder="dd-mm-yyyy" value="" type="date" name="selected_date"></input>
                                            </div>
                                            <!-- <div style="padding-top: 15px;">
                                                <p>Serial no: $Serial_no<br>Fee: $Fee<br></p>
                                            </div> -->
                                            <div class="text-center" style="padding-top: 15px;"><button class="btn btn-primary text-center" type="submit" style="width: 139.891px;">Confirm</button></div>
                                            <div class="text-center" style="padding-top: 15px;"><a href="./new_appointment.php"><button class="btn btn-danger text-center" type="button" style="width: 139.891px;">Cancel</button></a></div>
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
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>