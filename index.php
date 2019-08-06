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
            // Create the beginning of HTML table, and of the first row
$html_table = '<table border="1" cellspacing="0" cellpadding="2"><tr>';
$nr_col = 11;       // Sets the number of columns

$i = 0;       // index used to control when to add new row (incremented to each loop)
// Traverse the array with FOREACH
foreach($aray AS $key=>$val) {
  $html_table .= '<td>' .$key. ' - '. $val. '</td>';       // adds key-value in columns in table
  $i++;

  // If the number of columns is completed for a row (rest of division of $i to $nr_col is 0)
  // Closes the current row, and begins another row
  $col_to_add = $i % $nr_col;
  if($col_to_add == 0) { $html_table .= '</tr><tr>'; }
}

// Adds empty column if the current row is not completed
if($col_to_add != 0) $html_table .= '<td colspan="'. ($nr_col - $col_to_add). '">&nbsp;</td>';

$html_table .= '</tr></table>';         // ends the last row, and the table

// Delete posible empty row (<tr></tr>) which cand be created after last column
$html_table = str_replace('<tr></tr>', '', $html_table);

echo $html_table;        // display the HTML table
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
