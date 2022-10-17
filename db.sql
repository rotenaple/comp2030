SET @@AUTOCOMMIT = 1;

DROP DATABASE IF EXISTS Group2030;
CREATE DATABASE Group2030;

USE Group2030;

CREATE TABLE user_form(
    UName varchar(255) PRIMARY KEY,
    FName varchar(255),
    Password varchar(128),
    date_of_birth DATE,
    Email varchar(100),
    address_street varchar(64),
    address_suburb varchar(64),
    address_state varchar(64)
);

CREATE TABLE ItemN(
    id int NOT NULL AUTO_INCREMENT PRIMARY KEY,
    PName varchar(100),
    Seller_UName varchar(255), 
    Cost int,
    Ship int,
    Amount int,
    Available_Amount int,
    Category varchar(100),
    itemCon varchar(100),
    Description text,
    posted timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE ItemU(
    id int NOT NULL AUTO_INCREMENT PRIMARY KEY,
    PName varchar(100),
    Seller_UName varchar(255), 
    Cost int,
    Ship int,
    Amount int,
    Available_Amount int,
    Category varchar(100),
    itemCon varchar(100),
    Description text,
    posted timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE user_cart(
    UName varchar(255),
    cart_id int NOT NULL AUTO_INCREMENT PRIMARY KEY,
    PName varchar(100),
    Cost int,
    Ship int,
    Quantity int,
    FOREIGN KEY (UName) REFERENCES user_form(UName)
);

CREATE TABLE paid(
    UName varchar(255),
    Seller_UName varchar(255), 
    transact_id int NOT NULL AUTO_INCREMENT PRIMARY KEY,
    FName varchar(255),
    LName varchar(255),
    ccnum varchar(255),
    ccvv varchar(255),
    ccmonth DATE,
    Total int,
    updated timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (UName) REFERENCES user_form(UName)
);

CREATE user IF NOT EXISTS dbadmin@localhost;
GRANT all privileges ON Group2030.user_form TO dbadmin@localhost;
GRANT all privileges ON Group2030.ItemN TO dbadmin@localhost;
GRANT all privileges ON Group2030.ItemU TO dbadmin@localhost;


