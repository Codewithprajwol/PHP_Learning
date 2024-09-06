<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Middle page</title>
    <style>
        h1{
            margin:0px;
        }
    </style>
</head>
<body>
    <?php
    if(isset($_SESSION['username'])){
        $user=$_SESSION['username'];
    echo "<h1>welcome $user</h1>"; 
    echo "<a href='logout.php'>logout</a>";
}
else{
    echo "Session is not established";
}
    ?>
    
</body>
</html>