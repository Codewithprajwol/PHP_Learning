<?php
$hello=5;
var_dump($hello);
$love="cannot defined";
var_dump($love);
$data=[1,2,"hello","hi"];
var_dump($data);

// ? concatenation 
echo $hello . $love;

$x=60;
var_dump(is_integer($x));// here var_dump find the type of inside the () and is_integer find the whether x is integer or not.
// here is_integer return true and var_dump find the type of ture i.e. bool and return bool(true).



// type Casting
$y=12;
$casting= (string) $y;

var_dump($casting);

// defining variables 
    define("Greeting","welcome two my yt channel, musicelo");
    echo Greeting;

    const name= "krishna";
    echo "<br>";
    echo name;

//arithmetic operators
 $num1=2;
 $num2=3;
     echo "<br>". $num1**$num2;

// if else statement shorthand
  $data1=2;
 if($data1<5) $b="Done";
 echo "<br>" .$b;


 // for each loop
 $datas=["prajwol","is","my","name"];
 foreach($datas as $data){
    echo "<br>".$data;
 }

 // function
 function name($yourname){
    echo (string) "<br>". $yourname;
    
 }
 name("prajwol");

 // indexed arrays
 $finalarray=["I","am","very","Happy"];
   echo $finalarray[0];

// associative arrays
$finalarray1= array("name"=>"prajwol","status"=>"high");
    echo $finalarray1["status"];

// nested array
$nestedarray=array("rani"=>array("firstname"=>"Radha","secondname"=>"Rukmani", "thirdname"=>"jamwathi" ));

    foreach($nestedarray as $data=> $value){
        echo "<br>";
        echo $data;
        echo "<br>";
    foreach($value as $key => $v){
        echo $key . ": " . $v;
        echo "<br>";
    }
    }


?>


