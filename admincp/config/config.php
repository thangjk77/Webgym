<?php
$mysqli = new mysqli("localhost","root","","web-gymphp");

// Check connection
if ($mysqli->connect_errno) {
  echo "Kết nối MYSQLI lỗi" . $mysqli->connect_error;
  exit();
}
?>