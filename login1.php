<?php
include 'connect.php';

$username = $_POST['username'];
$password = $_POST['password'];


$sql_lo = "SELECT * FROM `signup` WHERE `username`='".$username."' AND `password`='".$password."'";
$res_lo = mysqli_query($connect, $sql_lo);

if( $row = mysqli_fetch_array($res_lo))
  {	  
$sql_lo = "INSERT INTO `u687694428_musdb`.`login` (`username`,`password`) VALUES ('".$username."', '".$password."');";
$res_lo = mysqli_query($connect, $sql_lo);
  echo "Successfully loggedin ";
  echo $row['firstname'];
  echo $row['lastname']; 
  echo "<br><a href='index2.php'>PROCEED</a>";

} 
else header("Location: login2.php");

?>
