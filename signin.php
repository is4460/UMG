
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

</head>

<body>
  <?php require_once('navbar.php');?>
  <div class="container">
    <div class="row">
      <div class="span12">
        <div class="" id="loginModal">
          <div class="modal-header">
            <h3>Have an Account?</h3>
          </div>
          <div class="modal-body">
            <div class="well">
              <ul class="nav nav-tabs">
                <li class="active"><a href="#login" data-toggle="tab">Login</a></li>
                <li><a href="#" data-toggle="tab">Create Account</a></li>
              </ul>
              <div id="myTabContent" class="tab-content" style="padding-top:10px">
                <div class="tab-pane active in" id="login">
                  <form class="form-horizontal" action='' method="POST">
                    <fieldset>
                      <div id="legend">
                        <legend class="">Login</legend>
                      </div>
                      <div class="control-group">
                        <!-- Username -->
                        <label class="control-label"  for="username">Username</label>
                        <div class="controls">
                          <input type="text" id="username" name="username" placeholder="" class="input-xlarge">
                        </div>
                      </div>

                      <div class="control-group">
                        <!-- Password-->
                        <label class="control-label" for="password">Password</label>
                        <div class="controls">
                          <input type="password" id="password" name="password" placeholder="" class="input-xlarge">
                        </div>
                      </div>
                      <div class="control-group">
                        <br>
                        <div class="controls">
                          <button class="btn btn-success">Login</button>
                        </div>
                      </div>
                    </fieldset>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
</div>

</body>
<?php require_once('footer.php');?>
</html>
