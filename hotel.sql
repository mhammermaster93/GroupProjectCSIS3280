DROP DATABASE IF EXISTS hotel;
CREATE DATABASE hotel;
USE hotel;

CREATE TABLE User
( email VARCHAR(40)  NOT NULL PRIMARY KEY,  
  password VARCHAR(250) NOT NULL,
  userType VARCHAR(20) NOT NULL, 
  full_name VARCHAR(40) NOT NULL,
  address VARCHAR (50) NOT NULL,
  postalCode VARCHAR(8) NOT NULL,
  city VARCHAR(20),
  country VARCHAR(20) NOT NULL,
  phone VARCHAR(20) NOT NULL   
) ENGINE=InnoDB;

CREATE TABLE Room
(roomNr INT (4) NOT NULL PRIMARY KEY,
roomType VARCHAR(20) NOT NULL
)ENGINE=InnoDB;

CREATE TABLE Reservation
( reservationNr INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY, 
email VARCHAR (40) NOT NULL, 
roomType VARCHAR(20) NOT NULL,
startDate DATE NOT NULL, 
endDate DATE NOT NULL, 
paymentDate DATE NOT NULL,
roomNr INT(4) NOT NULL,
FOREIGN KEY (email) REFERENCES User(email) ON DELETE CASCADE ON UPDATE CASCADE,
FOREIGN KEY (roomNr) REFERENCES Room(roomNr) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB;


CREATE TABLE Service 
(serviceNr VARCHAR(4) NOT NULL PRIMARY KEY,
type VARCHAR(20) NOT NULL,
price FLOAT (4,2) NOT NULL
)ENGINE=InnoDB;


CREATE TABLE Reservation_includes_service 
(reservationNr INT UNSIGNED NOT NULL,
serviceNr VARCHAR(4) NOT NULL, 
CONSTRAINT PK_Reservation_includes PRIMARY KEY (reservationNr, serviceNr),
FOREIGN KEY (serviceNr) REFERENCES Service(serviceNr) ON DELETE CASCADE ON UPDATE CASCADE,
FOREIGN KEY (reservationNr) REFERENCES Reservation(reservationNr) ON DELETE CASCADE ON UPDATE CASCADE
)ENGINE=InnoDB;

INSERT INTO Room VALUES 
('120', 'standard'),
('246', 'standard'),
('308', 'standard'),
('201', 'standard'),
('106', 'standard'),
('140', 'standard'),
('309', 'standard'),
('287', 'standard'),
('133', 'standard'),
('395', 'standard'),
('115', 'suite'),
('398', 'suite'),
('449', 'suite'),
('125', 'suite'),
('349', 'suite'),
('423', 'suite'),
('333', 'suite'),
('323', 'suite'),
('311', 'deluxe'),
('210', 'deluxe'),
('410', 'deluxe'),
('121', 'deluxe'),
('419', 'deluxe'),
('387', 'deluxe'),
('290', 'deluxe');

INSERT INTO Service VALUES
('378', 'breakfast', 25.00),
('287', 'airport shuttle',35.50),
('127', 'spa package', 35.50),
('827', 'city tour', 50.00);



