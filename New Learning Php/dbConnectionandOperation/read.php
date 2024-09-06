<?php
  include('connection.php');

   $readqry=$conn->prepare('select * from products');
$readqry->execute();
  $allData=$readqry->fetchAll();
  print_r($allData);
  echo "<h1 style='color:red; text-align:center;'>Table</h1>";
  echo "<table border=1 style='margin-left:500px'>";
  echo "<thead>";
  echo "<tr>
    <th>Username</th>
    <th>price</th>
    <th>nickname</th>
    <th>year</th>
  </tr>";
  echo "</thead>";
  foreach($allData as $data){
    echo"<tr>";
    echo "<td>".$data['name']."</td>";
    echo "<td>".$data['price']."</td>";
    echo "<td>".$data['nickname']."</td>";
    echo "<td>".$data['year']."</td>";
    echo "<tr>";
  }

  echo "</table>"

?>