<?php
session_start();
if (isset($_POST["update"])) {

    if ( ! filter_var($_POST["Email"], FILTER_VALIDATE_EMAIL)) {
        die("Valid email is required");
    }
    
    if (strlen($_POST["Password"]) < 8) {
        die("Password must be at least 8 characters");
    }
    
    if ( ! preg_match("/[a-z]/i", $_POST["Password"])) {
        die("Password must contain at least one letter");
    }
    
    if ( ! preg_match("/[0-9]/", $_POST["Password"])) {
        die("Password must contain at least one number");
    } 

    $password_hash = password_hash($_POST["Password"], PASSWORD_DEFAULT);

    require_once "ACCdatabase.php";
    $tbcuser = $_SESSION['username'];

    $currentuser = $_POST["Username"];
    $currentemail = $_POST["Email"] ;
    
    
    $sql = "UPDATE user_form SET UName = '$currentuser', 
    Email = '$currentemail', Password = '$password_hash' WHERE UName = '$tbcuser'; ";

    if ($conn->query($sql) === TRUE) {
        echo "Record updated successfully";
    } else {
    echo "Error updating record: " . $conn->error;
    }
    
}
mysqli_close($conn);
?>