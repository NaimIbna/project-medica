<?php

session_start();
include_once("../classes/db/DB_CONNECTION.class.php");

$db = new DB_CONNECTION("medica_admin", "medica_admin");
$patient_id = json_decode($_SESSION["Patient"])->patient_id;

$stmt = $db->prepare("select r.report_id, r.test_name, r.referred_by, r.diagnosed_by, r.impression, t.technician_name, r.report_date, r.file1 from report r, technician t where r.patient_id='" . $patient_id . "' and r.technician_id=t.technician_id");

$stmt->execute();

$reports = $stmt->fetchAll();
