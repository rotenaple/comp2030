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

require_once "ACCdatabase.php";

$sql = "INSERT INTO user_form (FName, LName, Email, Dob, password)
        VALUES (?, ?, ?, ?, ?)";

$stmt = mysqli_stmt_init($conn);

if( ! $stmt->prepare($sql) ) {
    die("Error within SQL " . $conn->error);
}

$stmt->bind_param("sssss",
                $_POST["Username"],
                $_POST["FullName"],
                $_POST["email"],
                $_POST["date_of_birth"],
                $password_hash);

<<<<<<< HEAD
$stmt->execute()
=======
>>>>>>> b40201c8f6879c3d2bcf72e13850ab9b6ce28ceb

if ($stmt->execute()) { 
    header("Location: RegisterComplete.html");
} else {
    die($mysqli->error);
}

mysqli_close($conn);
?>