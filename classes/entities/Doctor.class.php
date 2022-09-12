<?php
class Doctor
{
    public $doctor_id;
    public $doctor_name;
    public $designation;
    public $specialization;
    public $qualification;
    public $rating;

    function __construct($fields)
    {
        $this->doctor_id = $fields->DOCTOR_ID;
        $this->doctor_name = $fields->DOCTOR_NAME;
        $this->designation = $fields->DESIGNATION;
        $this->specialization = $fields->SPECIALIZATION;
        $this->qualification = $fields->QUALIFICATION;
        $this->rating = $fields->RATING;

        // var_dump($this);
    }
}
