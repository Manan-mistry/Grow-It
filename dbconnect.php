<?php
$servername="localhost";
$username="root";
$password="";
$dbname="sn";
$conn=mysqli_connect($servername,$username,$password,$dbname);
if(!$conn){
		die("Error while connecting...");

}
?>