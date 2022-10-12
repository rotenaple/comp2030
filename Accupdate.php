<?php
if (isset($_POST["Update"])) {
    require_once "ACCdatabase.php";

    $currentuser = $_POST["Username"];
    $currentemail = $_POST["email"] ;
    $currentpass = password_hash($_POST["password"], PASSWORD_DEFAULT) ;

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