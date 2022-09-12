<?php
include_once("../classes/db/DB_CONNECTION.class.php");
include_once("../classes/entities/Chamber.class.php");
include_once("../classes/entities/Doctor.class.php");

// TODO: HOSPITAL NAME
$hospital_name = "DUMMY_DATA";

$current_doctor = json_decode($_SESSION["Doctor"]);

$db = new DB_CONNECTION("medica_admin", "medica_admin");

$stmt_hosp = $db->prepare("select hospital_name from hospital where doctor_id=" . $current_doctor->doctor_id);
$stmt_hosp->execute();
$row = $stmt_hosp->fetch();
$hospital_name = $row->HOSPITAL_NAME;

$stmt_today = $db->prepare("select c.chamber_id, c.region, c.opening_time, c.closing_time, c.map_url from Doctor d, Chamber c, D_C r where d.DOCTOR_ID=r.DOCTOR_ID and c.CHAMBER_ID=r.CHAMBER_ID and c.DAY = trim(BOTH ' ' FROM to_char(sysdate, 'Day'))");
$stmt_tomorrow = $db->prepare("select c.chamber_id, c.region, c.opening_time, c.closing_time, c.map_url from Doctor d, Chamber c, D_C r where d.DOCTOR_ID=r.DOCTOR_ID and c.CHAMBER_ID=r.CHAMBER_ID and c.DAY = trim(BOTH ' ' FROM to_char(sysdate+1, 'Day'))");

$stmt_today->execute();
$today = $stmt_today->fetchAll();

$stmt_tomorrow->execute();
$tomorrow = $stmt_tomorrow->fetchAll();
