<?php
include('connection.php');

// Correcting the SQL query: no single quotes around column names
$insertqry = $conn->prepare("INSERT INTO products (name, price, nickname, year) VALUES ('Iphone', 100000, 'apple', 2004)");

try {
    // Execute the query
    if ($insertqry->execute()) {
        echo "Data inserted successfully";
    }
} catch (PDOException $e) {
    // Handle any PDO exceptions
    echo "Problem occurred: " . $e->getMessage();
}
?>
