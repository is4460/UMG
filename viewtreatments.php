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

// Query patients
$sql = "SELECT * FROM treatments";
$treatment = mysqli_query($db, $sql);
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="icon" href="images/favicon.ico" type="image/x-icon" />

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
    <div class="page-header">
      <h1>Uinta Medical Group</h1>
    </div>

    <!-- Adds the button bar -->
    <?php require_once('buttonbar.php'); ?>

    <div id="container">
      <h1 class="well">Current Treatments</h1>
      <div id="treatments">
        <ul style="padding-left:0px">
          <?php while($row = mysqli_fetch_assoc($treatment)) : ?>
            <li class="treatments">
              <span><hr width="60%" NOSHADE align="left" style="height:3px"></span>
              <span><b><?php echo $row['treat_name'] ?><br></span></b>
              <span><hr width="60%" NOSHADE align="left" style="height:3px"></span>
              <span>Start Date: <?php echo $row['date_start'] ?><br></span>
              <span>End Date: <?php echo $row['date_end'] ?><br></span>
              <span>Physician: Dr. Steven Speilberg <br></span>
              <span>Patient: Patrick Tobin <br></span>
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
