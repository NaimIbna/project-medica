<?php
class BloodDonor
{
    public $donor_id;
    public $name;
    public $region;
    public $blood_group;
    public $last_donation_date;

    function __construct($fields)
    {
        $this->donor_id = $fields->DONOR_ID;
        $this->name = $fields->NAME;
        $this->region = $fields->REGION;
        $this->blood_group = $fields->BLOOD_GROUP;
        $this->last_donation_date = $fields->LAST_DONATION_DATE;

        // var_dump($this);
    }
}
