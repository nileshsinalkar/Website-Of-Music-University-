<?php
include 'connect.php';

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$gender= $_POST['gender'];
$email= $_POST['email'];
$phone = $_POST['phone'];
$zipcode = $_POST['zipcode'];
$city = $_POST['city'];
$qualification = $_POST['qualification'];
$experience = $_POST['experience'];

$sql_job = "SELECT * FROM `signup` WHERE `email`='".$email."' AND `firstname`='".$firstname."' AND `lastname`='".$lastname."'";
$res_job = mysqli_query($connect, $sql_job);

if( $row = mysqli_fetch_array($res_job))
  {	

$sql_job = "INSERT INTO `u687694428_musdb`.`applyforjob` (`firstname`,`lastname`,`gender`,`email`,`phone`,`zipcode`,`city`,`qualification`,`experience`) VALUES ('".$firstname."','".$lastname."','".$gender."','".$email."','".$phone."','".$zipcode."','".$city."','".$qualification."','".$experience."');";
$res_job = mysqli_query($connect, $sql_job);

    echo "THANK YOU FOR APPYING.YOU WILL BE INFORMED SOON.";
    echo "<br><br><a href='index.php'>Proceed</a>";
  }
else
{
    echo "Unsucccessful";
    echo "<br><br><a href='applyforjob.php'>Tryagain</a>";
}

?>