<?php
include "connection.php";

$dropquery=$conn->prepare("Drop table users");
 if($dropquery->execute()){
    echo "table dropped successfully";
 }

?>