<?php
include 'connect.php';

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$gender= $_POST['gender'];
$email= $_POST['email'];
$phone = $_POST['phone'];
$zipcode= $_POST['zipcode'];
$city = $_POST['city'];
$course = $_POST['course'];


$sql_adm = "SELECT * FROM `signup` WHERE `email`='".$email."' AND `firstname`='".$firstname."' AND `lastname`='".$lastname."'";
$res_adm = mysqli_query($connect, $sql_adm);

if( $row = mysqli_fetch_array($res_adm))
  {	

$sql_adm = "INSERT INTO `u687694428_musdb`.`form` (`firstname`,`lastname`,`gender`,`email`,`phone`,`zipcode`,`city`,`course`) VALUES ('".$firstname."','".$lastname."','".$gender."','".$email."','".$phone."','".$zipcode."','".$city."','".$course."');";
$res_adm = mysqli_query($connect, $sql_adm);

if ( $course == "graduation" )
 header("Location: graduation.php");
else
 header("Location: postgraduation.php");
  }

else echo "<br><br><a href='login.php'>Unsuccessful,Please login before submitting this form</a>";
?>