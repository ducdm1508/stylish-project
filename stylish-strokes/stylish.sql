-- Create the database
CREATE DATABASE stylishstrokes;

-- Use the database
USE stylishstrokes;

-- Create the users table
CREATE TABLE users (
  user_id INT AUTO_INCREMENT PRIMARY KEY,
  username VARCHAR(50) NOT NULL,
  password VARCHAR(100) NOT NULL,
  email VARCHAR(100) NOT NULL UNIQUE,
  role VARCHAR(20) NOT NULL DEFAULT 'user',
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Create the calligraphy_styles table
CREATE TABLE calligraphy_styles (
  style_id INT AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(50) NOT NULL,
  description TEXT,
  img_url varchar(500),
  origin VARCHAR(100)
);

-- Create the learning_resources table
CREATE TABLE learning_resources (
  resource_id INT AUTO_INCREMENT PRIMARY KEY,
  content TEXT NOT NULL,
  title VARCHAR(255) NOT NULL,
  description TEXT,
  style_id INT NOT NULL,
  url VARCHAR(255),
  difficulty_level ENUM('EASY', 'MEDIUM', 'HARD'),
  FOREIGN KEY (style_id) REFERENCES calligraphy_styles(style_id)
);

-- Create the gallery table
CREATE TABLE gallery (
  img_id INT AUTO_INCREMENT PRIMARY KEY,
  title VARCHAR(255),
  style_id INT NOT NULL,
  img_url varchar(500),
  description TEXT,
  FOREIGN KEY (style_id) REFERENCES calligraphy_styles(style_id)
);

-- Create the tools_and_software table
CREATE TABLE tools_and_software (
  tool_id INT AUTO_INCREMENT PRIMARY KEY,
  tool_name VARCHAR(100),
  description TEXT,
  url VARCHAR(255)
);

-- Insert a record into tools_and_software
INSERT INTO tools_and_software(tool_name, description, url)
VALUES ('Calligraphr', 'Online tool that allows creating and editing calligraphy fonts.', 'https://www.calligraphr.com/en/');

-- Create the feedback table
CREATE TABLE feedback (
  feedback_id INT AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(100),
  email VARCHAR(250),
  content TEXT NOT NULL,
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Create the visitor_count table
CREATE TABLE visitor_count (
  visit_id INT AUTO_INCREMENT PRIMARY KEY,
  visit_date DATE,
  count INT DEFAULT 0,
  ip_address VARCHAR(45)
);

-- Drop the database
DROP DATABASE stylishstrokes;

select * from calligraphy_styles;