<?php
$hostName = "localhost";
$userName = "root";
$password = "root";
$dbName = "login";
$con = new mysqli($hostName, $userName, $password, $dbName);
if ($con) {
   echo "connected";
} else {
   echo "not connected";
}

?>