<?php

$host = "localhost";
$dbname = "Group2030";
$username = "root";
$password = "mysql";

$conn = new mysqli($host, $username, $password, $dbname);

if ($conn->connect_errno) {
    die("Failure to Connect " . $conn->connect_error);
}


