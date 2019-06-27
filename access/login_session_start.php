<?php
   if ( !isset($_SESSION['Email']) ) {
      header("location:index.php");
   }
   $first_name = $_SESSION['First_Name'];
   $last_name = $_SESSION['Last_Niame'];
?>