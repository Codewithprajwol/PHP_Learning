<?php
   $data=["name"=>"Prajwol","love"=>"playing Guitar"];
   $jsonData=json_encode($data);
   echo $jsonData;

   $jsoninfo='{"name":"Prajwol","love":"playing Guitar"}';
   $arrayform=json_decode($jsoninfo,true);//! if true is not defined then we will get class based object rather than array
   echo "<br>";
   print_r($arrayform);
   echo "<br>";
   foreach($arrayform as $data=>$value){
       echo $data . ": " . $value;
       echo "<br>";
   }
?>
