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
  <?php require_once('navbar.php');?>
  <div class="container" style="padding:0px" style="margin-left:100px">
    <div class="page-header">
      <h1>Uinta Medical Group</h1>
      <!-- Adds the button bar -->
    </div>
    <?php require_once('buttonbar.php'); ?>
    <br>
    <div class="panel panel-default">
      <div class="panel-heading">
        <h3 class="panel-title">Latest Tweets</h3>
      </div>
      <div class="panel-body">
        <i class="fa fa-twitter-square"></i><blockquote>Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos! - <a href="twitter.com">@doakk</a></blockquote>
      </div>
    </div>


    <div class="panel panel-default">
      <div class="panel-heading">
        <h3 class="panel-title">Welcome</h3>
      </div>
      <div class="panel-body">
        <img class="object-fit_cover" src="images/banner.jpg" alt="Unita Medical Group"</img>
        <div class="card">
          <div class="card-block">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Sed cursus ante dapibus diam. Sed nisi. Nulla quis sem at nibh elementum imperdiet. Duis sagittis ipsum. Praesent mauris. Fusce nec tellus sed augue semper porta. Mauris massa. Vestibulum lacinia arcu eget nulla. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Curabitur sodales ligula in libero. Sed dignissim lacinia nunc.
            </p>
            <p>
              <blockquote class="blockquote">Curabitur tortor. Pellentesque nibh. Aenean quam. In scelerisque sem at dolor. -<cite>Dr. Majsds<cite></p></blockquote>
              </div>
            </div>
          </div>
        </div>
      </div>
      </body>
  <?php require_once('footer.php');?>
  </html>
