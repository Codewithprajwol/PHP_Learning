<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php
  print_r($_POST);
   if(isset($_POST['submit'])){
       $username=$_POST['username'];
       $password=$_POST['password'];
       $email=$_POST['email'];
       $data=$_POST['data'];
       $city=$_POST['city'];
       $textarea=$_POST['textarea'];
       
       
    echo "<h1>username is $username</h1>";
    echo "<h1>Password is $password</h1>";
    echo "<h1>Email is $email</h1>";
    echo "<h1>Programming Languages</h1>";
    echo "<p>$data[0]</p>";
    echo "<p>$data[1]</p>";
    echo "<h1>city is $city</h1>";
    echo "<h1>Textarea is $textarea</h1>";
}
?>    
</body>
</html>