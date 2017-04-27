<?php

include 'api.php';
include 'bd.php';

$departureDate = date('Y-m-d H:i:s',$_GET['departureDate']);
$carrierName = $_GET['carrierName'];

$now = new DateTime();


$price = $_GET['minPrice'];

$current_username =  $_SESSION['login'];

$result = mysqli_query($db,"INSERT INTO orders (departure_date, carrier_name, price) VALUES ('$departureDate','$carrierName','$price')");


$selectIdResult = $db->query("SELECT id FROM orders WHERE carrier_name='$carrierName' AND price='$price'");
//$orderId = mysqli_query($db,"SELECT id FROM orders WHERE carrier_name='$carrierName' AND $price='$price'");
$myRow = mysqli_fetch_array($selectIdResult);
$orderId = $myRow['id'];
$db->query("UPDATE customers SET orderId='$orderId' WHERE login = '$current_username'");
//

if ($result=='TRUE')
{
    echo "Your order has been completed succesfully! <a href='index.php'>Strona główna</a>";
}
