<!-- <!DOCTYPE html>
<html> -->
<!-- the head section -->
<!-- <head>
    <title>RDC My Guitar Shop</title>
    <link rel="stylesheet" type="text/css" href="http://localhost/INFO3426/assign4/main.css">
</head> -->

<!-- the body section -->
<!-- <body>
<header><h1>My Guitar Shop</h1></header> -->
<?php
   session_start();
   if ( isset($_SESSION['username']) ) {
       header('Location: http://localhost/account/index.php');
   }
   $errors='';
?>

<!-- <!DOCTYPE html>
<html> -->
<!-- the head section /INFO3426/Assignment_6-->
<!-- <head>
  <title>OPL - Event Tracker</title>
  <link rel="stylesheet" type="text/css" href="http://localhost/INFO4430/styles.css">
</head> -->

<!-- the body section -->
<!--<body>
Welcome <?=$first_name?> <?=$last_name?>
<header><h1>The Book Loan System</h1> </header> -->

<!DOCTYPE html>
<!--  This site was created in Webflow. http://www.webflow.com  -->
<!--  Last Published: Mon May 20 2019 02:58:24 GMT+0000 (UTC)  -->
<html data-wf-page="5ce2009f7c5e2f9884026c00" data-wf-site="5ce2009f7c5e2f0115026bff">
<head>
  <meta charset="utf-8">
  <title>Orem Library Event Tracker</title>
  <meta content="width=device-width, initial-scale=1" name="viewport">
  <meta content="Webflow" name="generator">
  <link href="css/normalize.css" rel="stylesheet" type="text/css">
  <link href="css/webflow.css" rel="stylesheet" type="text/css">
  <link href="css/orem-library-event-tracker.webflow.css" rel="stylesheet" type="text/css">
  <!-- [if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js" type="text/javascript"></script><![endif] -->
  <script type="text/javascript">!function(o,c){var n=c.documentElement,t=" w-mod-";n.className+=t+"js",("ontouchstart"in o||o.DocumentTouch&&c instanceof DocumentTouch)&&(n.className+=t+"touch")}(window,document);</script>
  <link href="images/favicon.ico" rel="shortcut icon" type="image/x-icon">
  <link href="images/webclip.png" rel="apple-touch-icon">
</head>