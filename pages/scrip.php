<?php

$conn=mysqli_connect("localhost","root","","php") or die ("Connection error");

if(!empty($_POST['create_student']) && !empty($_POST['stid']) && !empty($_POST['stname']) && !empty($_POST['staddress']) && !empty($_POST['stemail']) && !empty($_POST['stbod']) && !empty($_POST['stphone']))

	{
		$stid=$_POST['stid'];
	$stname=$_POST['stname'];
	$staddress=$_POST['staddress'];
	$stemail=$_POST['stemail'];
	$stbod=$_POST['stbod'];
	$stphone=$_POST['stphone'];
	
	$query="insert into student_details values('$stid','$stname','$staddress','$stemail','$stbod','$stphone')";
	$result=mysqli_query($conn,$query);
	
	
	}
else
	{
		 echo "<script type='text/javascript'>
			alert('msg');
			window.location.replace("student.php");
		 </script>";
		
	}


			
?>