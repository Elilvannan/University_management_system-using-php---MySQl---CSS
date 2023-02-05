<?php

$conn=mysqli_connect("localhost","root","","php") or die ("Connection error");
if(!empty($_POST['signup']))
{echo "hi";
	$username=$_POST['username'];
	$firstpassword=$_POST['firstpassword'];
	$secondpassword=$_POST['secondpassword'];
	$useraddress=$_POST['useraddress'];
	$useremail=$_POST['useremail'];
	if($firstpassword=$secondpassword){
		
	$query="insert into users values('$username','$firstpassword')";
	$result=mysqli_query($conn,$query);
	
	
			
			header("Location:../index.php");

	}
	else 
	{
		echo "passwords are not match";
	}
}
?>