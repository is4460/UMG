<html>
<head>
<!-- Bootstrap styling -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

<!-- Fontawesome awesomeness -->
<script src="https://use.fontawesome.com/7b7005c99f.js"></script>

<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
<link href='https://fonts.googleapis.com/css?family=Oxygen' rel='stylesheet' type='text/css'>

<style>
navbar-default{
  font-family:roboto;
}
</style>

</head>

<!-- Fancy Nav Bar -->
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="index.php"><i class="fa fa-stethoscope" aria-hidden="true"></i></a>
    </div>
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="index.php">Home</a></li>
        <li><a href="#">Media</a></li>
        <li><a href="#">Feedback</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Signin <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="signin.php">Patient</a></li>
          <li><a href="signin.php">Physician</a></li>
          <li><a href="signin.php">Admin</a></li>
          </ul>
      </li>
        <li><a href="#">Signout</a></li>
      </ul>
      <form class="navbar-form navbar-right">
        <div class="form-group">
          <input type="text" class="form-control input-sm" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-sm btn-primary">Submit</button>
      </form>
    </div>
  </div>
</nav>
</html>
