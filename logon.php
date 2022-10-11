<?php
if (isset($_POST["logon"])) {
    require_once "ACCdatabase.php";

    $currentuser = $_POST["Username"];
    $currentemail = $_POST["email"] ;
    $currentpass = password_hash($_POST["password"], PASSWORD_DEFAULT) ;

    $sql = "SELECT * FROM user_form WHERE FName ='$currentuser' 
    AND Email = '$currentemail' AND Password = '$currentpass' ;";
    
     
    if ($result = mysqli_query($conn, $sql)) {
        if (mysqli_num_rows($result) == 1) {
            echo "hope";
        } else {
            echo "crash and burn";
        }
        mysqli_free_result($result);
    }
    
}
mysqli_close($conn);
?>