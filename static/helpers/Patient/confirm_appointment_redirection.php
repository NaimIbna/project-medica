<?php
session_start();
include_once("../../../classes/db/DB_CONNECTION.class.php");
include_once("../../../classes/entities/Doctor.class.php");

$db = new DB_CONNECTION("medica_admin", "medica_admin");
$stmt = $db->prepare('select * from doctor where doctor_id=' . $_GET['id']);
$stmt->execute();
$row = $stmt->fetch();

$_SESSION['Selected_Doctor'] = json_encode($row);


header("Location: ../../confirm_appointment.php");
