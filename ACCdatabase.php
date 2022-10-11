<?php

$host = "localhost";
$dbname = "Group2030";
$username = "root";
$password = "mysql";

$mysqli = new mysqli($host, $username, $password, $dbname);

if ($mysqli->connect_errno) {
    die("Failure to Connect " . $mysqli->connect_error);
}

return $mysqli;
