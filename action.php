<?php

$con=mysqli_connect('localhost','root','','somaapp4');
if(isset($_POST['submit'])){
	$regNo=$_POST['regno'];
	$email=$_POST['email'];
	$firstname=$_POST['firstname'];
	$lastname=$_POST['lastname'];
	$password=$_POST['Password'];

	//inserting data into the database
	$insert=mysqli_query($con,"INSERT INTO registration(RegistrationNo,Email,Firstname,Lastname, Password) VALUES('$regNo',
		'$email','$firstname','$lastname', '$password')" );

	if($insert){
		echo "user registered successfully.";
	}
	else{
		echo "error.";
	}
}



?>