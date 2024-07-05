<?php
include('connection.php');

$table=$conn->prepare("
CREATE TABLE IF NOT EXISTS users (
    id INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(50) NOT NULL UNIQUE,
    course VARCHAR(25),
    batch VARCHAR(25),
    city VARCHAR(25) ,
    year VARCHAR(25)
)");
if ($table->execute()) {
    echo "Table created successfully";
} else {
    echo "Failed to create table";
}


