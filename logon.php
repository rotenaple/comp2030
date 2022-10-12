<?php
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
            echo "hope";
        } else {
            echo "crash and burn";
        }
        mysqli_free_result($result);
    }
    
}
mysqli_close($conn);
?>