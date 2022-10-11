SET @@AUTOCOMMIT = 1;

DROP DATABASE IF EXISTS Group2030;
CREATE DATABASE Group2030;

USE Group2030;

CREATE TABLE user_form(
    id int NOT NULL AUTO_INCREMENT PRIMARY KEY,
    UName varchar(255),
    FName varchar(255),
    LName varchar(128),
    Password varchar(128),
    date_of_birth DATE,
    Email varchar(100)
) AUTO_INCREMENT = 1;


CREATE user IF NOT EXISTS dbadmin@localhost;
GRANT all privileges ON Group2030.user_form TO dbadmin@localhost;

