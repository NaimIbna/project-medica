<?php
class Hospital
{
    public $hospital_id;
    public $hospital_name;
    public $general_ambulance;
    public $intensive_care_ambulance;
    public $address;
    public $phone;
    public $map_url;

    function __construct($fields)
    {
        $this->hospital_id = $fields->HOSPITAL_ID;
        $this->hospital_name = $fields->HOSPITAL_NAME;
        $this->general_ambulance = $fields->GENERAL_AMBULANCE;
        $this->intensive_care_ambulance = $fields->INTENSIVE_CARE_AMBULANCE;
        $this->address = $fields->ADDRESS;
        $this->phone = $fields->PHONE;
        $this->map_url = $fields->MAP_URL;

        var_dump($this);
    }
}
