<?php
include 'connect.php';

$email = $_POST['email'];
$comment = $_POST['comment'];

$sql_yo = "INSERT INTO `u687694428_musdb`.`problem` (`email`,`comment`) VALUES ('".$email."','".$comment."');";
$res_yo = mysqli_query($connect, $sql_yo);
if($res_yo==true)
{
    echo "Successfully submitted";
echo "<br><br><a href='index.php'>Proceed</a>";


}
else
{
    echo "unsuccessful";
echo "<br><br><a href='problems.php'>Try again</a>";

}

?>
