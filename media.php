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
  <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
  <link href='https://fonts.googleapis.com/css?family=Oxygen' rel='stylesheet' type='text/css'>

  <!-- Custom styles for this template -->
  <link href="css/sticky-footer-navbar.css" rel="stylesheet">
  <link href="css/fancy.css" rel="stylesheet">

  <style>


  div.page-header {
    font-family: oxygen;
    font-size: 48px;
  }

  p {
    font-family: roboto;
  }

  /*Fix for mobile screens*/
  @media(max-width: 480px) {
    div.page-header {
      font-size: 18pt;
    }
  }

  </style>
</head>
<body>
  <?php require_once('navbar.php');?>
  <img class="object-fit_cover" style="width: 100%" src="images/banner.jpg" alt="Unita Medical Group">
  <div class="container">
    <div class="page-header">
      <!-- Adds the button bar -->
    </div>
    <?php require_once('buttonbar.php'); ?>
    <br>
    <div class="panel panel-default">
      <div class="panel-heading"> <!-- style="padding:5px; padding-left:10px"-->

        <h3 class="panel-title"><b>Media</b></h3>
      </div>
    </div>
    <div class="panel panel-default">
      <div class="panel-heading">
        <h3 class="panel-title"></h3>
      </div>
      <div class="panel-body">
        <div class="card">
          <div class="card-block"> <!--style="margin-top:20px; margin-bottom:20px"-->
              <img src="https://media.giphy.com/media/y3Kd9Sx38HDXi/giphy.gif">
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
  <?php require_once('footer.php');?>
  </html>
