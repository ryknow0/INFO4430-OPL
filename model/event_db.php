<?php 
require('database.php'); //databse connection file

//get_all_events= to return all current events for a customer account for display on the
//user/admin dashboard page
function get_all_events(){
    global $db;
    //Need to write the DB query to pull all relevant events
    $query = 'SELECT AccountID_FK, Event_Name, Event_Date, Start_Time, End_Time, Event_Location, Category, Target_Audience, Event_Type, Topic, Age_Under_18,
    Age_18_64, Age_65_Above, Boys, Girls, Men, Women, Hispanic, Black, White, Asian, Other, Attendance 
    FROM Events
     WHERE Event_name = :Event_Name AND Event_Date = :Event_Date AND Start_Time = :Start_Time AND End_Time = :End_Time AND Event_Location = :Event_Location 
     AND Category = :Category AND Target_Audience = :Target_Audience AND Event_Type = :Event_Type AND Topic = :Topic AND Age_Under_18 = :Age_Under_18 
     AND Age_18_64 = :Age_18_64 AND Age_65_Above = :Age_65_Above AND Boys = :Boys AND Girls = :Girls AND Men = :Men AND Women = :Women AND Hispanic = :Hispanic
     AND Black = :Black AND White = :White AND Asian = :Asian AND Other = :Other AND Attendance = :Attendance';
    $statement = $db->prepare($query);
    $statement->bindParam(':UserID', $userid);
    $statement->bindParam(':AccountID', $accountid);
    $statement->bindParam(':Event_Name', $Event_Name);
    $statement->bindParam(':Event_Date', $Event_Date);
    $statement->bindParam(':Start_Time', $Start_Time);
    $statement->bindParam(':End_Time', $End_Time);
    $statement->bindParam(':Event_Location', $Event_Location);
    $statement->bindParam(':Category', $Category);
    $statement->bindParam(':Target_Audience', $Target_Audience);
    $statement->bindParam(':Event_Type', $Event_Type);
    $statement->bindParam(':Topic', $Topic);
    $statement->bindParam(':Age_Under_18', $Age_Under_18);
    $statement->bindParam(':Age_18_64', $Age_18_64);
    $statement->bindParam(':Age_65_Above', $Age_65_Above);
    $statement->bindParam(':Boys', $Boys);
    $statement->bindParam(':Girls', $Girls);
    $statement->bindParam(':Men', $Men);
    $statement->bindParam(':Women', $Women);
    $statement->bindParam(':Hispanic', $Hispanic);
    $statement->bindParam(':Black', $Black);
    $statement->bindParam(':White', $White);
    $statement->bindParam(':Asian', $Asian);
    $statement->bindParam(':Other', $Other);
    $statement->bindParam(':Attendance', $Attendance);

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
