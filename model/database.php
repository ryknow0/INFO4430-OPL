<?php
   //mb_internal_encoding('UTF-8');
   //mb_http_output('UTF-8');
   //mb_http_input('UTF-8');
   //mb_regex_encoding('UTF-8');
    $dsn = 'mysql:host=localhost;dbname=Library';
    $username = 'remoteuser';
    $password = 'remote_User0!'; 
    try {
       //db = global variable it is declared here and used other plces on the site
        $db = new PDO($dsn, $username, $password);
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        echo 'Error Message ' . $error_message;
        exit();
    }
?>
