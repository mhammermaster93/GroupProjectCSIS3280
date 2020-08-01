DROP DATABASE IF EXISTS hotel;
CREATE DATABASE hotel;
USE hotel;

CREATE TABLE User
( userId INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
  password VARCHAR(250) NOT NULL,
  userType VARCHAR(20) NOT NULL, 
  name VARCHAR(40) NOT NULL,
  address VARCHAR (50) NOT NULL,
  postalCode VARCHAR(8) NOT NULL,
  city VARCHAR(20),
  country VARCHAR(20) NOT NULL,
  email VARCHAR(40)  NOT NULL,  
  phone VARCHAR(20) NOT NULL   
) ENGINE=InnoDB;

CREATE TABLE Reservation
( reservationNr INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY, 
userId INT NOT NULL, 
startDate DATE NOT NULL, 
endDate DATE NOT NULL, 
paymentDate DATE NOT NULL,
FOREIGN KEY (userId) REFERENCES User(userId) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB;

CREATE TABLE Room
(roomNr VARCHAR(4) NOT NULL PRIMARY KEY,
type VARCHAR(20) NOT NULL
)ENGINE=InnoDB;

CREATE TABLE Service 
(serviceNr VARCHAR(4) NOT NULL PRIMARY KEY,
type VARCHAR(20) NOT NULL,
price DECIMAL (4,2) NOT NULL
)ENGINE=InnoDB;

CREATE TABLE Reservation_involves_room 
( reservationNr INT UNSIGNED NOT NULL,
roomNr VARCHAR(4) NOT NULL,
CONSTRAINT PK_Reservation_involves PRIMARY KEY (reservationNr, roomNr),
FOREIGN KEY (reservationNr) REFERENCES Reservation(reservationNr),
FOREIGN KEY (roomNr) REFERENCES Room(roomNr) 
)ENGINE=InnoDB;

CREATE TABLE Reservation_includes_service 
(reservationNr INT UNSIGNED NOT NULL,
serviceNr VARCHAR(4) NOT NULL, 
CONSTRAINT PK_Reservation_includes PRIMARY KEY (reservationNr, serviceNr),
FOREIGN KEY (serviceNr) REFERENCES Service(serviceNr) ON DELETE CASCADE ON UPDATE CASCADE,
FOREIGN KEY (reservationNr) REFERENCES Reservation(reservationNr) ON DELETE CASCADE ON UPDATE CASCADE
)ENGINE=InnoDB;

 INSERT INTO User VALUES
  (182983, '$2y$10$p6jvGgfB/X0asGYXFyQt2eYtWi9uqMO9rG3Vlhm.WWqxQIzqm6/Y.', 'manager', 'John Smith', '254 Oak Street', 'E4D4J8', 'Burnaby' , 'Canada', 'johnsmith@gmail.com', '2939098376'),
  (980283, 'password2', 'receptionist', 'Jane Thomson', '2549 Cambie Street', 'J4F4J8', 'Vancouver' , 'Canada', 'janethomson@gmail.com', '2839098770'),
  (450298, 'password3', 'receptionist', 'Arnold Baker', '8549 Marine Drive', 'F4F4G8', 'Vancouver' , 'Canada', 'abaker@shaw.ca', '4569095670'),
  (938962, 'password4', 'customer', 'Emma Woods', '1080 Royal Ave', 'D4D4J6', 'Toronto' , 'Canada', 'emma@yahoo.com', '8359098839'),
  (987961, 'password5', 'customer', 'Mary Green', '234 River Street', 'K4D8J9', 'Bristol' , 'UK', 'skjl@hotmail.com', '00439098839');
 
INSERT INTO Reservation VALUES 
(1, 938962, '2020-09-06', '2020-09-10', '2020-07-20'),
(2, 987961, '2020-10-12', '2020-10-14', '2020-10-12');


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
('311', 'delux'),
('210', 'delux'),
('410', 'delux'),
('121', 'delux'),
('419', 'delux'),
('387', 'delux'),
('290', 'delux');

INSERT INTO Service VALUES
('378', 'breakfast', 25.00),
('287', 'airport shuttle',35.50),
('127', 'spa package', 35.50),
('827', 'city tour', 50.00);

INSERT INTO Reservation_involves_room VALUES
(1, '323'),
(1, '121');

INSERT INTO Reservation_includes_service VALUES
(1, '378'),
(2, '378'),
(2, '127');
