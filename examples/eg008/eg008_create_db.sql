-- create and select the database
DROP DATABASE IF EXISTS kungfu_panda_shop;
CREATE DATABASE kungfu_panda_shop;
USE kungfu_panda_shop;  -- MySQL comment uses --

-- create the tables
CREATE TABLE categories (
  categoryID       INT(11)        NOT NULL   AUTO_INCREMENT,
  categoryName     VARCHAR(255)   NOT NULL,
  PRIMARY KEY (categoryID)
);

CREATE TABLE products (
  productID        INT(11)        NOT NULL   AUTO_INCREMENT,
  categoryID       INT(11)        NOT NULL,
  productCode      VARCHAR(10)    NOT NULL   UNIQUE,
  productName      VARCHAR(255)   NOT NULL,
  listPrice        DECIMAL(10,2)  NOT NULL,
  PRIMARY KEY (productID),
  
  FOREIGN KEY (categoryID) REFERENCES categories(categoryID)
);


-- insert data into the database
INSERT INTO categories VALUES
(1, 'Action Figures'),
(2, 'MP3 Songs'),
(3, 'DVD');

INSERT INTO products VALUES
(1, 1, 'po', 'Po Action Figure 1 foot', '19.00'),
(2, 1, 'master', 'Master Shifu Action Figure 6 inches', '18.00'),
(3, 1, 'tigress', 'Tigress Action Figure 11 inches', '17.00'),
(4, 1, 'monkey', 'Monkey Action Figure 11 inches', '17.99'),
(5, 1, 'viper', 'Viper Action Figure 11 inches', '16.00'),
(6, 1, 'mantis', 'Mantis Action Figure 11 inches', '16.00'),
(7, 2, 'tournament', 'Let The Tournament Begin', '9.99'),
(8, 2, 'dragon', 'The Dragon Warrior Is Among Us', '8.99'),
(9, 2, 'peach', 'Peach Tree Of Wisdom', '7.99'),
(10, 3, 'kungfuwide', 'Kung Fu Panda Widescreen DVD', '11.99'),
(11, 3, 'kungfu2', 'Kung Fu Panda II DVD', '12.99');


-- create the users and grant priveleges to those users
GRANT SELECT, INSERT, DELETE, UPDATE
ON kungfu_panda_shop.*
TO web_user@localhost
IDENTIFIED BY 'shifu88';

