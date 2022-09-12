<?php

class Feedback
{
    public $feedback_id;
    public $date;
    public $rating;
    public $comment;

    function __construct($fields)
    {
        $this->feedback_id = $fields->FEEDBACK_ID;
        $this->date = $fields->DATE;
        $this->rating = $fields->RATING;
        $this->comment = $fields->COMMENT;
    }
}
