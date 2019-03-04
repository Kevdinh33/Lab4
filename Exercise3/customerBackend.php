<?php
echo "<link rel='stylesheet' href='style.css'>";
$user = $_POST['email'];
$pass = $_POST['password'];
$ropeQuan = $_POST['ropeQuan'];
$shoeQuan = $_POST['shoeQuan'];
$drawQuan = $_POST['drawQuan'];
$ropeTotal = $ropeQuan*200;
$shoeTotal = $shoeQuan*150;
$drawTotal = $drawQuan*10;
$shipOption = $_POST['shipOption'];
if ($shipOption == "3 Day") {
  $shipTot = 5;
}
elseif ($shipOption == "Express") {
  $shipTot = 50;
}
else {
  $shipTot = 0;
}

$total = $ropeTotal + $shoeTotal + $drawTotal + $shipTot;
echo "<body>";
echo "<h1> Thanks for joining and purchasing gear! </h1><br>";
echo "<p4>User E-mail: $user</p4><br>";
echo "<p4>User Password: $pass</p4><br>";

echo "<table border=1 class='receipt' width = 100%>
      <tr>
        <th>Item</th>
        <th>Price</th>
        <th>Quantity</th>
        <th>Sub Total</th>
      </tr>
      <tr>
        <td>Rope</td>
        <td>$200</td>
        <td>$ropeQuan</td>
        <td>$$ropeTotal</td>
      </tr>
      <tr>
        <td>Shoe</td>
        <td>$150</td>
        <td>$shoeQuan</td>
        <td>$$shoeTotal</td>
      </tr>
      <tr>
        <td>Quick Draw</td>
        <td>$10</td>
        <td>$drawQuan</td>
        <td>$$drawTotal</td>
      </tr>
      <tr>
        <td>Shipping</td>
        <td colspan= '2'>$shipOption</td>
        <td>$$shipTot</td>
      </tr>
      <tr>
        <td colspan= '3'>Total Cost</td>
        <td>$$total</td>
      </tr>";
      echo "</body>";
 ?>
