<html>
<title>Welcome page</title>


<style>
body {background-image: url('../photos/login page.jpg');
  background-repeat:repeat;
  background-size: 100% 100%; }

#b{
		border-coLLapse: coLLapse;
		width: 100%;
		color: #d964559;
		font-family: monospace;
		font-size: 25px;
		text-align: left;
	}
#bt{
	background-color: #588c7e;
	color: white;
}

#bd{
	background-color: #588c66;
	color: white;
}


/* Set height of body and the document to 100% */
body, html {
  height: 100%;
  margin: 0;
  font-family: Arial;
}

/* Style tab links */
.tablink {
  background-color: #555;
  color: white;
  float: left;
  border: none;
  outline: none;
  cursor: pointer;
  padding: 14px 16px;
  font-size: 17px;
  width: 20%;
}

.tablink:hover {
  background-color: #777;
}

/* Style the tab content (and add height:100% for full page content) */
.tabcontent {
  color: white;
  display: none;
  padding: 100px 20px;
  height: 100%;
}



.split {
  height: 100%;
  width: 30%;
  position: fixed;
  z-index:3;
  top: 5%;
   overflow-x: none;
}

.left {
  left:0;
 
}

.center{
	left=30%;
}


.right {
  left:70%;
  
}
.down{
	top:50%;
}
.centeredl {
  position: absolute;
  top:0%;
  left:1px;
  right:10%;
  height: 60%;
  bottom 10%:
  transform: translate(-50%, -50%);
 
}

.centeredr {
  position: absolute;
   top:0%;
  left:2%;
  right:2%;
  height: 60%;
  bottom 10%:
  transform: translate(-50%, -50%);
  
}

.centeredc {
  position: absolute;
  top: 20%;
  left:30%;
  right:32%;
  height: 60%;
  bottom 10%:
  transform: translate(-50%, -50%);
  
}




.formc{ 
  border-radius: none;
  background-color:none;
  position: relative;
  animation-name: formani;
  animation-duration: 4s;
   border-style: none;
    border-width: 3px;
  animation-name: imgani;
  animation-duration: 4s;
   
}

@keyframes imgani {
  from {background-color: black;}
  to {background-color: none;}
  0% {left:0px; top:-100%;}
  100% {left:0px; top:10px}
}

form{
  border-radius: none;
  background-color:none;
  position: relative;
  animation-name: formani;
  animation-duration: 4s;
   border-style: none;
    border-width: 3px;
   ;
  }

@keyframes formani {
  from {background-color: black;}
  to {background-color: none;}
  0% {left:0px; top:100%;}
  50% {left:0px; top:0%}
  100% {left:0px; top:10px}
}


form:hover {
  background-color:none  ;
  border-style: solid;
    border-width: 3px;
    border-color: red;
}


input[type=text]:hover {
  background-color:#AFFFE5 ;
}


input[type=password]:hover {
  background-color:#AFFFE5 ;
}





input[type=text],input[type=password]{ 
	width: 100%;
  padding: 5px 15px;
  margin: 1px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 2px;
  }


input[type=submit] {
  width: 100%;
  background-color: #349eeb;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #34c3eb;
}

input[type=button] {
  width: 50%;
  background-color: #349eeb;
  color: white;
  padding: 14px 15px;
  margin: 1px 0;
  border-radius: 4px;
  cursor: pointer;
}

input[type=button]:hover{
	background-color: #34c3eb;
	}

h1{
text-shadow: 2px 2px 5px red;
text-align:center;
}

label{
text-shadow: 2px 2px 2px blue;
background-color:powderblue;
font-size:100%;

}

div{
text-indent:5px;
}


</style>
<body>

<p>
<button class="tablink" onclick="welcomepage.php"> Home</button>
<a href="student.php"><button class="tablink">Student details</button></a>
<a href="lecture.php"><button class="tablink">lecture details</button></a>
<a href="course.php"><button class="tablink">course details</button></a>
<a href="../index.php"><button class="tablink">logout</button></a>
</p>



<div class="split right">
 <div class="centeredlr">
    <form  method="post">
	<p><h1>update lecture details</h1></p>
<table>
	<tr>
		<td><div><label>user name  </label></div><td>
		<td><input type="text" id="u_lec_id" name="u_lec_id" placeholder="L000"></td>
		<td><input type="submit" value="update" name="update"></td>
	</tr>
	<tr>
		<td><select name="lec_one" >
			<option value="lec_name">lecture_name</option>
			<option value="lec_address">lecture_address</option>
			<option value="lecemail">lecture_email</option>
			<option value="lec_dob">lecture_dob</option>
			<option value="lec_phone">lecture_phone</option>
						</select></td>
		<td><td><input type="text" id="f1" name="f1"></td>
	</tr>

 <<br>
<br>

</table>

</form>
  </div>
</div>







 <div class="centeredc">
    <form  method="post">
	<h1>View a lecture Details</h1>
	<table class="tableb">
	
<tr>
	<td><label>Enter lecture ID</label></td>
	<td><input type="text" name="lec_id"><br></td>
</tr>
<tr>
	<td></td>
	<td></td>

<tr>
	<td></td>
	<td><input type="submit" value="search" name="search"></td>
