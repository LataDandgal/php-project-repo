-- Run this file once (phpMyAdmin > Import, or the mysql command line)
CREATE DATABASE IF NOT EXISTS php_auth CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE php_auth;

CREATE TABLE IF NOT EXISTS users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    email VARCHAR(150) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
