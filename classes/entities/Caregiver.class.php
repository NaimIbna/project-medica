<?php
class Caregiver
{
    public $caregiver_id;
    public $caregiver_name;
    public $nurse_rank;
    public $contact_no;
    public $available_for_contract;
    public $gender;
    public $area;
    public $rating;
    public $starting_date;
    public $ending_date;

    function __construct($fields)
    {
        $this->caregiver_id = $fields->CAREGIVER_ID;
        $this->caregiver_name = $fields->CAREGIVER_NAME;
        $this->nurse_rank = $fields->NURSE_RANK;
        $this->contact_no = $fields->CONTACT_NO;
        $this->available_for_contract = $fields->AVAILABLE_FOR_CONTRACT;
        $this->gender = $fields->GENDER;
        $this->area = $fields->AREA;
        $this->rating = $fields->RATING;
        $this->starting_date = $fields->STARTING_DATE;
        $this->ending_date = $fields->ENDING_DATE;

        // var_dump($this);
    }
}
