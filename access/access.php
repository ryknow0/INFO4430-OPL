
<?php
   if ( !isset($_SESSION['Email']) ) {
      header("location:loginform.php");
   }
  $first_name = $_SESSION['Firstname'];
   $last_name = $_SESSION['Lastname'];
?>
