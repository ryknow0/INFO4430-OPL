<?php 
require('database.php');

function create_account($account_name, $account_phone) {
    global $db;
    $query = 'INSERT INTO Account(Account_Name, Phone_Number)
                VALUES (:Account_Name, :Account_Phone)';
    //var_dump($query);
    $statement = $db->prepare($query);
    $statement->bindParam(':Account_Name', $account_name);
    $statement->bindParam(':Account_Phone', $account_phone);
    $statement->execute();
    $last_id = $db->lastInsertId();
    //$last_id = $statement->insert_Id();
    //$last_id =  $db->mysql_insert_id();
    echo "New record created succesfully. Last inserted ID is: " . $last_id;
    $statement->closeCursor();
    
    $query2 = 'SELECT AccountID
                FROM Accounts
                WHERE Account_Name = :Account_Name';
    $stmt = $db->prepare($query2);
    $stmt->bindParam('Account_Name', $account_name);
    $stmt->bindParam('AccountID', $accountId);
    $stmt->execute();
    $new_accountID = $statement->fetch(PDO::FETCH_BOTH);
    echo "New Record Account ID: " . $new_accountID;



    return $new_accountID;
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
    $statement->bindParam(':Email', $admin_email);
    $statement->bindParam(':First_Name', $admin_first_name);
    $statement->bindParam(':Last_Name', $admin_last_name);
    $statement->bindParam(':AccountID', $admin_accountID);
    $statement->execute();
    $last_id = $db->lastInsertId();
    echo "New record created succesfully. Last inserted ID is: " . $last_id;
    $user = $statement->fetch(PDO::FETCH_BOTH);
    $statement->closeCursor();
    return $user;

    //$query = 'SELECT 
    //            FROM library.users
    //            WHERE userid = "$last_id"';
    //$statement->bindParam('');
    //$statement->execute();
    

    //return $statement->rowCount();
}

function get_account(){
    global $db;
    $query = '';
    $statement = $db->prepare($query);
    //$statement->bindParam('', );
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
