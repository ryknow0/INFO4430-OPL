<?php 
/**
 * FUNCTION: Template
 * PURPOSE:
 * PARAMETERS:
 * RETURN:
 * NOTES:
 */

require('database.php');
//var_dump();

/**
 * FUNCTION: create_account
 * PURPOSE: Create new account from user data entered on /account/create_account.php
 * PARAMETERS: $account_name, $account_phone
 * RETURN: $last_id => will return the auto generated primary key of the recently
 *  created entry in the Library.Accounts table 
 * NOTES: The account needs to be created and AccountID generated before the first 
 * user can be added
 */
function create_account($account_name, $account_phone) {
    global $db;
    $query = 'INSERT INTO Accounts(Account_Name, Phone_Number)
                VALUES (:Account_Name, :Account_Phone)';
    //var_dump($query);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $statement = $db->prepare($query);
    var_dump($statement);
    $statement->bindParam(':Account_Name', $account_name);
    $statement->bindParam(':Account_Phone', $account_phone);
    $statement->execute();
    $last_id = $db->lastInsertId();
    echo "New record created succesfully. Last inserted ID is: " . $last_id ."<br>";
    $statement->closeCursor();
    echo "New Entry Account ID: " . $last_id;
    return $last_id;
}


/**
 * FUNCTION: add_user
 * PURPOSE: Add the initial Admin user to the account as part of the "add_account" action 
 * of the /account/index.php
 * PARAMETERS:$admin_email, $admin_first_name, $admin_last_name, $admin_department, 
 * $admin_password, $accountID, $permission
 * RETURN: $last_id => the auto incremented primary key value of the Library.Users table
 * NOTES:Initially implemented from the /account/index.php?action="add_account" probably 
 * should be copied to the user_db.php
 */
function add_primary_user($admin_email, $admin_first_name, $admin_last_name, $admin_department, $admin_password, $accountID, $permissions){
    global $db;
    $query = 'INSERT INTO Users(AccountID_FK, Username, Password, First_Name, Last_Name, Department, Permissions)
                VALUES (:AccountID, :Email, :Password, :First_Name, :Last_Name, :Department, :Permissions)';
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $statement = $db->prepare($query);
    $statement->bindParam(':Email', $admin_email);
    $statement->bindParam(':First_Name', $admin_first_name);
    $statement->bindParam(':Last_Name', $admin_last_name);
    $statement->bindParam(':Department', $admin_department);
    $statement->bindParam(':Password', $admin_password);
    $statement->bindParam(':AccountID', $accountID);
    $statement->bindParam(':Permissions', $permissions);
    echo "User Account ID is: " . $accountID;
    $statement->execute();
    $last_id = $db->lastInsertId();
    echo "New record created succesfully. User ID is: " . $last_id;
    $statement->closeCursor();
    return $last_id;
}

function get_accountID($userID){
    global $db;
    var_dump($userID);
    $query = 'SELECT AccountID_FK  FROM Users WHERE UserID = :UserID';
    $statement = $db->prepare($query);
    $statement->bindParam(':UserID', $userID);
    $statement->execute();
    $user_accountID = $statement->fetchAll();
    var_dump($user_accountID);
    echo "get_accountID: " . $user_accountID["AccountID_FK"] . "<br>";
    echo "get_accountID: " . $user_accountID[0] . "<br>";
    echo "get_accountID: " . $user_accountID["0"] . "<br>";
    $statement->closeCursor();
    return $user_accountID;

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
