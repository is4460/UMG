<?php
require_once 'login.php';

// Establish mysql connection
$db = new mysqli($host, $user, $pass);

// Connection error handling
if ($db->connect_error){
  die("Oh, noooo...Connection to database failed! " . $db->connect_error);
}
echo "Connected successfully";

// Query test
$sql = "SELECT patientID FROM patients";
$patientID = mysqli_query($db, $sql);
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
    background-color:#2E2D88;
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
  <button type="button" class="btn btn-default">Home</button>
  <button type="button" class="btn btn-default">Something</button>
  <button type="button" class="btn btn-default">Something</button>
  <button type="button" class="btn btn-default">Something</button>
  </div>



</div>

<div id="container">
  <header>
    <h3>Patient ID</h3>
  </header>

  <div id="patients">
    <ul>
      <?php while($row = mysqli_fetch_assoc($patientID)) : ?>
        <li class="patientID"><span><?php echo $row['patientID'] ?> - </span>Riiiiiip</li>
      <?php endwhile; $db->close();?>
    </ul>
  </div>

</div>
</body>
</html>
