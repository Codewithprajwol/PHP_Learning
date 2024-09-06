<?php
//   if($_GET){//? why if is ke like if user directly access garna khojyoo vanya kei print hudina
//   $name=$_GET["username"];
//   echo "welcome $name";
//   }

  //!same for post ..diff kay ho vand tyo url ma dekdina data so secure hunca ..that's why we use this 
  
  //! request is when we dont know whether we get data using GET method or POST method.
  
 if(isset($_REQUEST['submit'])){
     foreach($_REQUEST as $data=>$value){
        echo $data . ": " . $value;
        echo "<br>";
     }
 }
//! isset is a function that check  and return whether the variable has been set or not .... if yes return true otherwise false.
?>