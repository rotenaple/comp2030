<?php
if (isset($_POST["create"])) {
    require_once "ACCdatabase.php";

    $sql = "INSERT INTO itemu (PName, Cost, Ship, Amount, Category, itemCon, Description)
        VALUES (?, ?, ?, ?, ?, ?, ?)";

    $stmt = mysqli_stmt_init($conn);

    if( ! $stmt->prepare($sql) ) {
       die("Error within SQL " . $conn->error);
    }

    $stmt->bind_param("sssssss",
                htmlspecialchars($_POST["name"]),
                htmlspecialchars($_POST["price"]),
                htmlspecialchars($_POST["ship"]),
                htmlspecialchars($_POST["amount"]),
                htmlspecialchars($_POST["productcat"]),
                htmlspecialchars($_POST["isUsed"]),
                htmlspecialchars($_POST["description"]));

    if ($stmt->execute()) { 
        header("Location: SellComplete.html");
    } else {
        die($mysqli->error);
    }
}


mysqli_close($conn);
?>