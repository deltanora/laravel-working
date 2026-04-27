<?php
namespace App\Models;

class Event{
    private $title;
    private $date;
    private $attendeeCount;


    function __construct($title, $date, $attendeeCount){
        $this->title = $title;
        $this->date = $date;
        $this->attendeeCount = $attendeeCount;

    }

    public function showAttendeeCount(){
        return $this->attendeeCount;
    }

}



?>