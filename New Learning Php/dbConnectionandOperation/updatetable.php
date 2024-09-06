<?php 
  include ('connection.php');

  $updateqry=$conn->prepare("update products set name='Cutter' where id=1;");
  try{
    if($updateqry->execute()){
        echo "table update successfully";
    }
  }
  catch(PDOException $e){
    echo "problem found" . $e->getMessage();

  }
?>