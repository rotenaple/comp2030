<?php
session_start();
if (isset($_POST["order"])){
    require_once "ACCdatabase.php";

    $sql = "INSERT INTO paid (UName, FName, LName, ccnum, ccvv, ccmonth, Total)
        VALUES (?, ?, ?, ?, ?, ?, ?)";

    $stmt = mysqli_stmt_init($conn);

    if( ! $stmt->prepare($sql) ) {
       die("Error within SQL " . $conn->error);
    }

    $sccnum = hash('sha256', $_POST["cnum"]);
    $scv = hash('sha256', $_POST["cvv"]);
    $username = $_SESSION['username'];

    $stmt->bind_param("sssssss",
                $username,
                htmlspecialchars($_POST["Fname"]),
                htmlspecialchars($_POST["Lname"]),
                $sccnum,
                $scv,
                htmlspecialchars($_POST["edate"]),
                htmlspecialchars($_POST["Total"]),
                );
    
    if ($stmt->execute()) { 
        header("Location: OrderComplete.html");
    } else {
        die($mysqli->error);
    }

}
mysqli_close($conn);
?>