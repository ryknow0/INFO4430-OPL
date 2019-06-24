<?php
session_start();
include 'view/header.php';
//require ('model/event_db.php');
//ini_set('display_errors', 1);
?>
<!-- User Account Page-->
<body>
  <div data-collapse="medium" data-animation="default" data-duration="400" class="navbar w-nav">
    <div class="container-2 w-container"><a href="index.html" class="w-nav-brand"><img src="images/orem-library.jpg" alt="" class="navbar-image"></a>
      <div class="w-nav-button">
        <div class="w-icon-nav-menu"></div>
      </div>
    </div>
  </div>
  <div class="page-wrapper">
    <div class="container w-container">
      <h1 class="centered-h1">Welcome, Jono</h1>
      <div class="columns w-row">
        <div class="w-col w-col-4 w-col-small-small-stack">
          <h3 class="h3">Top Events</h3>
        </div>
        <div class="w-col w-col-4 w-col-small-small-stack">
          <h3 class="h3">YTD Attendance</h3>
          <h1 class="h1-huge">1895</h1>
        </div>
        <div class="w-col w-col-4 w-col-small-small-stack">
          <h3 class="h3">YTD Events</h3>
          <h1 class="h1-huge">12</h1>
        </div>
      </div>
      <div class="columns w-row">
        <div class="w-col w-col-7">
          <!-- Table to display upcoming events on an account-->
          <div class="bold-text">Upcoming Events</div>
          <div class="w-col w-col-4">
          <table border="1">
            <tr><td>Date</td><td>Event</td><td>Event Type</td><td>Action</td></tr>
          <!--<?php //foreach ($event as $event) ?>
            <tr>
               <?php //echo '<td width=\'400\'>'. $event['Name'] . 
               // '</td><td width='\'400\'>'. $event['Date'] .
               // '</td><td width='\'400\'>' . $event['Type'] .
               //'</td><td>Edit | Delete</td>'; ?>
             </tr>
             <?php //endforeach; ?>-->
          </table>
          </div>
        </div>
        <div class="w-col w-col-5">
          <div class="centered-contents-div"><a href="report/index.php" class="button fixed-width-button w-button">Generate Report</a></div>
          <div class="centered-contents-div"><a href="event/index.php" class="button fixed-width-button w-button">Create Event</a></div>
          <div class="centered-contents-div"><a href="user/index.php" class="button fixed-width-button w-button">Add User</a></div>
        </div>
      </div>
    </div>
  </div>
  <div>

  </div>
  <script src="https://d1tdp7z6w94jbb.cloudfront.net/js/jquery-3.3.1.min.js" type="text/javascript" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
  <script src="js/webflow.js" type="text/javascript"></script>
  <!-- [if lte IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/placeholders/3.0.2/placeholders.min.js"></script><![endif] -->
</body>
<?php include 'view/footer.php'; ?>
