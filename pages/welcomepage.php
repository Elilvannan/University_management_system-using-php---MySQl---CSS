<?php
	session_start();
	
	 $username=$_SESSION['username'];
	 
	 
?>
<html>
<title>Welcome page</title>


<style>
body {
	background-image: url('../photos/login page.jpg');
  background-repeat: no-repeat;
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
	left=10%;
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
  top: 7%;
  left:10%;
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

h2{
text-shadow: 2px 2px 5px white;
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

 <div class="centeredc">
<img src="../photos/home.jpg" width="100%"  height="50%">
<br><br><br><br><br><br><h1>Welcome to Ruhuna University Admin page<h1>
<h2>you can access these table thought this web site <ul><li>Student Details</li>  <li>lecture details</li><li> coursedetails</li></ul>

</h2>
 </div>

<div class="split right">
	<div class="centeredl">
		<br><br><br><br><br><br><h1>Login Admin details</h1>
		
		<?php
		$conn=mysqli_connect("localhost","root","","php") or die ("Connection error");
		$query="select * from users_details where username ='$username'";
		$result=mysqli_query($conn,$query);
		while($row = mysqli_fetch_array($result)){
			$name=$row['username'];
			$address=$row['user_address'];
			$email=$row['user_email'];
			
			echo "<table id=b border=4>";
			echo "<tr><td id=bt>user name</td> <td id=bd>$name</td></tr>";
			echo "<tr><td id=bt>lecture Address</td> <td id=bd>$address</td></tr>";
			echo "<tr><td id=bt>lecture Email</td> <td id=bd>$email</td></tr>";
		echo "</table>";
		}
		?>
	
	</div>
</div>

</body>
</html>