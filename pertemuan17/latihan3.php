<?php
$con = mysqli_connect("localhost","root","abcd","artikel_db");

// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  exit();
}else echo "Success to connect MySQL."
?>