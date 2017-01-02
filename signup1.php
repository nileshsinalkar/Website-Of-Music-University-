<?php
include 'connect.php';

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email= $_POST['email'];
$username = $_POST['username'];
$password = $_POST['password'];

$sql_signup = "INSERT INTO `u687694428_musdb`.`signup` (`firstname`,`lastname`,`email`,`username`,`password`) VALUES ('".$firstname."','".$lastname."','".$email."','".$username."','".$password."');";
$res_signup = mysqli_query($connect, $sql_signup);
if($res_signup==true)
{
header("Location: login.php");
}
else
{
 header("Location: signup2.php");
}

?>
