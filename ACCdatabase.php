<?php

$host = "localhost";
$dbname = "user_db";
$username = "root";
$password = "mysql";

$mysqli = new mysqli($host, $username, $password, $dbname);

if ($mysqli->connect_errno) {
    die("Failure to Connect " . $mysqli->connect_error);
}

return $mysqli;
