<?php

session_start();
include_once("../classes/db/DB_CONNECTION.class.php");
include_once("../classes/entities/Prescription.class.php");

$prescription_id = "";
$medicine = $_POST["medicine"];
$notes = $_POST["notes"];
$prescribed_tests = $_POST["prescribed_tests"];
$patient = $_POST["patient_id"];
$doctor = json_decode($_SESSION["Doctor"])->doctor_id;

$db = new DB_CONNECTION("medica_admin", "medica_admin");
$stmt = $db->prepare('select prescription_id from Prescription order by prescription_id');
$stmt->execute();
$latest_id = 0;
if ($row = $stmt->fetch()) {
    $latest_id = $row->PRESCRIPTION_ID + 1;
}

$prescription_id = $latest_id;
$stmt = $db->prepare("insert into Prescription values('" . $prescription_id . "', sysdate, '" . $medicine . "', '" . $notes . "', '" . $prescribed_tests . "', '" . $patient . "', '" . $doctor . "')");
$stmt->execute();

header("Location: ../static/Reusables/front_alert.php?Title=Redirecting..." . "&Heading=Prescription has been generated successfully!" . "&Message=Redirecting to your dashboard now..." . "&to=doctor_dashboard");
