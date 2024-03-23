<?php
$servername = "localhost:3306";
$username = "root";
$password = "";
$database = "weassignment2";

$conn = mysqli_connect($servername, $username, $password);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "CREATE DATABASE IF NOT EXISTS weassignment2";
$result = mysqli_query($conn, $sql);

// Checking db creation successful

if ($result) {
    echo "Database created successfully<br>";
} else {
    echo "Error creating database: <br> " . mysqli_error($conn);
}

$sql = "CREATE TABLE `weassignment2`.`doctor` (
           `name` VARCHAR(50) NOT NULL , 
           `address` VARCHAR(50) NOT NULL ,
           `phone` INT NOT NULL , 
           `email` VARCHAR(50) NOT NULL , 
           `username` VARCHAR(50) NOT NULL , 
           `password` VARCHAR(50) NOT NULL , 
           `doctor_id` INT NOT NULL AUTO_INCREMENT , 
           `specialization` VARCHAR(50) NOT NULL,
           `availability` VARCHAR(50) NOT NULL,
           PRIMARY KEY (`doctor_id`)
    )";

$result = mysqli_query($conn, $sql);

$sql = "CREATE TABLE `weassignment2`.`patient` (
             `name` VARCHAR(50) NOT NULL , 
             `address` VARCHAR(50) NOT NULL ,
             `phone` INT NOT NULL , 
             `email` VARCHAR(50) NOT NULL , 
             `username` VARCHAR(50) NOT NULL , 
             `password` VARCHAR(50) NOT NULL , 
             `patient_id` INT NOT NULL AUTO_INCREMENT , 
             PRIMARY KEY (`patient_id`)
             )";
$result = mysqli_query($conn, $sql);

$sql = "CREATE TABLE `weassignment2`.`admin` (
         `name` VARCHAR(50) NOT NULL , 
         `address` VARCHAR(50) NOT NULL ,
         `phone` INT NOT NULL , 
         `email` VARCHAR(50) NOT NULL , 
         `username` VARCHAR(50) NOT NULL , 
         `password` VARCHAR(50) NOT NULL , 
         `admin_id` INT NOT NULL AUTO_INCREMENT , 
         PRIMARY KEY (`admin_id`)
         )";
$result = mysqli_query($conn, $sql);

$sql = "CREATE TABLE `weassignment2`.`appointments` (
        `appointment_id` INT NOT NULL AUTO_INCREMENT ,
        `patient_id` INT NOT NULL , 
        `patient_name` VARCHAR(50) NOT NULL , 
        `doctor_id` INT NOT NULL, 
        PRIMARY KEY (`appointment_id`)
        )";
$result = mysqli_query($conn, $sql);
?>
