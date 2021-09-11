<?php
include_once('connection.php');
include_once('models/model_calendar.php');

class ControllerCalendar{

//====================================================================================================
    public function view(){
        //$calendarData = Agenda::consult();
        include_once('views/calendar/table.php');
    }
//====================================================================================================
}

?>