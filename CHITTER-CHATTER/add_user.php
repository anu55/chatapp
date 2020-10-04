<?php

include "config.php";

if($_POST)
{
	$name=$_POST['name'];
	$groupname=$_POST['groupname'];
	$email=$_POST['email'];
	$password=$_POST['password'];
	$number=$_POST['number'];
	$address=$_POST['address'];
	
	$sql="INSERT INTO `register`(`name`,`groupname`, `email`, `password`, `number`, `address`) VALUES ('".$name."','".$groupname."','".$email."','".$password."','".$number."','".$address."')";

	$query = mysqli_query($conn,$sql);
	if($query)
	{
		session_start();
		$_SESSION['name'] = $name;
		header('Location: home.php');
	}
	else
	{
		echo "Something went wrong";
	}
	
	}
?>