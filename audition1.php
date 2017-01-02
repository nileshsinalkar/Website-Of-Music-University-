<?php
include 'connect.php';

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email= $_POST['email'];
$phone = $_POST['phone'];
$address = $_POST['address'];
$zipcode = $_POST['zipcode'];
$city = $_POST['city'];
$instrument = $_POST['instrument'];

$sql_adm = "SELECT * FROM `signup` WHERE `firstname`='".$firstname."' AND `lastname`='".$lastname."' AND `email`='".$email."'";
$res_adm = mysqli_query($connect, $sql_adm);

if( $row = mysqli_fetch_array($res_adm))
  {	 
$sql_adm = "INSERT INTO `u687694428_musdb`.`audition` (`firstname`,`lastname`,`email`,`phone`,`address`,`zipcode`,`city`,`instrument`) VALUES ('".$firstname."','".$lastname."','".$email."','".$phone."','".$address."','".$zipcode."','".$city."','".$instrument."');";
$res_adm = mysqli_query($connect, $sql_adm);

    echo "Successfully submitted.";
  echo $row['firstname'];
  echo $row['lastname']; 
    echo "You will be informed as soon as possible.";
    echo "<br><br><a href='index.php'>Proceed</a>";

} 
 else header("Location: audition.php");
?>