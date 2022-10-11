<?php

if ( ! filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
    die("Valid email is required");
}

if (strlen($_POST["password"]) < 8) {
    die("Password must be at least 8 characters");
}

if ( ! preg_match("/[a-z]/i", $_POST["password"])) {
    die("Password must contain at least one letter");
}

if ( ! preg_match("/[0-9]/", $_POST["password"])) {
    die("Password must contain at least one number");
}

if ($_POST["password"] !== $_POST["cpassword"]) {
    die("Passwords must match");
}

$password_hash = password_hash($_POST["password"], PASSWORD_DEFAULT);

$mysqli = require __DIR__ . "/ACCdatabase.php";

$sql = "INSERT INTO user_form (Uname, Fname, email, date_of_birth, password)
        VALUES (?, ?, ?, ?, ?)";

$stmt = $mysqli->stmt_init();

if( ! $stmt->prepare($sql) ) {
    die("Error within SQL " . $mysqli->error);
}

$stmt->bind_param("sssss",
                $_POST["Uname"],
                $_POST["Fname"],
                $_POST["email"],
                $_POST["date_of_birth"],
                $password_hash);

if ($stmt->execute()) { 
    header("Location: RegisterComplete.html");
} else {
    die($mysqli->error);
}

echo "please";