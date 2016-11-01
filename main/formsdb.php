<?php 
$link = mysqli_connect("localhost","root","password")  or die("failed to connect to server !!");
mysqli_select_db($link,"disastermanagement");
if(isset($_REQUEST['submit']))
{
$errorMessage = "";
$firstName=$_POST['firstName'];
$lastName=$_POST['lastName'];
$exampleInputEmail=$_POST['emailaddress'];
$telephonenumber=$_POST['telnumber'];
$Volunteer=$_POST['howtohelp'];

 
// Validation will be added here
 
if ($errorMessage != "" ) {
echo "<p class='message'>" .$errorMessage. "</p>" ;
}
else{
//Inserting record in table using INSERT query
$query= "INSERT INTO `disastermanagement`.`formsdata` (`firstName`, `lastName`, `emailaddress`, `telnumber`, `howtohelp`) 
VALUES ('$firstName', '$lastName', '$exampleInputEmail', '$telephonenumber', '$Volunteer') ";
mysqli_query($link,$query) or die(mysqli_error($link));
}
}
?>

 