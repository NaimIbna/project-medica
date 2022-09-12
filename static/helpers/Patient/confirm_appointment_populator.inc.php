<?php

session_start();
include_once("../classes/entities/Chamber.class.php");
include_once("../classes/db/DB_CONNECTION.class.php");

$db = new DB_CONNECTION("medica_admin", "medica_admin");

if (isset($_SESSION['Selected_Doctor'])) {
    $current_doctor = new Doctor(json_decode($_SESSION['Selected_Doctor']));

    $stmt = $db->prepare('select c.CHAMBER_ID, c.FEE, c.DAY, c.OPENING_TIME, c.CLOSING_TIME, c.REGION, c.MAP_URL from DOCTOR d, D_C r, CHAMBER c WHERE d.DOCTOR_ID=r.DOCTOR_ID AND c.CHAMBER_ID=r.CHAMBER_ID AND d.DOCTOR_ID=' . $current_doctor->doctor_id);

    $stmt->execute();


    $i = 0;
    $chambers = array();

    while ($row = $stmt->fetch()) {
        $chambers[$i] = new Chamber($row);
        $i++;
    }
} else {

    //TODO: redirect to search page, idk

}
