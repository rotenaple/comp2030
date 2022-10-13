<?php

session_start();
$_SESSION['success'] = "";

if (isset($_POST["logon"])) {
    require_once "ACCdatabase.php";

    $currentuser = mysqli_real_escape_string($conn, $_POST["Username"]);
    $currentemail = mysqli_real_escape_string($conn, $_POST["email"]);
    $currentpass = mysqli_real_escape_string($conn, $_POST["password"]) ;
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

mysqli_close($conn);
?>