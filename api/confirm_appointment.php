<?php
session_start();
//$_POST --> vardump --> array(3) { ["doctor_id"]=> string(12) "555666777888" ["chamber_id"]=> string(9) "100000001" ["selected_date"]=> string(10) "2021-01-04" }

include "../classes/db/DB_CONNECTION.class.php";

$current_patient = json_decode($_SESSION["Patient"]);
$date_value = "to_date('" . $_POST["selected_date"] . "', 'YYYY-MM-DD')";

$db = new DB_CONNECTION("medica_admin", "medica_admin");
$stmt = $db->prepare("insert into APPOINTMENT (patient_id, doctor_id, chamber_id, has_rating, eta) values ('" . $current_patient->patient_id . "', '" . $_POST["doctor_id"] . "', '" . $_POST["chamber_id"] . "', '" . "No" . "', " . $date_value . ")");

$stmt->execute();

header("Location: ../static/Reusables/front_alert.php?Title=Redirecting..." . "&Heading=Your appointment has been made!" . "&Message=Redirecting to your dashboard now..." . "&to=patient_dashboard");
