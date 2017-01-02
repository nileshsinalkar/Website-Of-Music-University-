<?php
include 'connect.php';

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email= $_POST['email'];
$phone = $_POST['phone'];
$instrument = $_POST['instrument'];
$course = $_POST['course'];




$sql_adm = "SELECT * FROM `form` WHERE `course`='".$course."' AND `email`='".$email."'";
$res_adm = mysqli_query($connect, $sql_adm);

if( $row = mysqli_fetch_array($res_adm))
  {	
$sql_adm = "INSERT INTO `u687694428_musdb`.`postgraduation` (`firstname`,`lastname`,`email`,`phone`,`instrument`,`course`) VALUES ('".$firstname."','".$lastname."','".$email."','".$phone."','".$instrument."','".$course."');";
$res_adm = mysqli_query($connect, $sql_adm);
 echo "Successfully Submitted ";
  echo $row['firstname'];
  echo $row['lastname']; 
  echo "<br><br><a href='index.php'>PROCEED</a>";
  }

else echo "<br><br><a href='postgraduation.php'>Unsuccessful,Try again.</a>";
?>
