<?php
echo "<style>table, th, td {border: 1px solid black;}</style>";
$name = $_POST["name"];
$password = $_POST["password"];
$shirt = $_POST["shirt"];
$shoes=$_POST["shoes"];
$glasses=$_POST["glasses"];
$t_shirt=$_POST["t_shirt"];
$shipping=$_POST["shipping"];
$shippingoption;
$totalforshirt=90*$shirt;
$totalforshoes=200*$shoes;
$totalforglasses=75*$glasses;
$totalfort_shirt=50*$t_shirt;
$rowspan="2";
$total=$totalforshirt+$totalforshoes+$totalforglasses+$totalfort_shirt+$shipping;
if($shipping==0)
{
  $shippingoption="Free 7 day";
}
else if($shipping==50)
{
  $shippingoption="Over night";
}
else
{
  $shippingoption="Three day";
}
echo "<div><p>Dear customer $name, Thank you for your purchase!</p>Your password is $password</div><br>";
echo "Your receipt is shown below:";
echo "<table><tr><th> </th><th>Quantity</th><th>Cost Per Item</th><th>Sub Total</th></tr>
      <tr><td>Shirt</td><td>$shirt</td><td>$90</td><td>$$totalforshirt</td></tr>
      <tr><td>Shoes</td><td>$shoes</td><td>$200</td><td>$$totalforshoes</td></tr>
      <tr><td>Glasses</td><td>$glasses</td><td>$75</td><td>$$totalforglasses</td></tr>
      <tr><td>T-Shirt</td><td>$t_shirt</td><td>$50</td><td>$$totalfort_shirt</td></tr>
      <tr><td>Shipping</td><td>$shippingoption</td><td></td><td>$$shipping</td></tr>
      <tr><td rowspan='3'>Total Cost</td><td>$$total</td></tr>
      </table>";

?>
