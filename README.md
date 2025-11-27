🌱 PlantCare – Smart Plant Tracker

A simple PHP + MySQL app to add and track your plants. Built with TailwindCSS for a clean, responsive dashboard.

Features

Add plants with name & watering frequency

Store data in MySQL

Simple, responsive UI

Uses prepared statements for security

Project Files
Plantcare/
│── index.php        # Dashboard & form
│── add_plant.php    # Inserts plant into DB
│── db_connect.php   # Database connection
│── backend.php      # Optional backend logic
│── style.css        # Styles
│── README.md        # Project info

Requirements

XAMPP (Apache + MySQL)

PHP 7+

MySQL database

Database Setup

Open phpMyAdmin: http://localhost/phpmyadmin/

Create database: plantcare_db

Create table plants:

CREATE TABLE plants (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    frequency_days INT NOT NULL
);

How to Run

Place folder in C:\xampp\htdocs\Plantcare

Open browser: http://localhost/Plantcare/index.php

Fill the form to add a plant

Check phpMyAdmin to see the data