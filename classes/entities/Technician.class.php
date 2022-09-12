<?php
class Technician
{
    public $technician_id;
    public $technician_name;
    public $nid;

    function __construct($fields)
    {
        $this->technician_id = $fields->TECHNICIAN_ID;
        $this->technician_name = $fields->TECHNICIAN_NAME;
        $this->nid = $fields->NID;
        // var_dump($this);
    }
}
