<?php
include_once("./Prescription.class.php");
include_once("./Patient.class.php");
include_once("./Technician.class.php");

class Report
{
    public $report_id;
    public $test_name;
    public $referred_by;
    public $diagnosed_by;
    public $impression;
    public $file;
    public $prescription;
    public $technician_id;
    public $report_date;


    function __construct($fields)
    {
        $this->report_id = $fields->REPORT_ID;
        $this->test_name = $fields->TEST_NAME;
        $this->referred_by = $fields->REFERRED_BY;
        $this->diagnosed_by = $fields->DIAGNOSED_BY;
        $this->impression = $fields->IMPRESSION;
        $this->file = $fields->FILE;
        $this->prescription = $fields->PRESCRIPTION;
        $this->technician_id = $fields->TECHNICIAN_ID;
        $report_date = $fields->REPORT_DATE;

        // var_dump($this);
    }
}
