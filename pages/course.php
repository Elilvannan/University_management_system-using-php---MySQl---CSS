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
	<p><h1>update course details</h1></p>
<table>
	<tr>
		<td><div><label>course_id  </label></div><td>
		<td><input type="text" id="u_cou_id" name="u_cou_id" placeholder="ict000"></td>
		<td><input type="submit" value="update" name="update"></td>
	</tr>
	<tr>
		<td><select name="cou_one" >
			<option value="cou_name">cou_name</option>
			<option value="cou_credit">course credit</option>
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
	<h1>View course Details</h1>
	<table class="tableb">

<tr>
	<td></td>
	<td></td>

</table>
<?php
$conn=mysqli_connect("localhost","root","","php") or die ("Connection error");


		$query="select * from course_details";
		$result=mysqli_query($conn,$query);
		echo "<table id=b>";
		echo "<tr><th id=bt>Course ID</td> <td id=bt>course name</td><td id=bt>course credit</td></tr>";
		
		while($row = mysqli_fetch_array($result)){
			$id=$row['cou_id'];
			$name=$row['cou_name'];
			$credit=$row['cou_credit'];
			
			echo "<tr><td id=bd>$id</td> <td id=bd>$name</td><td id=bd>$credit</td></tr>";
			
		}
		echo "</table>";
?>

</table>

</form>
  
</div>










<div class="split right down">
 <div class="centeredr">
    <form  method="post">
<p><h1>Delete the course Details</h1></p>

 <div><label>Enter course_id </label></div><br>
<input type="text" id="d_couid" name="d_couid" placeholder="ict000"><br>

<input type="submit" value="delete" name="delete"type="delete">
<table>
</table>

</form>
  </div>
</div>


<div class="split left">
<div class="centeredl">
<form  method="post" class="formc" action="">
<p><h1>Create New course</h1></p>

 <div><label>course ID  </label></div><br>
<input type="text" id="couid" name="couid" placeholder="ict0000"><br>

<div><label>course Name</label></div><br>
<input type="text" name="couname"><br>

<div><label>course credit</label></div><br>
<input type="text" name="cou_cre"><br>

<input type="submit" value="Create_course" name="create_course" type="Create_course">
<table>
</table>

</form>
  </div>
</div>
<body>
</html>

<?php

$conn=mysqli_connect("localhost","root","","php") or die ("Connection error");
 if (isset($_POST['create_course'])){
if(!empty($_POST['couid']) && !empty($_POST['couname']) && !empty($_POST['cou_cre']))

	{
	$couid=$_POST['couid'];
	$couname=$_POST['couname'];
	$cou_cre=$_POST['cou_cre'];
	$query="insert into course_details values('$couid','$couname','$cou_cre')";
	$result=mysqli_query($conn,$query);
	
	echo "<script type='text/javascript'>
			alert('New course Added');
			
		 </script>";
	
	}
else
	{
		 echo "<script type='text/javascript'>
			alert('please fill the full form to create a new course');
			
		 </script>";
		
	}
 }

if (isset($_POST['delete'])){
	if( !empty($_POST['d_couid'])){
		$d_couid=$_POST['d_couid'];
		$query="DELETE FROM course_details WHERE cou_id ='$d_couid'";
		$result=mysqli_query($conn,$query);
		echo "<script type='text/javascript'>
			alert('delete a course suessfully');
			
		 </script>";
		
	}
	
	
	else{
		echo "<script type='text/javascript'>
			alert('please enter course id to delete a course');
			
		 </script>";
		
	}
	
}

if (isset($_POST['update'])){
	if( !empty($_POST['u_cou_id'])){
		$u_cou_id=$_POST['u_cou_id'];
		$u_cou_d=$_POST['cou_one'];
		$u_cou_t=$_POST['f1'];
		$query="UPDATE course_details SET $u_cou_d='$u_cou_t' WHERE cou_id='$u_cou_id' ";
	$result=mysqli_query($conn,$query);
		echo "<script type='text/javascript'>
			alert('update student id $u_cou_id $u_cou_d by $u_cou_t');
			
		 </script>";
		
	}
	else{
		echo "<script type='text/javascript'>
			alert('please enter course id to update course data');
			
		 </script>";
		
	}
	
}



 
 
			
?>


