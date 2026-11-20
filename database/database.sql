CREATE DATABASE tp_php;

USE tp_php;

CREATE TABLE products (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    price DECIMAL(10, 2) NOT NULL,
    quantity INT NOT NULL
);

INSERT INTO products (name, price, quantity)
VALUES ('Laptop', 8500.00, 2);

INSERT INTO products (name, price, quantity)
VALUES ('Mouse', 200.00, 10);

INSERT INTO products (name, price, quantity)
VALUES ('Keyboard', 350.00, 5);