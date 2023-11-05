<?php

$host="host=127.0.0.1";
$port="port=5432";
$dbname="dbname=testdb";
$credentials="user=postgres password=258789";
$con=pg_connect("$host $port $dbname $credentials");


$con=("host=localhost dbname=testdb user=postgres password=258789");
if(!$con){
echo "database not connect";
}
else{
echo "database connect";
}
?>
