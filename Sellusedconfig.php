<?php

require_once "ACCdatabase.php";

$sql = "INSERT INTO user_form (UName, FName, Email, date_of_birth, password)
        VALUES (?, ?, ?, ?, ?)";

$stmt = mysqli_stmt_init($conn);

if( ! $stmt->prepare($sql) ) {
    die("Error within SQL " . $conn->error);
}

$stmt->bind_param("sssss",
                $_POST["Uname"],
                $_POST["Fname"],
                $_POST["email"],
                $_POST["date_of_birth"],
                $password_hash);

                CREATE TABLE user_form(
                    id int NOT NULL AUTO_INCREMENT PRIMARY KEY,
                    UName varchar(255),
                    FName varchar(255),
                    Password varchar(128),
                    date_of_birth DATE,
                    Email varchar(100)
                ) AUTO_INCREMENT = 1;
                

                CREATE TABLE ItemU(
                    id int NOT NULL AUTO_INCREMENT PRIMARY KEY,
                    Name varchar(100),
                    Cost int,
                    Ship int,
                    Category varchar(100),
                    itemCon varchar(100),
                    Description text
                ) AUTO_INCREMENT = 1;



if ($stmt->execute()) { 
    header("Location: RegisterComplete.html");
} else {
    die($mysqli->error);
}

mysqli_close($conn);
?>