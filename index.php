

<html>
<head>

<style>
body {
  background-image: url('photos/login page.jpg');
  background-repeat: no-repeat;
  background-size: 100% 100%; 
}





.split {
  height: 100%;
  width: 50%;
  position: fixed;
  z-index: 1;
  top: 0;
  overflow-x: hidden;
 
}

.left {
  left: 0;
 
}

.center{
	left=50%;
}

.right {
  right: 0;
  
}

.centeredl {
  position: absolute;
  top: 20%;
  left: 0%;
  right:0%;
  height: 60%;
  bottom 10%:
  transform: translate(-50%, -50%);
 
}

.centeredr {
  position: absolute;
  top: 20%;
  left:10px;
  right:20%;
  height: 60%;
  bottom 10%:
  transform: translate(-50%, -50%);
  
}




img{
  
  background-color:white;
  position: relative;
  
  animation-name: imgani;
  animation-duration: 4s;
   
}

@keyframes imgani {
  from {background-color: black;}
  to {background-color: white;}
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





input[type=text],input[type=password]{ width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;}


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
  padding: 14px 20px;
  margin: 8px 0;
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
text-shadow: 2px 2px 5px blue;
background-color:powderblue;
font-size:150%;

}

div{
text-indent:25px;
}

</style>

<title>Welcome_Page</title></head>
<body>
 <img src="photos\faculty.png" width="100">
<div class="split left">
  <div class="centeredl">
   
  </div>
</div>

<div class="split right">
  <div class="centeredr">
    <form  method="post">
<p><h1>sign up</h1></p>

 <div><label>user name  </label></div><br>
<input type="text" id="username" name="username" placeholder="TG000"><br>
<div><label>password</label></div><br>
<input type="password" name="password"><br>
<input type="submit" value="continue" name="continue">
<table>
<a href="########"><input type="button" name="forget password" value="forget password"></a>
<a href="pages\signup.php"><input type="button" name="signup" value="signup"></a>
</table>

</form>
  </div>
</div>

</body>
</html>

<?php
session_start();

$conn=mysqli_connect("localhost","root","","php") or die ("Connection error");
if(!empty($_POST['continue']))
{
	$username=$_POST['username'];
	$_SESSION['username']=$_POST['username'];
	
	$password=$_POST['password'];
	$query="select * from users_details where username='$username' and user_password='$password'";
	$result=mysqli_query($conn,$query);
	$count=mysqli_num_rows($result);
	if($count>0){
			
			header("Location:pages\welcomepage.php");
			exit();

	}
	else 
		{
		
		echo '<script> 
				alert("enter correct password or user name"); 
				</script>'
			;
		}
}
else 
		{
		
		echo '<script> 
				alert("Welcome to Ruhuna university admin page \n Enter username and password to login"); 
				</script>'
			;
		}

?>