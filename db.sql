SET @@AUTOCOMMIT = 1;

DROP DATABASE IF EXISTS Group2030;
CREATE DATABASE Group2030;

USE Group2030;

CREATE TABLE user_form(
    id int NOT NULL AUTO_INCREMENT PRIMARY KEY,
    UName varchar(255),
    FName varchar(255),
    Password varchar(128),
    date_of_birth DATE,
    Email varchar(100)
)

CREATE TABLE ItemN(
    id int NOT NULL AUTO_INCREMENT PRIMARY KEY,
    PName varchar(100),
    Cost int,
    Ship int,
    Amount int,
    Category varchar(100),
    itemCon varchar(100),
    Description text,
    posted timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
)

CREATE TABLE ItemU(
    id int NOT NULL AUTO_INCREMENT PRIMARY KEY,
    PName varchar(100),
    Cost int,
    Ship int,
    Amount int,
    Category varchar(100),
    itemCon varchar(100),
    Description text,
    posted timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
)

CREATE TABLE user_cart(
    cart_id NOT NULL AUTO_INCREMENT PRIMARY KEY,
    PName varchar(100),
    Cost int,
    Ship int,
    Quantity int, 
    UName varchar(255) FOREIGN KEY REFERENCES user_form(UName)
)
CREATE TABLE paid(
    transact_id NOT NULL AUTO_INCREMENT PRIMARY KEY,
    FName varchar(255),
    LName varchar(255),
    ccnum varchar(16),
    ccvv varchar(3),
    ccmonth DATE,
    Total int,
    UName varchar(255) FOREIGN KEY REFERENCES user_form(UName),
    updated timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
)




CREATE user IF NOT EXISTS dbadmin@localhost;
GRANT all privileges ON Group2030.user_form TO dbadmin@localhost;
GRANT all privileges ON Group2030.ItemN TO dbadmin@localhost;
GRANT all privileges ON Group2030.ItemU TO dbadmin@localhost;

