<?php
include_once("../classes/db/DB_CONNECTION.class.php");
$current_caregiver = json_decode($_SESSION['Caregiver']);

$db = new DB_CONNECTION("medica_admin", "medica_admin");

$stmt = $db->prepare('SELECT Patient_name , Address , Patient.Contact_no , Health_issues, Ending_date - SYSDATE AS Days_remaining FROM Patient JOIN P_C USING (Patient_id) JOIN Caregiver USING (Caregiver_id) WHERE  Caregiver_id = ' . $current_caregiver->caregiver_id . ' AND SYSDATE BETWEEN STARTING_DATE AND ENDING_DATE');
$stmt->execute();
$schedule_today = array();
while ($rows = $stmt->fetchAll()) {
    $schedule_today = $rows;
}

$stmt = $db->prepare('SELECT Patient_name , Address , Patient.Contact_no , Health_issues, Ending_date - (SYSDATE+1) AS Days_remaining FROM Patient JOIN P_C USING (Patient_id) JOIN Caregiver USING (Caregiver_id) WHERE  Caregiver_id =' . $current_caregiver->caregiver_id . ' AND (SYSDATE+1) BETWEEN STARTING_DATE AND ENDING_DATE');
$stmt->execute();
$schedule_tomorrow = array();
while ($rows = $stmt->fetchAll()) {
    $schedule_tomorrow = $rows;
}

