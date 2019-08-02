<?php
session_start();
require('../model/event_db.php');
require('../model/account_db.php');

//filter_input(INPUT_POST, '');
$userID=5;
$action = filter_input(INPUT_POST, 'action');
if ($action == NULL) {
    $action = filter_input(INPUT_GET, 'action');
    if ($action == NULL) {
        $action = 'get_all_events';
    }
}

if ($action == 'get_all_events'){ 
    $arrayAccountID = get_accountID($userID);
    $accountID = $arrayAccountID[0];
    $events = get_all_events($accountID);//an array of arrays
    var_dump($events);
    header('Location: ../index.php');//account dashboard with all events
} else if ($action == 'create_event') {
    //Called from index.php CREATE EVENT or ADD EVENT Button
    header('Location: ../event/create_event.php');
} else if ($action == 'add_event'){
    //Called via SUBMIT buttion from /event/create_event.php
    //take all POST  vales from create_event.php form 
    $arrayAccountID = get_accountID($userID);
    $accountID = $arrayAccountID[0];
    //var_dump($accountID);
    $event_name = filter_input(INPUT_POST, 'event_name');
    $event_date = filter_input(INPUT_POST, 'date');
    $event_start_time = filter_input(INPUT_POST, 'start_time');
    $event_end_time = filter_input(INPUT_POST, 'end_time');
    $event_location = filter_input(INPUT_POST, 'location');
    $event_category = filter_input(INPUT_POST, 'category');
    $event_target_audience = filter_input(INPUT_POST, 'target_audience');
    $event_type = filter_input(INPUT_POST, 'event_type');
    $event_topic = filter_input(INPUT_POST, 'topic');
    $event_part_of_series = filter_input(INPUT_POST, 'part_of_series');
    
    //Call Create Event Function
    //Submit POST values 
    $eventID = create_event($event_name,$event_date, $event_start_time, $event_end_time, $event_location, $event_category, $event_target_audience,$event_type, $event_topic, $accountID);
    //var_dump($eventID);
    header('Location: ../index.php');
} else if ($action == 'select_event'){
    //Call from event table on index.php
    //Edit event button will contain link with update_event action
    header('Location: ../event/edit_event.php');
} else if ($action == 'update_event'){
    //Call from SUBMIT button on the edit_event.php form
     //take all POST values from edit_event.php form (clone of create_event.php)
     //update edit_event.php page to have Edit and Cancel button
     //Submit button appears after edit was selected
    $event_name = filter_input(INPUT_POST, 'event_name');
    $event_date = filter_input(INPUT_POST, 'date');
    $event_start_time = filter_input(INPUT_POST, 'start_time');
    $event_end_time = filter_input(INPUT_POST, 'end_time');
    $event_location = filter_input(INPUT_POST, 'location');
    $event_category = filter_input(INPUT_POST, 'category');
    $event_target_audience = filter_input(INPUT_POST, 'target_audience');
    $event_type = filter_input(INPUT_POST, 'event_type');
    $event_topic = filter_input(INPUT_POST, 'topic');
    $event_part_of_series = filter_input(INPUT_POST, 'part_of_series');
    $event_update = update_event($event_name,$event_date, $event_start_time, $event_end_time, $event_location, $event_category, $event_target_audience,$event_type, $event_topic);
    header('Location: ../event/index.php');
} else if ($action == 'event_tracker'){
    header('Location: ../event/event_tracker.php');
    //get eventID from selected "Track Event" button next to event on index.php table
    //get eventID from array of arrays for events listed on the index.php dashboard,
    //submit value as a GET in the URL

    $eventID = filter_input(INPUT_POST, 'eventID');
} else if ($action == 'update_event_details'){
    //Called from SUBMIT button on event_tracker.php (demographic information)
    //gather event details from event tracker POST
    $event_name = ' ';
    $event_date = ' ';
    $event_start_time = ' ';
    $event_end_time = ' ';
}
?>