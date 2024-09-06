<!DOCTYPE Html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Cookie in php</title>
    </head>
    <body>
        <form action="" method="post">
            <input type="text" name="username"   id="username" placeholder="user">
            <button type="submit" name="submit" value="set">set cookie</button>
            <button type="submit" name="submit" value="delete">delete cookie</button>
            <button type="submit"  name="submit" value="display">display cookie</button>
        </form>
    </body>
</html>



<?php
if(isset($_POST['submit'])){//? is like this pail $POST vanya variable ho .... isset lay check garyo $_POST vetra submit key xa ke xina xa and value pani set xa vanya true return garxa 
    if($_POST['submit']=='set'){//! ya chai tyo submit key ..set sanga equal xa ke nai herya ....as we have multiple submit key!!!!! 
    $val=$_POST['username'];
    echo $val;
    setcookie("name",$val,time()+86400);
    if(isset($_COOKIE["name"])){
        echo "cookie has been set ";
        print_r($_COOKIE);
    }
    else{
        echo "some error has been occured";
    }
}
}
if(isset($_POST['submit'])){
    if($_POST['submit']=='display'){
    if(isset($_COOKIE['name'])){
        echo $_COOKIE['name'];
    }
}
if(isset($_POST['submit'])){
    if($_POST['submit']=="delete"){
        if(isset($_COOKIE['name'])){
            setcookie('name',NULL, -1); 
        }
    }
}
}
?>