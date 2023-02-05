


<html>

<style>
body {
  background-image: url('../photos/login page.jpg');
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
  top: 0%;
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



div{
text-indent:25px;
}

</style>

<title> signup </title>

<body>
 
 <img src="..\photos\faculty.png" width="100">
<div class="split left">
  <div class="centeredl">
   
  </div>
</div>
<div class="split right">
  <div class="centeredr">
<h1> signup now by filling this form<h1>
<form method="post">
<label>username<label>
<input type="text" name="username"><br>
<label>user address<label>
<input type="text" name="useraddress"><br>
<label>user's email<label>
<input type="text" name="useremail"><br>
<label>Enter the password<label>
<input type="password" name="firstpassword"><br>
<label>Enetr the password again<label>
<input type="password" name="secondpassword"><br>
<table>
<input type="submit" value="Signup" name="signup">
<a href="../index.php"><input type="button" value="Login page" name="login"></a>
</table>
</form>
</div>
</div>

</body>
</html>


<?php

$conn=mysqli_connect("localhost","root","","php") or die ("Connection error");
if(!empty($_POST['signup']) && !empty($_POST['useraddress']) && !empty($_POST['useremail']) && !empty($_POST['firstpassword']) && !empty($_POST['secondpassword']) )
{
	$username=$_POST['username'];
	$firstpassword=$_POST['firstpassword'];
	$secondpassword=$_POST['secondpassword'];
	$useraddress=$_POST['useraddress'];
	$useremail=$_POST['useremail'];
	if($firstpassword==$secondpassword){
		
	$query="insert into users_details values('$username','$useraddress','$useremail','$firstpassword')";
	$result=mysqli_query($conn,$query);
	
	
			
			header("Location:../index.php");

	}
	else 
	{
	echo '<script>
			alert("Password cann not be blank \n enter passwords must be same")
			</script>
		';
	}
}
elseif(empty($_POST['useraddress'])){
	echo '<script>
			alert("Enter User Address")
			</script>
		';
	
	
}
elseif(empty($_POST['useremail'])){
	echo '<script>
			alert("Enter User email")
			</script>
		';
}



?>