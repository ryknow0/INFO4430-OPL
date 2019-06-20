<!-- 
<?php
//   session_start();
//   if ( isset($_SESSION['username']) ) {
//       header('Location:index.php');
//   }
//   $errors='';
?>-->

<!DOCTYPE html>
 <html> 
<!-- the head section -->
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
  <link href="https://daks2k3a4ib2z.cloudfront.net/img/favicon.ico" rel="shortcut icon" type="image/x-icon">
  <link href="https://daks2k3a4ib2z.cloudfront.net/img/webclip.png" rel="apple-touch-icon">
</head>

<!-- the body section -->
<body>
  <div data-collapse="medium" data-animation="default" data-duration="400" class="navbar w-nav">
    <div class="container-2 w-container"><a href="index.html" class="w-nav-brand w--current"><img src="images/orem-library.jpg" alt="" class="navbar-image"></a>
      <div class="w-nav-button">
        <div class="w-icon-nav-menu"></div>
      </div>
    </div>
  </div>
  <div class="page-wrapper">
    <div class="container w-container">
      <div class="div-block"><img src="images/EventTracker_Logo-1.png" alt="" class="logo-image">
        <h1 class="heading">Event<br>Tracker</h1>
      </div>
      <div class="w-form">
        <form id="email-form" name="email-form" data-name="Email Form" class="form">
          <div class="field-wrapper"><label for="name" class="field-label">Username: </label><input type="text" class="form-field w-input" maxlength="256" name="name" data-name="Name" id="name"></div>
          <div class="field-wrapper"><label for="name-2" class="field-label">Password:</label><input type="text" class="form-field w-input" maxlength="256" name="name-2" data-name="Name 2" id="name-2"></div>
          <div class="w-clearfix"><a href="#" class="forgot-password-link">forgot password?</a></div>
          <div class="form-button-wrapper"><input type="submit" onclick="window.location.href = 'account/index.php';" value="Login" data-wait="Please wait..." class="button login w-button"><input type="submit" value="Sign Up" data-wait="Please wait..." class="button w-button"></div>
        </form>
        <div class="w-form-done">
          <div>Thank you! Your submission has been received!</div>
        </div>
        <div class="w-form-fail">
          <div>Oops! Something went wrong while submitting the form.</div>
        </div>
      </div>
    </div>
  </div>
  <div>

  <!--
    <a href="account/index.php" class="link">Create Account</a>
    <a href="event/create-event.html" class="link">Create Event</a>
    <a href="user/add-user.html" class="link">Add User</a>
    <a href="report/generate-report.html" class="link">Generate Report</a>
    <a href="admin-page.html" class="link">Admin Page</a>
    <a href="event/event-tracker.html" class="link">Event Tracker</a></div>
  <script src="https://d1tdp7z6w94jbb.cloudfront.net/js/jquery-3.3.1.min.js" type="text/javascript" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
  <script src="js/webflow.js" type="text/javascript"></script>-->
  <!-- [if lte IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/placeholders/3.0.2/placeholders.min.js"></script><![endif] -->

<!--  </body> -->

<?php include 'view/footer.php'; ?>
