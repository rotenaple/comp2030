SET @@AUTOCOMMIT = 1;

DROP DATABASE IF EXISTS Group2030;
CREATE DATABASE Group2030;

USE Practical3;

CREATE TABLE user_form(
    id int NOT NULL AUTO_INCREMENT PRIMARY KEY,
    UName varchar(100),
    FName varchar(100),
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
GRANT all privileges ON Group2030.user_form TO dbadmin@localhost;
GRANT all privileges ON Group2030.ItemN TO dbadmin@localhost;
GRANT all privileges ON Group2030.ItemU TO dbadmin@localhost;

