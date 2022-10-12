<?php

require_once "ACCdatabase.php";

$sql = "INSERT INTO user_form (Name, Cost, Ship, Amount, Category, itemCon, Description)
        VALUES (?, ?, ?, ?, ?, ?)";

$stmt = mysqli_stmt_init($conn);

if( ! $stmt->prepare($sql) ) {
    die("Error within SQL " . $conn->error);
}

$stmt->bind_param("ssssss",
                $_POST["name"],
                $_POST["price"],
                $_POST["ship"],
                $_POST["amount"],
                $_POST["productcat"],
                $_POST["isUsed"],
                $_POST["description"]);

if ($stmt->execute()) { 
    header("Location: SellComplete.html");
} else {
    die($mysqli->error);
}

mysqli_close($conn);
?>