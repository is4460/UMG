<?php
require_once 'login.php';

// Session management
session_start();
$_SESSION['message'] = '';

// Establish mysql connection
$db = new mysqli($host, $user, $pass, $db);

// Connection error handling
if ($db->connect_error){
  die("Oh, noooo...Connection to database failed! " . $db->connect_error);
}
echo "Connected successfully";

// Query treatments
$sql = "SELECT * FROM treatments";
$physicianID = mysqli_query($db, $sql);

// Make sure the form is being posted
if($_SERVER['REQUEST_METHOD'] == 'POST')
{
  $name = $mysqli->real_escape_string($_POST['treat_name']);
  $dob = $mysqli->real_escape_string($_POST['complete']);
  $blood = $mysqli->real_escape_string($_POST['date_start']);
  $address = $mysqli->real_escape_string($_POST['date_end']);
  $phone = $mysqli->real_escape_string($_POST['physicianID']);
  $poc = $mysqli->real_escape_string($_POST['patientID']);

  $_SESSION['name'] = $name;

  $sql = "INSERT INTO treatments (name, dob, blood, address, phone, poc) "
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
  <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

  <style>
  .jumbotron{
    background-color:#7BD9FF;
    color:white;
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
  </style>
</head>
<body>
  <div class="container">

    <!-- page-header adds space aroundtext and enlarges it. It also adds an underline at the end -->
    <div class="page-header">
      <h1>Uinta Medical Group</h1>
    </div>
    <!-- jumbotron enlarges fonts and puts everything in a gray box with rounded corners. If jumbotron is outside a container it fills the total width. You can change the styles by placing the changes after the Bootstrap CDN link -->
    <div class="jumbotron">

      <div class="btn-group btn-group-lg" role="group">
        <a href="index.php" class="btn btn-default" role="button">Home</a>
        <a href="patient.php" class="btn btn-default" role="button">Patients</a>
        <a href="physician.php" class="btn btn-default" role="button">Physicians</a>
        <a href="treatment.php" class="btn btn-default" role="button">Treatments</a>
      </div>



    </div>

    <div id="container">
      <div class="form-group">
        <h2>Add a treatment</h2>
        <form class="form-group" action="physician.php" method="post" enctype="multipart/form-data" autocomplete="off">
          <div class="alert alert-error"></div>
          <h3>Treatment Name:</h3><br> <input type="text" placeholder="Treatnebt Name" name="treat_name" required /><br>
          <h3>Complete:</h3><br> <input type="text" placeholder="Date of Birth" name="complete" required /><br>
          <h3>Date Start:</h3><br> <input type="text" placeholder="Blood Type" name="date_start" required /><br>
          <h3>Date End:</h3><br> <input type="text" placeholder="Address" name="date_end" required /><br>
          <h3>Acting Physician:</h3><br> <input type="text" placeholder="Phone" name="physicianID" required /><br>
          <h3>Treated Patient:</h3><br> <input type="text" placeholder="Treated Patient" name="patientID" required /><br>
          <br>
          <br>
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
      </div>

      <div id="treatments">
        <h3>Some treatments:</h3>
        <ul>
          <?php while($row = mysqli_fetch_assoc($physicianID)) : ?>
            <li class="physicianID">
              <span>Name: <?php echo $row['name'] ?><br></span>
              <span>Date of Birth: <?php echo $row['DOB'] ?><br></span>
              <span>Blood: <?php echo $row['Blood'] ?><br></span>
              <span>Address: <?php echo $row['Address'] ?><br></span>
              <span>Phone: <?php echo $row['phone'] ?><br></span>
              <span>Emergency Contact: <?php echo $row['poc'] ?><br></span>
              <span>Phone: <?php echo $row['poc_phone'] ?><br></span>
              <span>Position: <?php echo $row['position'] ?><br></span>
              <br>

            </li>
          <?php endwhile; $db->close();?>
        </ul>
      </div>

    </div>
  </body>
  </html>
