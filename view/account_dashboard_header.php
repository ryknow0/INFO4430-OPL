

<?php
//   if ( !isset($_SESSION['Email']) ) {
//      header("location:index.php");
//   }
//   $first_name = $_SESSION['First_Name'];
//   $last_name = $_SESSION['Last_Niame'];
require('model/account_db.php');
require('model/user_db.php');
require('model/event_db.php');
$userID='5';
//if($action= 'user_dashboard'){
$arrayAccountID = get_accountID($userID);
$accountID = $arrayAccountID[0];
//var_dump($accountID);
$events = get_all_events($accountID);
var_dump($events);
$json_events = json_encode($events);
echo "<br>";
//echo $events[1][0];
//echo $events[1][2];
$array= $events;
//}

$login_username = $_SESSION['First_Name'];
var_dump($login_username);
echo "this is the first name of the logged in user: " . $login_username . "<br>";
$ytd_attendance = 1202;
$ytd_events = 112;
?>

<!DOCTYPE html>
<!--  This site was created in Webflow. http://www.webflow.com  -->
<!--  Last Published: Mon May 20 2019 02:58:24 GMT+0000 (UTC)  -->
<html data-wf-page="5ce2009f7c5e2f9884026c00" data-wf-site="5ce2009f7c5e2f0115026bff">
<head>
    <meta charset="utf-8">
    <title>Orem Library Event Tracker</title>
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <meta content="Webflow" name="generator">
    <link href="http://10.52.2.69/css/normalize.css" rel="stylesheet" type="text/css">
    <link href="http://10.52.2.69/css/webflow.css" rel="stylesheet" type="text/css">
    <link href="http://10.52.2.69/css/orem-library-event-tracker.webflow.css" rel="stylesheet" type="text/css">
    <!-- [if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js" type="text/javascript"></script><![endif] -->
    <script type="text/javascript">!function(o,c){var n=c.documentElement,t=" w-mod-";n.className+=t+"js",("ontouchstart"in o||o.DocumentTouch&&c instanceof DocumentTouch)&&(n.className+=t+"touch")}(window,document);</script>
    <link href="http://10.52.2.69/images/favicon.ico" rel="shortcut icon" type="image/x-icon">
    <link href="http://10.52.2.69/images/webclip.png" rel="apple-touch-icon">
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
        google.charts.load("current", {packages:["corechart"]});
        google.charts.setOnLoadCallback(drawChart);
        function drawChart() {
            var data = google.visualization.arrayToDataTable([
                ['Category', 'Num of Events'],
                ['After Hours',     8],
                ['Book Signing',      2],
                ['Clubs',  7],
                ['Film Screening', 15],
                ['Lecture',    10],
                ['Outreach',    30],
                ['Panel',    3],
                ['Passive Program',    7],
                ['Performance',    7],
                ['Activity Station',    3],
                ['Storytime',    20]
            ]);

            var options = {
                //title: 'My Daily Activities',
                pieHole: 0.4,
            };

            var chart = new google.visualization.PieChart(document.getElementById('donutchart'));
            chart.draw(data, options);
        }
    </script>
    <script>
    google.charts.load('current', {'packages':['table']});
    google.charts.setOnLoadCallback(drawTable);

    //$events = get_all_events($accountID);
    //echo json_encode($events);

    //while($row = get_all_events($))
    function drawTable() {
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Event Name');
        data.addColumn('string', 'Date');
        data.addColumn('string', 'Start');
        data.addColumn('string', 'End');
        data.addColumn('string', 'Location');
        data.addColumn('string', 'Category');
        data.addColumn('string', 'Audience');
        data.addColumn('string', 'Type');
        data.addColumn('string', 'Topic');
        data.addRows([
            ['Acting up: Beauty and Beast', '2019-01-08', '19:00:00', '21:00:00', 'Fireplace', 'Performance', 'Kids', 'Comedy', 'Fiction'],
            ['Event Test 1', '2019-07-31', '07:00:00', '08:00:00', 'Story Telling Wing', 'After Hours', 'Kids', 'Library Sponsored', 'STEM'],
            ['Utah Lyric Opera Young Artists', '2019-09-07', '19:00:00', '21:00:00', 'Fireplace', 'Performance', 'Adult Kids', 'Singing', 'Opera']
        ]);

        var table = new google.visualization.Table(document.getElementById('table_div'));

        table.draw(data, {showRowNumber: true, width: '100%'});
    }
</script>
</head>
