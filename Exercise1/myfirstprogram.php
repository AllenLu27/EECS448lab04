<?php
//Inside myfirstprogram.php
echo "<table>";
echo "<tr>";
echo "<td> </td>";
for($k=1; $k<=100; $k++)
{
  echo "<td>";
  echo (string)($k)." ";
  echo "</td>";
}
echo "</tr>";
for($i=1; $i<=100; $i++)
{
  echo "<tr><td>$i</td>";
  for($j=1; $j<=100; $j++)
  {
     echo "<td>";
     echo (string)($i*$j)." ";
     echo "</td>";
  }
  echo "</tr>";
}
echo "</table>";

?>
