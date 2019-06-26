<?php 
require('database.php');

function create_account() {
    global $db;
    $account_query = 'INSERT INTO Account(Account_Name, Phone_Number)
                VALUES (:account_name, :phone_number)';
                //var_dump($query);
    $statement = $db->prepare($account_query);
    $statement->bindParam(':account_name', $account_name);
    $statement->bindParam(':phone_number', $phone_number);
    $statement->execute();
    $last_id = $statement->lastInsertID();
    echo "New record created succesfully. Last inserted ID is: " . $last_id;
    $record_added = $statement->rowCount();

    if ($record_added == 1) {
    $user_query = 'INSERT INTO User(Email, First_Name, Last_Name, Department, Permissions, Password, AccountID)
                    VALUES (:email, :first_name, :last_name, :department, :permissions, :password, $last_id)';
    $statement = $db-prepare($user_query);
    $statement->bindParam(':email', $email);
    $statement->bindParam(':first_name', $first_name);
    $statement->bindParam(':last_name', $last_name);
    $statement->bindParam('primary_contact', $primary_contact);
    $statement->bindParam(':department', $department);
    $statement->bindParam(':account_id', $last_id);
    $statement->execute();
    }
    else{
        $message = ''
    }
    $record_added2 = $statement->rowCount();

    //Success will return 1 row if succesful and 0 if it fails
    return $statement->rowCount();
}

function get_account(){
    global $db;
    $query = '';
    $statement = $db->prepare($query);
    $statement->bindParam('', );
    $statement->execute();

}


?>