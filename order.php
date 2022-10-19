<?php
session_start();
unset($_SESSION['cart']);
if (isset($_POST["order"])){
    require_once "ACCdatabase.php";

    $sccnum = hash('sha256', $_POST["cnum"]);
    $scv = hash('sha256', $_POST["cvv"]);
    $username = $_SESSION['username'];

    $sql = "INSERT INTO paid (UName, CName, ccnum, ccvv, ccmonth, Total)
        VALUES (?, ?, ?, ?, ?, ?)";

    $stmt = mysqli_stmt_init($conn);

    if( ! $stmt->prepare($sql) ) {
       die("Error within SQL " . $conn->error);
    }

    $stmt->bind_param("ssssss",
                $username,
                htmlspecialchars($_POST["cname"]),
                $sccnum,
                $scv,
                htmlspecialchars($_POST["edate"]),
                htmlspecialchars($_POST["FCost"])
                );
    
    if ($stmt->execute()) { 
        header("Location: OrderComplete.html");
    } else {
        die($conn->error);
    }

}
mysqli_close($conn);
?>