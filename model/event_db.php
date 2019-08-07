<?php 
require('database.php'); //databse connection file

function create_event($accountID, $event_name, $event_date, $event_start_time, $event_end_time, $event_location, $event_category, $event_target_audience, $event_type, $event_topic){
    global $db;
    //Need to write the DB query to pull all relevant events
    $query = 'INSERT INTO Events(AccountID_FK, Event_Name, Event_Date, Start_Time, End_Time, Event_Location, Category, Target_Audience, Event_Type, Topic)
                VALUES (:AccountID_FK, :Event_Name, :Event_Date, :Start_Time, :End_Time, :Event_Location, :Category, :Target_Audience, :Event_Type, :Topic)';
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $statement = $db->prepare($query);
    $statement->bindParam(':AccountID_FK', $accountID);
    $statement->bindParam(':Event_Name', $event_name);
    $statement->bindParam(':Event_Date', $event_date);
    $statement->bindParam(':Start_Time', $event_start_time);
    $statement->bindParam(':End_Time', $event_end_time);
    $statement->bindParam(':Event_Location', $event_location);
    $statement->bindParam(':Category', $event_category);
    $statement->bindParam(':Target_Audience', $event_target_audience);
    $statement->bindParam(':Event_Type', $event_type);
    $statement->bindParam(':Topic', $event_topic);
    $statement->execute();
    $last_id = $db->lastInsertId();
    echo "New record created succesfully. Last inserted ID is: " . $last_id ."<br>";
    $statement->closeCursor();
    echo "New Entry Event ID: " . $last_id;
    return $last_id;

}

function update_event_details(){
    //
}

//Get Account Events Function
function get_all_events($accountID){
    echo "this is get_all_events accountID: " . $accountID;
    global $db;
    $query = 'SELECT * FROM Events WHERE AccountID_FK = :AccountID_FK';
    //var_dump($query);
    //echo "<br>";
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $statement = $db->prepare($query);
    $statement->bindParam(':AccountID_FK', $accountID);
    //var_dump($statement);
    $statement->execute();
    //$events = $statement->fetchAll();
    $events = $statement->fetch(PDO::FETCH_ASSOC);
    $statement->closeCursor();
    //var_dump($events);
    return $events;
}

function edit_event(){
    global $db;
    //Need to write the DB query to edit existing event
    $query = 'INSERT INTO Events()';
}

//get_all_events= to return all current events for a customer account for display on the
//user/admin dashboard page
function get_event(){
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
    $statement->bindParam(':Event_Name', $event_name);
    $statement->bindParam(':Event_Date', $event_date);
    $statement->bindParam(':Start_Time', $event_start_time);
    $statement->bindParam(':End_Time', $event_end_time);
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

    $statement->bindParam(':AccounID', $accountid);
    $statement->execute();
    $events = $statement->fetchAll();
    //var_dump($events);
    return $events;
}

//get_ytd_attendees= to return $ytd_attendees or  the total number of attendees across all past events for display on the
//user/admin dashboard page
function get_ytd_attendees(){
    global $db;
    $query = 'SELECT SUM(Attendance)FROM Events WHERE Event_Date < NOW()';
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
    $query = 'SELECT COUNT(EventID) FROM Events WHERE Event_Date < NOW();';
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
    $query = 'SELECT count(EventID), concat(round(count( * ) *100 / (SELECT count(*)  
    FROM Events)), "%") AS percent FROM Events
    where Event_Date < now()
    GROUP BY Event_Type; ';
    $statement = $db->prepare($query);
    $statement->execute();
    $ytd_event_types = $statement->fetchAll();
    //var_dump(ytd_event_types);
    return $ytd_event_types;     
}

function add_event_data(){
    
}


?>
