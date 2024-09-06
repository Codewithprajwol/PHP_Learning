<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <?php
    if(isset($_POST['submit'])){
        $user=$_POST['username'];
        $password=$_POST['password'];
        $email=$_POST['email'];
        $data=$_POST['data'];
        $city=$_POST['city'];
        $textarea=$_POST['textarea'];
       $_SESSION['username']=$user;
       header("location: middlepage.php");
    }
    else{
        header("location: index.html");
    }
    ?>
</body>
</html>