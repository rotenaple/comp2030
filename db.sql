SET @@AUTOCOMMIT = 1;

DROP DATABASE IF EXISTS Practical3;
CREATE DATABASE Practical3;

USE Practical3;

CREATE TABLE User(
    id int NOT NULL AUTO_INCREMENT PRIMARY KEY,
    FName varchar(100),
    LName varchar(100),
    Password varchar(100),
    Email varchar(100),
    Dob DATE().
) AUTO_INCREMENT = 1;


CREATE TABLE ItemN(
    id int NOT NULL AUTO_INCREMENT PRIMARY KEY,
    Name varchar(100),
    Cost int,
    Ship int,
    Category varchar(100),
    itemCon varchar(100),
    Description text,
) AUTO_INCREMENT = 1;


CREATE TABLE ItemU(
    id int NOT NULL AUTO_INCREMENT PRIMARY KEY,
    Name varchar(100),
    Cost int,
    Ship int,
    Category varchar(100),
    itemCon varchar(100),
    Description text,
) AUTO_INCREMENT = 1;


CREATE user IF NOT EXISTS dbadmin@localhost;
GRANT all privileges ON Practical3.Task TO dbadmin@localhost;

