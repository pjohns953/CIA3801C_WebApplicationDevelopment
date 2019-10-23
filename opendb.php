<?php
// Create Connection
$dbconn = mysqli_connect($dbhost, $dbuser, $dbpassword, $dbname);
// Check Connection
if (!$dbconn) {
  die("CONNECTION FAILED: " . mysqli.connect_error());
}
?>
