<?php
session_start();
if (isset($_SESSION["Patient"]) || isset($_SESSION["Doctor"]) || isset($_SESSION["Caregiver"]) || isset($_SESSION["Caregiver"]) || isset($_SESSION["Hospital"]) || isset($_SESSION["Technician"])) {
    header("Location: ./dashboard.php");
}

?>


<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Sign in</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700">
    <link rel="stylesheet" href="assets/css/styles.min.css">
</head>

<body style="height: 1080px;min-height: 1080px;">
    <div class="login-clean" style="margin-top: auto;">
        <form method="post" action="../api/signin.php" style="width: 699px;height: 700px;min-width: 400px;">
            <h2 class="sr-only">Login Form</h2>
            <div class="illustration"><img src="assets/img/Untitled1.png" style="width: 150px;"></div>
            <div class="form-group"><input class="form-control" type="text" name="username" placeholder="Username"></div>
            <div class="form-group"><input class="form-control" type="password" name="password" placeholder="Password"></div>
            <div class="form-row">
                <div class="col-xl-12 offset-xl-0">
                    <p style="padding-left: 15px;padding-top: 10px;font-size: 20px;">Sign in as:</p>
                </div>
            </div>
            <div class="form-row" style="padding: 10px;">
                <div class="col-xl-4 offset-xl-0">
                    <div class="form-check"><input required value="Patient" class="form-check-input" type="radio" name="user_role" id="formCheck-1"><label class="form-check-label" for="formCheck-1">Patient</label></div>
                </div>
                <div class="col-xl-4">
                    <div class="form-check"><input value="Doctor" class="form-check-input" type="radio" name="user_role" id="formCheck-2"><label class="form-check-label" for="formCheck-2">Doctor</label></div>
                </div>
                <div class="col-xl-4">
                    <div class="form-check"><input value="Caregiver" class="form-check-input" type="radio" name="user_role" id="formCheck-3"><label class="form-check-label" for="formCheck-3">Caregiver</label></div>
                </div>
                <div class="col-xl-4">
                    <div class="form-check"><input value="Technician" class="form-check-input" type="radio" name="user_role" id="formCheck-3"><label class="form-check-label" for="formCheck-3">Technician</label></div>
                </div>
                <div class="col-xl-4">
                    <div class="form-check"><input value="Hospital" class="form-check-input" type="radio" name="user_role" id="formCheck-3"><label class="form-check-label" for="formCheck-3">Hospital</label></div>
                </div>
            </div>
            <div class="form-group"><button class="btn btn-primary btn-block" type="submit">Log In</button></div>
        </form>
    </div>
    <div class="login-clean" style="margin-top: auto;height: 200px;"></div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>