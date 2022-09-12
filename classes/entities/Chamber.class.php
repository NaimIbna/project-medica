<?php
class Chamber
{
    public $chamber_id;
    public $fee;
    public $day;
    public $opening_time;
    public $closing_time;
    public $region;
    public $map_url;

    function __construct($fields)
    {
        $this->chamber_id = $fields->CHAMBER_ID;
        $this->fee = $fields->FEE;
        $this->day = $fields->DAY;
        $this->opening_time = $fields->OPENING_TIME;
        $this->closing_time = $fields->CLOSING_TIME;
        $this->region = $fields->REGION;
        $this->map_url = $fields->MAP_URL;
    }
}
