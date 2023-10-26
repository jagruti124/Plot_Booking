<?php 
    session_start();
    include("db_connect/connection.php")
?>

<?php 
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $username = $_POST['username'];
        $pass = $_POST['pass'];
        

        $fetch = "SELECT * FROM register WHERE username='$username'";
        $result = mysqli_query($conn, $fetch);

        $num = mysqli_num_rows($result);

        if($num == 1)
		{
            while($row = mysqli_fetch_assoc($result))
			{
                if($username == $row['username'])
				{
                    if(password_verify($password, $row['pass']))
						{
                        
                            header("location: ..\plotbookingsystem\index.php");
                        }
                          
						  {
							                              header("location: ..\plotbookingsystem\index.php");

						  }						  
                }
            }
        }
    }
?>

  
<!DOCTYPE html>
<html>

<head>


    <title>login</title>
    <meta charset="utf-8">
  
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="style">
  <!-- bootstrap css -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  
  <!-- google font -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  

<meta name="viewport" content="width=device-width, initial-scale=1">
<style>

*{
	margin : 0;  padding : 0; box-sizing : border-box;
	
}

body {font-family: Arial, Helvetica, sans-serif;}
form {border: 2px solid #f1f1f1;}


		



input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 2px solid #ccc;
  box-sizing: border-box;
}
 background-color: #04AA6D;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

button:hover {
  opacity: 0.8;
}

.cancelbtn {
  width: auto;
  padding: 5px 9px;
  background-color: #f44336;
}

.imgcontainer {
  text-align: center;
  margin: 12px 0 6px 0;
}

img.avatar {
  width: 20%;
  border-radius: 25%;
}

.container {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 150px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}

</style>
</head>
<body>




<br></br><br></br><br></br>
<center>
<h2>Login Form</h2>
<div class= "col-lg-6">
<form method="post">
  <div class="imgcontainer">
    <img src="images/plot(9).jfif" alt="" class="">
  </div>

  <div class="container">
    <label for="username"><b>username</b></label>
    <input type="text" placeholder="Enter Username" name="username" required>
     <br></br>
	 
    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="pass" required>
        <br></br></div>
		
		<div>
    <input type="submit"name="submit"value="submit"class="btn btn-success"> 
	<br></br></div>
	
    <label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label>
  
  
<br></br>
  <div class="container" style="background-color:#">
    <button type"Cancel" class="btn btn-success">Cancel</button>
    <span class="psw">Reset <a href="resetpassword.php">password?</a></span>
  </div>
</form>
</div>
</center>
</body>
</html>


<!DOCTYPE html>
<html>

<head>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<!-- jQuery library -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</head>
<body>
  
  
  <div class="col-ig-8 m-auto d-block">
  <div class ="w-50 m-auto">
  <div class "container"><br>
  

  </div></div></div>
  <br></br><br></br><br></br><br></br>
 
  
</body>
</html>


