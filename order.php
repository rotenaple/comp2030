<?php
if (isset($_POST["order"])){
    require_once "ACCdatabase.php";

    $sql = "INSERT INTO paid (FName, LName, ccnum, ccvv, ccmonth, Total, UName)
        VALUES (?, ?, ?, ?, ?, ?, ?)";

    $stmt = mysqli_stmt_init($conn);

    if( ! $stmt->prepare($sql) ) {
       die("Error within SQL " . $conn->error);
    }

    $sccnum;
    $scv;
    $username;

    $stmt->bind_param("sssssss",
                htmlspecialchars($_POST["Fname"]),
                htmlspecialchars($_POST["Lname"]),
                $sccnum,
                $scv,
                htmlspecialchars($_POST["edate"]),
                htmlspecialchars($_POST["Total"]),
                $username);
    
    if ($stmt->execute()) { 
        header("Location: OrderComplete.html");
    } else {
        die($mysqli->error);
    }

}
mysqli_close($conn);
?>