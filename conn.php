<?php

$hostname = '127.0.0.1';
$username = 'admin';
$password = 'dA0tF8iP0uL5yT2dS6sD0eY7pA4pE5eW';
$database = 'pokemon';
$mysqli = new mysqli($hostname, $username, $password, $database);

if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
    exit();
}

?>