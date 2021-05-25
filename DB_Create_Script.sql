
DROP TABLE IF EXISTS CUSTOMERS;
DROP TABLE IF EXISTS PRODUCTS;
DROP TABLE IF EXISTS EVENTS;

CREATE TABLE CUSTOMERS
(
CUSTID INTEGER PRIMARY KEY,
FIRSTNAME varchar(64),
LASTNAME varchar(64),
ADDRESS varchar(255),
EMAIL varchar(64)
);

INSERT INTO CUSTOMERS (FIRSTNAME, LASTNAME, ADDRESS, EMAIL) 
VALUES ('John', 'Smith', '5 Fictitious Street, Springfield', 'johnsmith@gmail.com'),
('Fred', 'Jones', '12 Some Place, Gotham', 'fredjones@gmail.com'),
('Bob', 'Bee', '50 Fifty Court, Brisbane', 'bobbee@gmail.com');

CREATE TABLE PRODUCTS
(
PRODID INTEGER PRIMARY KEY,
PRODUCTNAME varchar(64),
IMAGE varchar(64),
PRICE float
);

INSERT INTO PRODUCTS (PRODUCTNAME, IMAGE, PRICE) 
VALUES ('Hat', 'hat', '14.99'),
('T-Shirt', 'tshirt', '20.00'),
('Pants', 'pants', '30.00'),
('Longsleeve', 'longsleeve', '40.00'),
('Beanie', 'beanie', '14.99'),
('Vinyl', 'vinyl', '20.99');


CREATE TABLE EVENTS
(
EVENTID INTEGER PRIMARY KEY,
EVENTNAME varchar(64),
LOCATION varchar(64),
DATE varchar(10)
);

INSERT INTO EVENTS (EVENTNAME, LOCATION, DATE)
VALUES ('The Reckoning Tour', 'Sunshine Coast', '25/06/2021'),
('The Reckoning Tour', 'Brisbane', '26/06/2021'),
('The Reckoning Tour', 'Gold Coast', '27/06/2021'),
('The Reckoning Tour', 'Sydney', '02/07/2021'),
('The Reckoning Tour', 'Melbourne', '07/07/2021'),
('The Reckoning Tour', 'Adelaide', '10/07/2021'),
('The Reckoning Tour', 'Perth', '13/07/2021'),
('Full Tilt Festival', 'Brisbane', '08/09/2021');