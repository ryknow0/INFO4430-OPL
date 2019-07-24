<?php 
require('database.php');

function create_account($account_name, $account_phone) {
    global $db;
    $account_insert_query = 'INSERT INTO Account(Account_Name, Phone_Number)
                VALUES (:account_name, :phone)';
    //var_dump($query);
    $statement = $db->prepare($account_insert_query);
    $statement->bindParam(':account_name', $account_name);
    $statement->bindParam(':phone', $phone_number);
    $statement->execute();
    $last_id = $statement->lastInsertID();
    echo "New record created succesfully. Last inserted ID is: " . $last_id;
    
    return $last_id;
    /***
    *$account_record_added = $statement->rowCount();

    if ($account_record_added == 1) {
    $user_insert_query = 'INSERT INTO User(Email, First_Name, Last_Name, Department, Permissions, Password, AccountID)
                    VALUES (:email, :first_name, :last_name, :department, :permissions, :password, $last_id)';
    $statement = $db-prepare($user_insert_query);
    $statement->bindParam(':email', $email);
    $statement->bindParam(':first_name', $first_name);
    $statement->bindParam(':last_name', $last_name);
    $statement->bindParam('primary_contact', $primary_contact);
    $statement->bindParam(':department', $department);
    $statement->bindParam(':account_id', $last_id);
    $statement->execute();
    $statement->closeCursor();
    }
    else{
        $message = '';
    }
    $record_added2 = $statement->rowCount();

    //Success will return 1 row if succesful and 0 if it fails
    return $statement->rowCount();
    */
}

function add_user($admin_email, $admin_first_name, $admin_last_name, $admin_accountID){
    global $db;
    $query = '';
    $statement = $db->prepare($query);
    $statement->bindParam('', );
    $statement->execute();
    $last_id = $statement->lastInsertID();
    $statement-closeCursor();

    $query = 'SELECT 
                FROM library.users
                WHERE userid = "$last_id"';
    $statement->bindParam('');
    $statement->execute();
    

    return $statement->rowCount();
}

function get_account(){
    global $db;
    $query = '';
    $statement = $db->prepare($query);
    $statement->bindParam('', );
    $statement->execute();

}

//$action = filter_input(INPUT_POST, 'action');
//if ($action == NULL) {
//   $action = filter_input(INPUT_GET, 'action');
//   if ($action == NULL) {
//       $action = 'list_users';
//   }
//}
//if ($action == 'list_users') {
//   $users = get_users();
//   include('user_list.php');
//}
//elseif($action == 'login'){  
//   $email = filter_input(INPUT_POST,'email');
//   $password = filter_input(INPUT_POST,'password');
//   $user = login($email, $password);
//   var_dump($user);
//   if($user == NULL){
//       header("Location: /INFO3426/Assignment_6/loginform.php?errors=Missing login credentials.");
//   } else{
//       $_SESSION['Email'] = $user['Email'];
//       $_SESSION['Firstname'] = $user['Firstname'];
//       $_SESSION['Lastname'] = $user['Lastname'];
//       $_SESSION['UserId'] = $user['UserId'];
//       header('Location: /INFO3426/Assignment_6/index.php');
//  }
   

?>