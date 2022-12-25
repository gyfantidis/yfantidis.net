<?php

$serverName = "localhost";
$userName = "u764309013_gyfantidis";
$password = "88131388Gg";
$baseName = "u764309013_yfantidis_net";
$mysqli = new mysqli($serverName, $userName, $password, $baseName);
$mysqli->set_charset("utf8");

if ($mysqli->connect_error) {
    echo "Η σύνδεση με τη MySQL απέτυχε!: " . $mysqli->connect_error;
    exit();
}
?>
