CREATE DATABASE IF NOT EXISTS online_drug_store;
USE online_drug_store;

CREATE TABLE IF NOT EXISTS user (
    userID INT AUTO_INCREMENT PRIMARY KEY,
    FullName VARCHAR(50) NOT NULL,
    Email VARCHAR(255) NOT NULL,
    Password VARCHAR(255) NOT NULL,
    Birthday DATE NOT NULL,
    Gender CHAR(1) NOT NULL,
    Role ENUM('admin','user') DEFAULT 'user'
);

INSERT INTO user (FullName, Email, Password, Birthday, Gender, Role) VALUES
('Don Plakolli','donplakolli@gmail.com','test123','2005-12-29','m','admin');

CREATE TABLE medicines (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100),
    price DECIMAL(10,2),
    quantity INT
);

INSERT INTO medicines (name, price) VALUES
('Paracetamol', 1.50),
('Ibuprofen', 2.00),
('Aspirin', 1.20);

CREATE TABLE sales (
    id INT AUTO_INCREMENT PRIMARY KEY,
    total DECIMAL(10,2),
    sale_date DATE
);

INSERT INTO sales (total, sale_date) VALUES
(120.50, CURDATE()),
(80.00, CURDATE());

ALTER TABLE medicines DROP COLUMN quantity;


