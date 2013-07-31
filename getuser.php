<?php
$q=$_GET["q"];

$con = mysqli_connect('localhost','RASHMI','9990157767','airquality');
if (!$con)
  {
  die('Could not connect: ' . mysqli_error($con));
  }

mysqli_select_db($con,"airquality");
//$sql="SELECT * FROM air8910 WHERE STATE = '".$q."'";

$result = mysqli_query($con,"SELECT * FROM air8910 WHERE STATE = '".$q."'");
  echo "<div style='width: 100%; text-align: center;'>";                  
  echo "<h1>AIR QUALITY STATISTICS OF ".$q."</h1>";
  echo "<h3>All values measured in micrograms per cubic meter per hour basis</h3>";
  echo "<table  style='margin: auto auto;'>";
echo "
<tr>
<th style='width: 200px; height: 40px;background-color:green;'>YEAR</TH>
<th style='width: 200px;background-color:green;'>CITY</th>
<th style='width: 200px;background-color:green;'>SO2</th>
<th style='width: 200px;background-color:green;'>NO2</th>
<th style='width: 200px;background-color:green;'>RSPM</th>


</tr>";

while($row = mysqli_fetch_array($result))
  {
  echo "<tr>";
  
  echo "<td style='width: 200px; height: 30px;background-color:orange;'>" . $row['YEAR'] . "</td>";
  echo "<td style='width: 200px;background-color:brown;'>" . $row['CITY'] . "</td>";
  echo "<td style='width: 200px;background-color:indigo;'>" . $row['SO2'] . "</td>";
  echo "<td style='width: 200px;background-color:indigo;'>" . $row['NO2'] . "</td>";
  echo "<td style='width: 200px;background-color:indigo;'>" . $row['RSPM'] . "</td>";


  echo "</tr>";
  }
echo "</table>";

mysqli_close($con);
?> 