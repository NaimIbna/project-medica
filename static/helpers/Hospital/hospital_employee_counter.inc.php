<?php

class Employee_Counter
{
    public $doctors;
    public $caregovers;
    public $technicians;

    function __construct($array_counted)
    {
        $this->doctors = $array_counted[0];
        $this->caregivers = $array_counted[1];
        $this->technicians = $array_counted[2];
    }
}

$emp_count = array();

$stmt = $db->prepare('SELECT COUNT(Doctor_id) AS NUM FROM Doctor NATURAL JOIN Hospital WHERE Hospital_id = ' . $current_hospital->hospital_id);
$stmt->execute();
if ($rows = $stmt->fetch()) {
    array_push($emp_count, $rows->NUM);
}


$stmt = $db->prepare('SELECT COUNT(c.Caregiver_id) AS NUM FROM Caregiver c, Hospital h, H_C r WHERE c.CAREGIVER_ID=r.CAREGIVER_ID AND h.HOSPITAL_ID=r.HOSPITAL_ID AND h.Hospital_id = ' . $current_hospital->hospital_id);
$stmt->execute();
if ($rows = $stmt->fetch()) {
    array_push($emp_count, $rows->NUM);
}


$stmt = $db->prepare('SELECT COUNT(Technician_id) AS NUM FROM Technician NATURAL JOIN H_T NATURAL JOIN Hospital WHERE Hospital_id = ' . $current_hospital->hospital_id);
$stmt->execute();
if ($rows = $stmt->fetch()) {
    array_push($emp_count, $rows->NUM);
}

$employee_counter = new Employee_Counter($emp_count);
