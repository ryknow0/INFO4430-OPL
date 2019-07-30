<?php
requore('../model/event_db.php');

$action = filter_input(INPUT_POST, 'action');
if ($action == NULL) {
    $action = filter_input(INPUT_GET, 'action');
    if ($action == NULL) {
        $action = 'get_all_events'
    }
}

if ($action == 'get_all_events') {
    $events = get_all_events();
    $message = ''; //an array of arrays
    include('event_tracker.php');//event view
} //else if ($action == 'get_all_events') {
  //  $events = 
//}

else if ($action == 'add_event_data'){
    $event_name = filter_input(INPUT_POST, 'event_name');
    $event_date = filer_input(INPUT_POST, 'event_date');
    $start_time = filter_input(INPUT_POST, 'start_time');
    $end_time = filter_input(INPUT_POST, 'end_time');
    $event_location = filter_input(INPUT_POST, 'event_location');
    $category = filter_input(INPUT_POST, 'category');
    $target_audience = filter_input(INPUT POST, 'target_audience');
    $event_type = filter_input(INPUT_POST, 'event_type');
    $topic = filter_input(INPUT_POST, 'topic');   
}

$record_added = create_event($event_name, $event_date, $start_time, $end_time, 
                            $event_location, $category, $target_audience, $event_type
                            $topic);
$message = '';
if($record_added > 0) {
    $message = 'Event Added Successfully';
} else {
    $message = 'Error Adding Event';
}
$event = read_events();
include('event_tracker.php');




?>