-- Create the database
CREATE DATABASE IF NOT EXISTS student_results;

-- Use the database
USE student_results;

-- Create the students table
CREATE TABLE IF NOT EXISTS students (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    roll_number VARCHAR(50) NOT NULL UNIQUE,
    class VARCHAR(50) NOT NULL,
    marks INT NOT NULL,
    result VARCHAR(10) NOT NULL
);

-- Create the users table for authentication
CREATE TABLE IF NOT EXISTS users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    role ENUM('teacher', 'student') NOT NULL
);

-- Insert initial teacher user
INSERT INTO users (username, password, role) VALUES ('teacher', 'password', 'teacher');

-- Insert initial student user
INSERT INTO users (username, password, role) VALUES ('student', 'password', 'student');
