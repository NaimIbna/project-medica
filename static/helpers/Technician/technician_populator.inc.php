<?php
session_start();
include_once("../classes/db/DB_CONNECTION.class.php");
$current_technician = json_decode($_SESSION['Technician']);

$db = new DB_CONNECTION("medica_admin", "medica_admin");
