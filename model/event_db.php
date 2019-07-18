<?php 
require('database.php'); //databse connection file

//get_all_events= to return all current events for a customer account for display on the
//user/admin dashboard page
function get_all_events(){
    global $db;
    //Need to write the DB query to pull all relevant events
    $query = '';
    $statement = $db->prepare($query);
    $statement->bindParam(':UserID', $userid);
    $statement->bindParam(':AccounID', $accountid);
    $statement->execute();
    $events = $statement->fetchAll();
    //var_dump($events);
    return $events;
 }

//get_ytd_attendees= to return $ytd_attendees or  the total numbrer of attendees across all past events for display on the
//user/admin dashboard page
function get_ytd_attendees(){
    global $db;
    $query = '';
    $statement = $db->prepare($query);
    
    $statement->execute();
    $ytd_attendees = $statement->fetchAll();
    //var_dump(ytd_attendees);
    return $ytd_attendees;

}

//get_ytd_event_count= to return $ytd_event_count or the total number of past events in the last year for display on the
//user/admin dashboard page
function get_ytd_event_count(){
    global $db;
    $query = '';
    $statement = $db->prepare($query);
    $statement->execute();
    $ytd_event_count = $statement->fetchAll();
    //var_dump(ytd_event_count);
    return $ytd_event_count;
}

//get_ytd_event_types = to return $ytd_event_types or all the various event types as a percentage of total # of events completed 
//for display on the user/admin dashboard page
function get_ytd_event_types(){
    global $db;
    $query = '';
    $statement = $db->prepare($query);
    $statement->execute();
    $ytd_event_types = $statement->fetchAll();
    //var_dump(ytd_event_types);
    return $ytd_event_types;     
}

?>
