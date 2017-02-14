<?php
// Creds for MySQL connection
require_once 'creds.php';

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
  <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
  <link href='https://fonts.googleapis.com/css?family=Oxygen' rel='stylesheet' type='text/css'>

  <!-- Custom styles for this template -->
  <link href="https://getbootstrap.com/examples/sticky-footer-navbar/sticky-footer-navbar.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/sticky-footer-navbar.css" rel="stylesheet">
  <link href="css/fancy.css" rel="stylesheet">

  <style>

  /* Everything but the jumbotron gets side spacing for mobile first views */
  .header,
  .marketing,
  .footer {
    padding-right: 15px;
  }
  /* Custom page header */
  .header {
    border-bottom: 1px solid #e5e5e5;
  }
  /* Make the masthead heading the same height as the navigation */
  .header h3 {
    padding-bottom: 19px;
    margin-top: 0;
    margin-bottom: 0;
    line-height: 40px;
  }
  /* Customize container */
  @media (min-width: 768px) {
    .container {
      max-width: 730px;
    }
  }
  div.container {
    padding-left:0px;
    padding-right:0px;
  }
  .container-narrow > hr {
    margin: 30px 0;
  }
  /* Supporting marketing content */
  .marketing {
    margin: 40px 0;
  }
  .marketing p + h4 {
    margin-top: 28px;
  }
  /* Responsive: Portrait tablets and up */
  @media screen and (min-width: 768px) {
    /* Remove the padding we set earlier */
    .header,
    .marketing,
    .footer {
      padding-right: 0;
      padding-left: 0;
    }
    /* Space out the masthead */
    .header {
      margin-bottom: 30px;
    }
  }
  </style>
</head>
<body>
  <?php require_once('navbar.php');?>

  <div class="container" style="padding: 0px">
<<<<<<< HEAD

=======
    <div class="page-header">
      <h1>Uinta Medical Group</h1>
    </div>
>>>>>>> 7ebf82d7d137a2373edddc78c4979acf204ffea3
    <?php require_once('buttonbar.php'); ?>
  </div>
  <div class="container" style="padding: 0px">
    <h1 class="well">Add Physician</h1>
    <div class="col-lg-12 well" style="margin-bottom: 50px">
      <div class="row">
        <form>
          <div class="col-sm-12">
            <div class="row">
              <div class="col-sm-6 form-group">
                <label>Patient Name</label>
                <input type="text" placeholder="Enter Name Here.." class="form-control">
              </div>
              <div class="col-sm-6 form-group">
                <label>Date of Birth</label>
                <input type="text" placeholder="Enter DOB Here.." class="form-control">
              </div>
            </div>
            <div class="form-group">
              <label>Address</label>
              <textarea placeholder="Enter Address Here.." rows="3" class="form-control"></textarea>
            </div>
            <div class="row">
              <div class="col-sm-4 form-group">
                <label>City</label>
                <input type="text" placeholder="Enter City Name Here.." class="form-control">
              </div>
              <div class="col-sm-4 form-group">
                <label>State</label>
                <input type="text" placeholder="Enter State Name Here.." class="form-control">
              </div>
              <div class="col-sm-4 form-group">
                <label>Zip</label>
                <input type="text" placeholder="Enter Zip Code Here.." class="form-control">
              </div>
            </div>
            <div class="row">
              <div class="col-sm-6 form-group">
                <label>Blood Type</label>
                <input type="text" placeholder="Enter Blood Type Here.." class="form-control">
              </div>
              <div class="col-sm-6 form-group">
                <label>Phone Number</label>
                <input type="text" placeholder="Enter Phone Number Here.." class="form-control">
              </div>
            </div>
            <div class="row">
              <div class="col-sm-4 form-group">
                <label>Emergency Contact</label>
                <input type="text" placeholder="Enter Emergency Contact Here.." class="form-control">
              </div>
              <div class="col-sm-4 form-group">
                <label>Contact Phone</label>
                <input type="text" placeholder="Enter Contact Phone Here.." class="form-control">
              </div>
              <div class="col-sm-4 form-group">
                <label>Position</label>
                <input type="text" placeholder="Enter Position Here.." class="form-control">
              </div>
            </div>
            <button type="button" class="btn btn-primary">Submit</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</body>
<!-- Footer -->
<?php require_once('footer.php');?>
</html>
