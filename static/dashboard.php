<?php
session_start();
if (isset($_SESSION["Patient"])) {
    include_once("./patient_dashboard.php");
} elseif (isset($_SESSION["Doctor"])) {
    include_once("./doctor_dashboard.php");
} elseif (isset($_SESSION["Caregiver"])) {
    include_once("./caregiver_dashboard.php");
} elseif (isset($_SESSION["Hospital"])) {
    include_once("./hospital_dashboard.php");
} elseif (isset($_SESSION["Technician"])) {
    include_once("./technician_dashboard.php");
}
