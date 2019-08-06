<?php
session_start();
include 'view/account_dashboard_header.php';

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
    <div class="container w-container"><!--Maybe insert a heading for Account Name-->
      <h1 class="centered-h1">Welcome, <?php echo $user_first_name?></h1>
      <div class="columns w-row">
        <div class="w-col w-col-4 w-col-small-small-stack">
          <h3 class="h3">Top Events</h3><!--Google Charts API -> pie chart of count of event types-->
        </div>
        <div class="w-col w-col-4 w-col-small-small-stack">
          <h3 class="h3">YTD Attendance</h3>
          <h1 class="h1-huge"><?php echo $ytd_attendance?></h1><!--Google Charts API? or need query and function to get this number-->
        </div>
        <div class="w-col w-col-4 w-col-small-small-stack">
          <h3 class="h3">YTD Events</h3>
          <h1 class="h1-huge"><?php echo $ytd_events?></h1><!--Goolge Charts API? or need query and function to get this number -->
        </div>
      </div>
      <div class="columns w-row">
        <div class="w-col w-col-7">
          <!-- Google Charts API or manual Table to display upcoming events on an account-->
          <div>
          <?php 
          function event_table($events = array()){
            $rows = array();
            foreach ($events as $row) {
              $cells = array();
              foreach ($row as $cell) {
                  $cells[] = "<td>{$cell}</td>";
                }
              $rows[] = "<tr>" . implode('', $cells) . "</tr>";
            }
            return "<table class='hci-table'>" . implode('', $rows) . "</table>";
          }
          echo event_table($events);
          ?>
          </div>
        </div>
        <div class="w-col w-col-4 w-col-small-small-stack">
            <div class="centered-contents-div">
            <a href="event/index.php?action=event_search" class="button login w-button">Edit Event</a>
            </div>
        </div>
      </div>
      <div class="columns w-row">
          <div class="centered-contents-div">
            <a href="event/index.php?action=create_event" class="button fixed-width-button w-button">Create Event</a>
          </div>
          <div class="w-col w-col-4 w-col-small-small-stack">
            <a href="user/index.php?action=create_user" class="button fixed-width-button w-button">Add User</a>
          </div>
          <div class="w-col w-col-4 w-col-small-small-stack">
            <a href="report/index.php?action=current_events" class="button fixed-width-button w-button">Generate Report</a>
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
