﻿<?php
//CODE TO CONNECT PHP WITH DATABASE.
$hostname="localhost"; 	//hostname
$username="root"; 	//username for database
$password=""; 		//database password
$dbname="u687694428_musdb"; 	//database name
$connect=mysqli_connect($hostname,$username,$password,$dbname) or die("Error Connecting");//make connection
//$connect becomes the OBJECT/VARIABLE we’ll use to fire queries to database
?>
