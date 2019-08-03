

<?php
//   if ( !isset($_SESSION['Email']) ) {
//      header("location:index.php");
//   }
//   $first_name = $_SESSION['First_Name'];
//   $last_name = $_SESSION['Last_Niame'];
if($action= 'user_dashboard'){
$arrayAccountID = get_accountID($userID);
$accountID = $arrayAccountID[0];
$events = get_all_events($accountID);
$json_events = json_encode($events);

}
$user_first_name = 'Ryan';
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
  <script>
    google.charts.load('current', {'packages':['table']});
    google.charts.setOnLoadCallback(drawTable);

    function drawTable() {
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Name');
        data.addColumn('number', 'Salary');
        data.addColumn('boolean', 'Full Time Employee');
        data.addRows([
            ['Mike',  {v: 10000, f: '$10,000'}, true],
            ['Jim',   {v:8000,   f: '$8,000'},  false],
            ['Alice', {v: 12500, f: '$12,500'}, true],
            ['Bob',   {v: 7000,  f: '$7,000'},  true]
        ]);

        var table = new google.visualization.Table(document.getElementById('table_div'));

        table.draw(data, {showRowNumber: true, width: '100%', height: '100%'});
    }
</script>
</head>
