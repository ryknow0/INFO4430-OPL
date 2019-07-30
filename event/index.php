<?php
requore('../model/event_db.php');

//filter_input(INPUT_POST, '');

$action = filter_input(INPUT_POST, 'action');
if ($action == NULL) {
    $action = filter_input(INPUT_GET, 'action');
    if ($action == NULL) {
        $action = 'get_all_events'
    }
}

if ($acton == 'get_all_events') {
    $events = get_all_events();//an array of arrays
    include('event_tracker.php');//event view
} else if ($action == 'create_event') {
    header('Location: ../event/create_event.php');
} else if ($action == 'add_event'){
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
    $accountID = $_SESSION['AccountID'];
    //Call Create Event Function
    $eventID = create_event($event_name,$event_date, $event_start_time, $event_end_time, $event_location, $event_category, $event_target_audience,$event_type, $event_topic, $accountID);
    header('Location: ../index.php')
} else if ($action == 'edit_event'){
    header('Location: ../event/edit_event.php');
} else if ($action == 'update_event'){
     //Set update parameters
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
    header('Location: ../event_info.php');
} else if ($action == 'track_event'){
    header('Location: ../event/track_event.php');
    //get eventID from selected event on index.php
    
    $eventID = filter_input(INPUT_POST, 'eventID');
} else if ($action == 'update_event_details'){
    //gather event details from event tracker POST
}
?>