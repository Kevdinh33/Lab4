<?php
  echo "<table border=1 width = 100%>";
  for($i = 1; $i <= 100; $i++) {
  	echo "<tr>";
  	for($j = 1; $j <= 100; $j++) {
  		echo"<td>";
      $total = $i*$j;
      echo"$total";
      echo"</td>";
  	}
  	echo"</tr>";
  }
  echo "</table>";
  error_reporting(E_ALL);
ini_set("display_errors", 1);
?>
