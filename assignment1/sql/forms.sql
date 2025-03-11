USE assignment1;

CREATE TABLE players (
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    fName VARCHAR(255) NOT NULL,
    lName VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    phone VARCHAR(20) NOT NULL,
    birthdate DATE NOT NULL,
    address VARCHAR(255) NOT NULL,
    frequency INT NOT NULL
);