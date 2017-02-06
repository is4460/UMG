<?php
require_once('creds.php');
require_once('navbar.php');

// Session management
session_start();
$_SESSION['message'] = '';

// Establish mysql connection
$db = new mysqli($host, $user, $pass, $db);

// Connection error handling
if ($db->connect_error){
  die("Oh, noooo...Connection to database failed! " . $db->connect_error);
}

// Query appointments
$sql = "SELECT * FROM appointments";
$appointments = mysqli_query($db, $sql);
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />

  <meta charset="UTF-8">

  <!-- If IE use the latest rendering engine -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <!-- Set the page to the width of the device and set the zoon level -->
  <meta name="viewport" content="width = device-width, initial-scale = 1">
  <title>Uinta Medical Group</title>

  <!-- Bootstrap styling -->
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
  <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

  <!-- Fontawesome awesomeness -->
  <script src="https://use.fontawesome.com/7b7005c99f.js"></script>

  <!-- Google Fonts -->
  <link href='https://fonts.googleapis.com/css?family=Passion+One' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Oxygen' rel='stylesheet' type='text/css'>

  <!-- Custom styles for this template -->
  <link href="css/sticky-footer-navbar.css" rel="stylesheet">
  <link href="css/fancy.css" rel="stylesheet">

</head>
<body>

    <div class="container" style="padding:0px">
    <!-- page-header adds space around text and enlarges it. It also adds an underline at the end -->
    <div class="page-header">
      <h1>Uinta Medical Group</h1>
    </div>

     <!-- Adds the button bar -->
    <?php require_once('buttonbar.php'); ?>

    <div id="container">
    <h2>Current Appointments</h2>
    <div id="appointments">
        <ul>
          <?php while($row = mysqli_fetch_assoc($appointments)) : ?>
            <li class="appointments">
              <span><hr width="60%" NOSHADE align="left" style="height:3px"></span>
              <span><b><?php echo $row['patient_name'] ?><br></span></b>
              <span><hr width="60%" NOSHADE align="left" style="height:3px"></span>
              <span>Physician(s): <?php echo $row['physician_name'] ?><br></span>
              <span>Start Time: <?php echo $row['start_datetime'] ?><br></span>
              <span>End Time: <?php echo $row['end_datetime'] ?><br></span>
              <span>Treatment Reason: Heart Attack<br></span>
              <br>
            </li>
          <?php endwhile; $db->close();?>
        </ul>
      </div>
    </div>
  </div>
  </body>
  <?php require_once('footer.php');?>
  </html>
