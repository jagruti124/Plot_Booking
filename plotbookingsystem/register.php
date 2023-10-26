<?php 
	include("db_connect/connection.php");
	
	if($_SERVER["REQUEST_METHOD"] == "POST"){
		$username = $_POST['username'];
		$email = $_POST['email'];
		$pass_1 = $_POST['pass_1'];
		$pass_2 = $_POST['pass_2'];
		
		$exist = "SELECT * FROM `register` WHERE email = '$email'";
		$result = mysqli_query($conn, $exist);
		
		$numExistRow = mysqli_num_rows($result);
		
		if($numExistRow > 0){
			echo "User id found";
		}
		if($pass_1 != $pass_2){
			echo "password not match";
		}
		else{
			$insert = "Insert into register(username,email,pass_1,pass_2) Values('$username','$email','$pass_1','$pass_2')";
			$data_result = mysqli_query($conn, $insert);
			
			if($data_result){
				echo "Success";
			}
			else{
				echo "something went wrong";
			}
			{
				                            header("location: ..\plotbookingsystem\index.php");

			}
		}
	}
?>


<!DOCTYPE html>
<html>
<head>
<style>
   
* {
  margin: 0px;
  padding: 0px;
}
body {
  font-size: 120%;
  background: #F8F8FF;
}

.header {
  width: 40%;
  margin: 50px auto 0px;
  color: white;
  background: #5F9EA0;
  text-align: center;
  border: 1px solid #B0C4DE;
  border-bottom: none;
  border-radius: 10px 10px 0px 0px;
  padding: 20px;
}
form, .content {
  width: 40%;
  margin: 0px auto;
  padding: 20px;
  border: 1px solid #B0C4DE;
  background: white;
  border-radius: 0px 0px 10px 10px;
}
.input-group {
  margin: 10px 0px 10px 0px;
}
.input-group label {
  display: block;
  text-align: left;
  margin: 3px;
}
.input-group input {
  height: 30px;
  width: 93%;
  padding: 5px 10px;
  font-size: 16px;
  border-radius: 5px;
  border: 1px solid gray;
}
.btn {
  padding: 10px;
  font-size: 15px;
  color: white;
  background: #5F9EA0;
  border: none;
  border-radius: 5px;
}
.error {
  width: 92%; 
  margin: 0px auto; 
  padding: 10px; 
  border: 1px solid #a94442; 
  color: #a94442; 
  background: #f2dede; 
  border-radius: 5px; 
  text-align: left;
}
.success {
  color: #3c763d; 
  background: #dff0d8; 
  border: 1px solid #3c763d;
  margin-bottom: 20px;

  </style>
  
  

</head>
<body>

 <div class="header">
  	<h2>Register</h2>
  </div>
	
  <form method="post">
  	<div class="input-group">
  	  <label>Username</label>
  	  <input type="text" name="username" value="">
  	</div>
  	<div class="input-group">
  	  <label>Email</label>
  	  <input type="email" name="email" value="">
  	</div>
  	<div class="input-group">
  	  <label>Password</label>
  	  <input type="password" name="pass_1">
  	</div>
  	<div class="input-group">
  	  <label>Confirm password</label>
  	  <input type="password" name="pass_2">
  	</div>

<div>


<div>

 
<body onload="GenerateCaptcha();">  
    <div style="border: 2px solid gray; width: 700px;">  
  
        Enter the Captcha Text:  
        <input type="text" id="txtCompare" />  
        <input type="text" id="txtCaptcha" style="text-align: center; border: none; font-weight: bold; font-size: 20px; font-family: Modern" />  
        <input type="button" id="btnrefresh" value="Refresh" onclick="GenerateCaptcha();" />  
        <input id="btnValid" type="button" value="Check" onclick="alert(ValidCaptcha());" />  
  
        <br />  
        <br />  
    </div>
</div>

  	<div class="input-group">
  	  <button type="submit" class="btn" name="reg_user">Register</button>
  	</div>
  	

  	<p>
  		Already a member? <a href="login.php">Sign in</a>
  	</p>
  </form>
</body>
</html>