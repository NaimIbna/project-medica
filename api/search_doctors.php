<?php
session_start();
include_once("../classes/db/DB_CONNECTION.class.php");
include_once("../classes/entities/Doctor.class.php");
$has_name = false;
$has_designation = false;
$has_specialization = false;
$has_rating = false;


if ($_POST['doc_name'] != "") {
    $has_name = true;
}

if (isset($_POST['doc_designation'])) {
    if ($_POST['doc_designation'] != "" && $_POST['doc_designation'] != "undefined")
        $has_designation = true;
}

if (isset($_POST['doc_specialization'])) {
    if ($_POST['doc_specialization'] != "" && $_POST['doc_specialization'] != "undefined")
        $has_specialization = true;
}

if (isset($_POST['doc_rating'])) {
    $has_rating = true;
}

$str_begin = "select * from Doctor ";
$str_mid = "Where ";
$str = "";
if ($has_name) {
    $str = $str . "Doctor_name LIKE '%" . $_POST['doc_name'] . "%' AND ";
}

if ($has_designation) {
    $str = $str . "designation='" . $_POST['doc_designation'] . "' AND ";
}

if ($has_specialization) {
    $str = $str . "specialization='" . $_POST['doc_specialization'] . "' AND ";
}

if ($has_rating) {
    $str = $str . "rating>='" . $_POST['doc_rating'] . "' AND ";
}

$str = rtrim($str, " AND");

if ($has_name | $has_designation | $has_rating | $has_specialization) {
    $str = $str_begin . $str_mid . $str;
} else {
    $str = $str_begin . $str;
}

$db = new DB_CONNECTION("medica_admin", "medica_admin");
$stmt = $db->prepare($str);
$array_results = array();
$stmt->execute();
$rows = $stmt->fetchAll();
$array_results = array();
$i = 0;

for ($i = 0; $i < count($rows); $i++) {
    $array_results[$i] = new Doctor($rows[$i]);
}

$_SESSION['Doctor_Search_Results'] = json_encode($array_results);
header("Location: ../static/new_appointment.php");
