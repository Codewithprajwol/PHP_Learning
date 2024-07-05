<?php
include "connection.php";

$readqry=$conn->prepare("Select * from users");
$readqry->execute();
$datas=$readqry->fetchAll();

echo "<table border='1'>";
echo "<thead>";
echo "<tr>
  <th>Username</th>
  <th>course</th>
  <th>year</th>
  <th>batch</th>
  <th>city</th>
</tr>";
echo "</thead>";
foreach($datas as $data){
   echo "<tr>";
  echo "<td>".$data['name']."</td>";
  echo "<td>".$data['course']."</td>";
  echo "<td>".$data['year']."</td>";
  echo "<td>".$data['batch']."</td>";
  echo "<td>".$data['city']."</td>";
   echo"</tr>";
}
echo "</table>";

// echo "<pre>";
// print_r($datas);
// echo "</pre>";
?>