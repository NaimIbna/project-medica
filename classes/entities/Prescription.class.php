<?php
include_once("../classes/entities/Patient.class.php");
include_once("../classes/entities/Doctor.class.php");

class Prescription
{
    public $prescription_id;
    public $date;
    public $medicine;
    public $notes;
    public $prescribed_tests;
    public $patient;
    public $doctor;

    function __construct($fields)
    {
        $this->prescription_id = $fields->PRESCRIPTION_ID;
        $this->date = $fields->DATE;
        $this->medicine = $fields->MEDICINE;
        $this->notes = $fields->NOTES;
        $this->prescribed_tests = $fields->PRESCRIBED_TESTS;
        $this->patient = $fields->PATIENT;
        $this->doctor = $fields->DOCTOR;

        // var_dump($this);
    }
}
