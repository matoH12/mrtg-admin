<?php
$hostname     = "localhost"; // Enter Your Host Name
$username     = "matoh12";      // Enter Your Table username
$password     = "Ffl8@1u27";          // Enter Your Table Password
$databasename = "mh476nd_matoh12"; // Enter Your database Name


$conn = new mysqli($hostname, $username, $password, $databasename);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


?>

