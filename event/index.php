<?php
requore('../model/event_db.php');

$action = filter_input(INPUT_POST, 'action');
if ($action == NULL) {
    $action = filter_input(INPUT_GET, 'action');
    if ($action == NULL) {
        $action = 'get_all_events';
    }
}

if ($acton == 'get_all_events') {
    $events = get_all_events();//an array of arrays
    include('event_tracker.php');//event view
} //else if ($action == 'get_all_events') {
  //  $events = 
//}

?>