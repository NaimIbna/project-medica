<?php
class Patient
{
    public $patient_id;
    public $birth_reg;
    public $patient_name;
    public $passport_number;
    public $nid;
    public $blood_group;
    public $patient_dob;
    public $health_issues;
    public $other_info;
    public $address;
    public $contact_no;
    public $email;

    //$patient_id, $birth_reg, $patient_name, $passport_number, $nid, $blood_group, $patient_dob, $health_issues, $other_info, $address, $contact_no, $email

    function __construct($fields)
    {
        $this->patient_id = $fields->PATIENT_ID;
        $this->birth_reg = $fields->BIRTH_REG;
        $this->patient_name = $fields->PATIENT_NAME;
        $this->passport_number = $fields->PASSPORT_NUMBER;
        $this->nid = $fields->NID;
        $this->blood_group = $fields->BLOOD_GROUP;
        $this->patient_dob = $fields->PATIENT_DOB;
        $this->health_issues = $fields->HEALTH_ISSUES;
        $this->other_info = $fields->OTHER_INFO;
        $this->address = $fields->ADDRESS;
        $this->contact_no = $fields->CONTACT_NO;
        $this->email = $fields->EMAIL;

        var_dump($this);
    }
}
