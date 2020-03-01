<?php

$conn = new MySQLi('localhost','root','','sumsaha');
if($conn->connect_errno){
	die("connection failed".$conn->connect_error);
}



mysqli_set_charset($conn, "utf8");

?>