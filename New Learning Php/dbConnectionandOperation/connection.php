<?php
$host="localhost:3307";
$username ="root";
$password ="";
$dbname="Sales";

try{
    $conn=new PDO("mysql:host=$host;dbname=$dbname",$username,$password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "connection established hogay hay";
} catch(PDOException $err){
    echo "connection failed" . $err->getMessage();
}
?>