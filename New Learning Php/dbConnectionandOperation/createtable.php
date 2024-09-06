<?php
  include('connection.php');

  $table=$conn->prepare("
  CREATE TABLE IF NOT EXISTS products(
   id INT PRIMARY KEY AUTO_INCREMENT,
   name VARCHAR(50) NOT NULL UNIQUE,
   price VARCHAR(25),
   nickname VARCHAR(25),
   year VARCHAR(25)
  ) ");

  try {
    // Execute the statement
    $table->execute();
    echo "Table created successfully";
} catch (PDOException $e) {
    // Handle the exception
    echo "Some problem has occurred: " . $e->getMessage();
}

?>