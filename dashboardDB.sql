CREATE DATABASE online_drug_store;
USE online_drug_store;

CREATE TABLE medicines (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100),
    price DECIMAL(10,2),
    quantity INT
);

CREATE TABLE sales (
    id INT AUTO_INCREMENT PRIMARY KEY,
    total DECIMAL(10,2),
    sale_date DATE
);

INSERT INTO medicines (name, price, quantity) VALUES
('Paracetamol', 1.50, 120),
('Ibuprofen', 2.00, 80),
('Aspirin', 1.20, 60);

INSERT INTO sales (total, sale_date) VALUES
(120.50, CURDATE()),
(80.00, CURDATE());
