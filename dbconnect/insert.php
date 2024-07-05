<?php
include('connection.php');

$insertqry=$conn->prepare("Insert into users (id,name,course,batch,city,year) values(null,'Krishna','world','allday','Golok','infinte')");

try{
    $insertqry->execute();
    echo "insertion successful";
}catch (PDOException $err) {
    header('location: error.php?error=' . urlencode("Connection failed: " . $err->getMessage()));
    die;
}
?>
    
