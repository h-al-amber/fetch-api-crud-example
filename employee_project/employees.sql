CREATE DATABASE employees CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;

USE employees_db;

CREATE TABLE employees (
  id INT AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(100),
  dob DATE,
  specialty VARCHAR(100),
  married ENUM('متزوج', 'أعزب'),
  children INT
);