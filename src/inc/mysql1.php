<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"


$servername = "127.0.0.1:3306";
$username = "root";
$password = "nmpatel4817";
$database = "vet";

$mysqli = new mysqli($servername,$username,$password,$database);

if ($mysqli->connect_error) {
	header("Location: system-error.php");  
}
