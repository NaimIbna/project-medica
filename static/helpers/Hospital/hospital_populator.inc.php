<?php
if (!isset($_SESSION)) {
    session_start();
}
include_once("../classes/db/DB_CONNECTION.class.php");
$current_hospital = json_decode($_SESSION['Hospital']);

$db = new DB_CONNECTION("medica_admin", "medica_admin");
