<?php

// Creds for MySQL connection
require_once('creds.php');

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
$sql = "SELECT * FROM patients";
$patientID = mysqli_query($db, $sql);

// Make sure the form is being posted
if($_SERVER['REQUEST_METHOD'] == 'POST')
{
  $name = $mysqli->real_escape_string($_POST['name']);
  $dob = $mysqli->real_escape_string($_POST['dob']);
  $blood = $mysqli->real_escape_string($_POST['blood']);
  $address = $mysqli->real_escape_string($_POST['address']);
  $phone = $mysqli->real_escape_string($_POST['phone']);
  $poc = $mysqli->real_escape_string($_POST['poc']);

  $_SESSION['name'] = $name;

  $sql = "INSERT INTO patients (name, dob, blood, address, phone, poc) "
  . "VALUES ('$name', '$dob', '$blood', '$address', '$phone', '$poc')";
  if ($mysqli->query($sql)=== true){
    $_SESSION['message'] = 'Registration successful';
    //header("location: welcome.php");
  }
  else {
    $_SESSION['message'] = "User could not be added";
  }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>

  <!-- Favicon -->
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

  <!-- Top navbar -->
  <?php require_once('navbar.php');?>
<<<<<<< HEAD

=======
  
>>>>>>> 7ebf82d7d137a2373edddc78c4979acf204ffea3
    <div class="container" style="padding:0px">
    

     <!-- Adds the button bar -->
    <?php require_once('buttonbar.php'); ?>

    <div id="container">
      <h1 class="well">Current Patients</h1>
    <div id="patients">
        <ul style="padding-left:0px">
          <?php while($row = mysqli_fetch_assoc($patientID)) : ?>
            <li class="patients">
              <span><hr width="60%" NOSHADE align="left" style="height:3px"></span>
              <span><b><?php echo $row['name'] ?><br></span></b>
              <span><hr width="60%" NOSHADE align="left" style="height:3px"></span>
              <span>Date of Birth: <?php echo $row['DOB'] ?><br></span>
              <span>Blood: <?php echo $row['Blood'] ?><br></span>
              <span>Address: <?php echo $row['Address'] ?><br></span>
              <span>Phone: <?php echo $row['phone'] ?><br></span>
              <span>Emergency Contact: <?php echo $row['poc'] ?><br></span>
              <span>Phone: <?php echo $row['poc_phone'] ?><br></span>
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
