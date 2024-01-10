<?php

session_start();
include "config.php";

$username = $_POST['username'];
$password = $_POST['password'];

$q = " select * from registration where username = '$username' && password='$password' ";

$result = mysqli_query($con,$q);

$row = mysqli_num_rows($result);

if($row == 1){

	
	header('location:index1.html');	
}
else{

	header('location:404.php');
}

?>