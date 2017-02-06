<?php
require_once 'creds.php';
require_once 'navbar.php';

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
  <link href="https://getbootstrap.com/examples/sticky-footer-navbar/sticky-footer-navbar.css" rel="stylesheet">


  <style>
  .jumbotron{
    background-color:#2E2D88;
    color:white;
    padding: 20px;
    padding-left: 20px;
    margin-top: 10px;

  }
  /* Adds borders for tabs */
  .tab-content {
    border-left: 1px solid #ddd;
    border-right: 1px solid #ddd;
    border-bottom: 1px solid #ddd;
    padding: 10px;
  }
  .nav-tabs {
    margin-bottom: 0;
  }


  .btn-twitter{color:#fff;background-color:#55acee;border-color:rgba(0,0,0,0.2)}.btn-twitter:hover,.btn-twitter:focus,.btn-twitter:active,.btn-twitter.active,.open .dropdown-toggle.btn-twitter{color:#fff;background-color:#309aea;border-color:rgba(0,0,0,0.2)}
  .btn-twitter:active,.btn-twitter.active,.open .dropdown-toggle.btn-twitter{background-image:none}
  .btn-twitter.disabled,.btn-twitter[disabled],fieldset[disabled] .btn-twitter,.btn-twitter.disabled:hover,.btn-twitter[disabled]:hover,fieldset[disabled] .btn-twitter:hover,.btn-twitter.disabled:focus,.btn-twitter[disabled]:focus,fieldset[disabled] .btn-twitter:focus,.btn-twitter.disabled:active,.btn-twitter[disabled]:active,fieldset[disabled] .btn-twitter:active,.btn-twitter.disabled.active,.btn-twitter[disabled].active,fieldset[disabled] .btn-twitter.active{background-color:#55acee;border-color:rgba(0,0,0,0.2)}

  .btn-facebook{color:#fff;background-color:#3b5998;border-color:rgba(0,0,0,0.2)}.btn-facebook:hover,.btn-facebook:focus,.btn-facebook:active,.btn-facebook.active,.open .dropdown-toggle.btn-facebook{color:#fff;background-color:#30487b;border-color:rgba(0,0,0,0.2)}
  .btn-facebook:active,.btn-facebook.active,.open .dropdown-toggle.btn-facebook{background-image:none}
  .btn-facebook.disabled,.btn-facebook[disabled],fieldset[disabled] .btn-facebook,.btn-facebook.disabled:hover,.btn-facebook[disabled]:hover,fieldset[disabled] .btn-facebook:hover,.btn-facebook.disabled:focus,.btn-facebook[disabled]:focus,fieldset[disabled] .btn-facebook:focus,.btn-facebook.disabled:active,.btn-facebook[disabled]:active,fieldset[disabled] .btn-facebook:active,.btn-facebook.disabled.active,.btn-facebook[disabled].active,fieldset[disabled] .btn-facebook.active{background-color:#3b5998;border-color:rgba(0,0,0,0.2)}

  .btn-linkedin{color:#fff;background-color:#007bb6;border-color:rgba(0,0,0,0.2)}.btn-linkedin:hover,.btn-linkedin:focus,.btn-linkedin:active,.btn-linkedin.active,.open .dropdown-toggle.btn-linkedin{color:#fff;background-color:#005f8d;border-color:rgba(0,0,0,0.2)}
  .btn-linkedin:active,.btn-linkedin.active,.open .dropdown-toggle.btn-linkedin{background-image:none}
  .btn-linkedin.disabled,.btn-linkedin[disabled],fieldset[disabled] .btn-linkedin,.btn-linkedin.disabled:hover,.btn-linkedin[disabled]:hover,fieldset[disabled] .btn-linkedin:hover,.btn-linkedin.disabled:focus,.btn-linkedin[disabled]:focus,fieldset[disabled] .btn-linkedin:focus,.btn-linkedin.disabled:active,.btn-linkedin[disabled]:active,fieldset[disabled] .btn-linkedin:active,.btn-linkedin.disabled.active,.btn-linkedin[disabled].active,fieldset[disabled] .btn-linkedin.active{background-color:#007bb6;border-color:rgba(0,0,0,0.2)}

  </style>

</head>
<body>
    <div class="container">
    <!-- page-header adds space aroundtext and enlarges it. It also adds an underline at the end -->
    <div class="page-header">
      <h1>Uinta Medical Group</h1>
    </div>

    <div class="container">
      <div class="btn-group btn-group-lg" role="group">
        <a href="patient.php" class="btn btn-default" role="button">Patients</a>
        <a href="physician.php" class="btn btn-default" role="button">Physicians</a>
        <a href="treatment.php" class="btn btn-default" role="button">Treatments</a>
      </div>
    </div>

    <div id="container">
      <div class="form-group">
        <h2>Add a patient</h2>
        <form class="form-group" action="patient.php" method="post" enctype="multipart/form-data" autocomplete="off">
          <div class="alert alert-error"></div>
          <h3>Patient Name:</h3> <input type="text" placeholder="Name" name="name" required />
          <h3>Date of Birth:</h3> <input type="text" placeholder="Date of Birth" name="dob" required />
          <h3>Blood Type:</h3> <input type="text" placeholder="Blood Type" name="blood" required />
          <h3>Address:</h3> <input type="text" placeholder="Address" name="address" required />
          <h3>Phone:</h3> <input type="text" placeholder="Phone" name="phone" required />
          <h3>Point of Contact:</h3> <input type="text" placeholder="Emergency Contact" name="poc" required />
          <h3>Contact Phone:</h3> <input type="text" placeholder="Contact Phone" name="poc_phone" required />
          <br>
          <br>
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
      </div>
    </div>
  </body>
  </html>
