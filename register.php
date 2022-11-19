<?php

$fn=$_POST['firstname'];
$ln=$_POST['lastname'];
$mail=$_POST['email'];
$country = $_POST['country'];
$pass = $_POST['password'];
$pass2 = $_POST['password2'];
$mobnum = $_POST['mobile'];
$dob = $_POST['DOB'];

$con=mysqli_connect("localhost","root","","user details");

$sql="INSERT INTO registerddetails(FirstName, LastName, EmailId, Country, Pass_word, Password2, Mobile_number, 
Date_of_Birth) values('$fn','$ln','$mail','$country','$pass','$pass2','$mobnum','$dob')";

$r=mysqli_query($con,$sql);

if($r)
{
    echo" User details are registerd successfully ";
}
else
{
    echo" User details are not registerd ";
}


?>