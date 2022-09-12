<?php
class Pharmacy
{
    public $pharmacy_id;
    public $address;
    public $name;
    public $card;
    public $map_url;

    function __construct($fields)
    {
        $this->pharmacy_id = $fields->PHARMACY_ID;
        $this->address = $fields->ADDRESS;
        $this->name = $fields->NAME;
        $this->card = $fields->CARD;
        $this->map_url = $fields->MAP_URL;
    }
}