</tr>
</table>
<?php
$conn=mysqli_connect("localhost","root","","php") or die ("Connection error");

if (isset($_POST['search'])){
	if( !empty($_POST['lec_id'])){
		$id="";
		$lec_id=$_POST['lec_id'];
		
		$query="select * from lecture_details where lec_id ='$lec_id'";
		$result=mysqli_query($conn,$query);
		while($row = mysqli_fetch_array($result)){
			$id=$row['lec_id'];
			$name=$row['lec_name'];
			$address=$row['lec_address'];
			$email=$row['lecemail'];
			$dob=$row['lec_dob'];
			$phone=$row['lec_phone'];
			echo "<table id=b>";
			echo "<tr><td id=bt>lecture ID</td> <td id=bd>.$id.</td></tr>";
			echo "<tr><td id=bt>lecture name</td> <td id=bd>.$name.</td></tr>";
			echo "<tr><td id=bt>lecture Address</td> <td id=bd>.$address.</td></tr>";
			echo "<tr><td id=bt>lecture Email</td> <td id=bd>.$email.</td></tr>";
			echo "<tr><td id=bt>lecture DOB</td> <td id=bd>.$dob.</td></tr>";
			echo "<tr><td id=bt>lecture Phone number</td><td id=bd>.$phone.</td></tr>";
			echo "</table>";
		}
			
		echo "<script type='text/javascript'>
				alert('Student_id=$id');
			</script>";		
		
	}

}
?>

</table>

</form>
  
</div>










<div class="split right down">
 <div class="centeredr">
    <form  method="post">
<p><h1>Delete the lecture Details</h1></p>

 <div><label>Enter lecture_id </label></div><br>
<input type="text" id="d_lecid" name="d_lecid" placeholder="L000"><br>

<input type="submit" value="delete" name="delete"type="delete">
<table>
</table>

</form>
  </div>
</div>


<div class="split left">
 <div class="centeredl">
    <form  method="post" class="formc" action="">
<p><h1>Create New lecture</h1></p>

 <div><label>lecture ID  </label></div><br>
<input type="text" id="stid" name="lecid" placeholder="TG000"><br>

<div><label>lecture Name</label></div><br>
<input type="text" name="lecname"><br>

<div><label>lecture Address</label></div><br>
<input type="text" name="lecaddress"><br>

<div><label>lecture Email</label></div><br>
<input type="text" name="lecemail"><br>

<div><label>lecture bod</label></div><br>
<input type="text" name="lecbod"><br>

<div><label>lecture phone</label></div><br>
<input type="text" name="lecphone"><br>

<input type="submit" value="Create_lecture" name="create_lecture"type="create_student">
<table>
</table>

</form>
  </div>
</div>
<body>
</html>

<?php

$conn=mysqli_connect("localhost","root","","php") or die ("Connection error");
 if (isset($_POST['create_lecture'])){
if(!empty($_POST['create_lecture']) && !empty($_POST['lecid']) && !empty($_POST['lecname']) && !empty($_POST['lecaddress']) && !empty($_POST['lecemail']) && !empty($_POST['lecbod']) && !empty($_POST['lecphone']))

	{
	$lecid=$_POST['lecid'];
	$lecname=$_POST['lecname'];
	$lecaddress=$_POST['lecaddress'];
	$lecemail=$_POST['lecemail'];
	$lecbod=$_POST['lecbod'];
	$lecphone=$_POST['lecphone'];
	
	$query="insert into lecture_details values('$lecid','$lecname','$lecaddress','$lecemail','$lecbod','$lecphone')";
	$result=mysqli_query($conn,$query);
	
	echo "<script type='text/javascript'>
			alert('New lecture Added');
			
		 </script>";
	
	}
else
	{
		 echo "<script type='text/javascript'>
			alert('please fill the full form to create a new lecture');
			
		 </script>";
		
	}
 }

if (isset($_POST['delete'])){
	if( !empty($_POST['d_lecid'])){
		$d_lecid=$_POST['d_lecid'];
		$query="DELETE FROM lecture_details WHERE lec_id ='$d_lecid'";
		$result=mysqli_query($conn,$query);
		echo "<script type='text/javascript'>
			alert('delete a lecture suessfully');
			
		 </script>";
		
	}
	
	
	else{
		echo "<script type='text/javascript'>
			alert('please enter lecture id to delete a student');
			
		 </script>";
		
	}
	
}

if (isset($_POST['update'])){
	if( !empty($_POST['u_lec_id'])){
		$u_lec_id=$_POST['u_lec_id'];
		$u_lec_d=$_POST['lec_one'];
		$u_lec_t=$_POST['f1'];
		$query="UPDATE lecture_details SET $u_lec_d='$u_lec_t' WHERE lec_id='$u_lec_id' ";
	$result=mysqli_query($conn,$query);
		echo "<script type='text/javascript'>
			alert('update student id $u_lec_id $u_lec_d by $u_lec_t');
			
		 </script>";
		
	}
	else{
		echo "<script type='text/javascript'>
			alert('please enter lecture id to update lecture data');
			
		 </script>";
		
	}
	
}



 
 
			
?>

