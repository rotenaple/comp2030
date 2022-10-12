<?php

session_start();
$_SESSION['success'] = "";

if (isset($_POST["logon"])) {
    require_once "ACCdatabase.php";

    $currentuser = $_POST["Username"];
    $currentemail = $_POST["email"] ;
    $currentpass = $_POST["password"] ;
    $checkpass = 0;

    $sql = "SELECT * FROM user_form WHERE UName ='$currentuser' 
    AND Email = '$currentemail';";
    $sql2 = "SELECT Password FROM user_form WHERE UName ='$currentuser' 
    AND Email = '$currentemail';";

    if(password_verify($currentpass, $sql2)) {
        $checkpass = 1;
    }
    
     
    if ($result = mysqli_query($conn, $sql)) {
        if (mysqli_num_rows($result) == 1 && $checkpass = 1) {
            $_SESSION['username'] = $currentuser;
            $_SESSION['success'] = "Its working...";
            header("Location: AccMain.php");
        } else {
            echo "crash and burn";
        }
        mysqli_free_result($result);
    }
    
}

if (isset($_POST["update"])) {
    require_once "ACCdatabase.php";

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

    $password_hash = password_hash($_POST["password"], PASSWORD_DEFAULT);
    
    require_once "ACCdatabase.php";

    $currentuser = $_POST["Username"];
    $currentemail = $_POST["email"] ;
    $currentpass = $_POST["password"] ;

    $sql = "SELECT * FROM user_form WHERE FName ='$currentuser' 
    AND Email = '$currentemail' AND Password = '$currentpass' ;";
    
    $sql = "UPDATE user_form SET Uname = $currentuser WHERE ";

    if ($conn->query($sql) === TRUE) {
        echo "Record updated successfully";
    } else {
    echo "Error updating record: " . $conn->error;
    }
    
}

mysqli_close($conn);
?>