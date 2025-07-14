CREATE DATABASE IF NOT EXISTS findit;

USE findit;

CREATE TABLE lost_items (
    id INT AUTO_INCREMENT PRIMARY KEY,
    item_name VARCHAR(255),
    description TEXT,
    location VARCHAR(255),
    contact VARCHAR(100),
    image VARCHAR(255),
    date_reported TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE found_items (
    id INT AUTO_INCREMENT PRIMARY KEY,
    item_name VARCHAR(255),
    description TEXT,
    location VARCHAR(255),
    contact VARCHAR(100),
    image VARCHAR(255),
    date_reported TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);