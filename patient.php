<?php
require_once 'login.php';


// Establish mysql connection
$db = new mysqli($host, $user, $pass);

// Connection error handling
if ($db->connect_error){
  die("Oh, noooo...Connection to database failed! " . $db->connect_error);
}
echo "Yay! Connected successfully!";
?>
