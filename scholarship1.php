<?php
include 'connect.php';

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$gender= $_POST['gender'];
$email= $_POST['email'];
$phone = $_POST['phone'];
$income = $_POST['income'];

$sql_job = "SELECT * FROM `signup` WHERE `email`='".$email."' AND `firstname`='".$firstname."' AND `lastname`='".$lastname."'";
$res_job = mysqli_query($connect, $sql_job);

if( $row = mysqli_fetch_array($res_job))
  {	
$sql_job = "INSERT INTO `u687694428_musdb`.`scholarship` (`firstname`,`lastname`,`gender`,`email`,`phone`,`income`) VALUES ('".$firstname."','".$lastname."','".$gender."','".$email."','".$phone."','".$income."');";
$res_job = mysqli_query($connect, $sql_job);

    echo "YOU WILL BE INFORMED SOON.";
    echo "<br><br><a href='index.php'>Proceed</a>";

}
else
{
    echo "Unsucccessful";
    echo "<br><br><a href='scholarship.php'>Tryagain</a>";
}

?>