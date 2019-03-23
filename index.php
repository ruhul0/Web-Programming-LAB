<?php
include "db.php";
$data="SELECT * FROM test";
$result=mysqli_query($con,$data);
printdata($result);
function printdata($result)
{   
   echo "<table><th>Id</th><th>First Name</th><th>Last Name</th>"; 
   while($row = mysqli_fetch_array($result)){  
   echo "<tr><td>" . $row['id'] . "</td><td>" . $row['first_name'] . "</td><td>" . $row['last_name'] . "</td></tr>";  
   }
   echo "</table>";
}
?>
<style type="text/css">
   
   table, th, td {
  border: 1px solid black;
}
th{
   color: blue;
}
}
</style>