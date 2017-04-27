<?php
//    $db = mysql_connect ("u-cdbr-west-01.cleardb.com","b8453cc96ebe7a","c53d4951");
//    mysql_select_db ("heroku_e9dd30209e9a3c9",$db);

//Connect To Database
//$hostname = 'eu-cdbr-west-01.cleardb.com';
//$username = 'b8453cc96ebe7a';
//$password = 'c53d4951';
//$dbname = 'heroku_e9dd30209e9a3c9';
//
//$db = mysql_connect($hostname, $username, $password) OR DIE('Unable to connect to database! Please try again later.');
//mysql_select_db($dbname);


$dbServerName = "eu-cdbr-west-01.cleardb.com";
$dbUsername = "b6af1cb84a5a91";
$dbPassword = "ab1d49c3";
$dbName = "heroku_e18fbac34689345";

// create connection
$db = new mysqli($dbServerName, $dbUsername, $dbPassword, $dbName);

// check connection
//if ($db->connect_error) {
//    die("Connection failed: " . $db->connect_error);
//}
//echo "Connected successfully";




?>