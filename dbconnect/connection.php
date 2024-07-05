<?php
$host = "localhost:3307";
$username = "root";
$password = "";
$dbname = "prajwol";

try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $err) {
    echo "Connection failed: " . $err->getMessage();
}
?> 

