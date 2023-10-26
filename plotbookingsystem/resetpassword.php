<?php

if (isset($_GET["key"]) && isset($_GET["email"]) && isset($_GET["action"]) 
&& ($_GET["action"]=="reset") && !isset($_POST["action"])){
  $key = $_GET["key"];
  $email = $_GET["email"];
  $curDate = date("Y-m-d H:i:s");
  $query = mysqli_query($con,
  "SELECT * FROM `password_reset_temp` WHERE `key`='".$key."' and `email`='".$email."';"
  );
  $row = mysqli_num_rows($query);
  if ($row==""){
  $error .= '<h2>Invalid Link</h2>
<p>The link is invalid/expired. Either you did not copy the correct link
from the email, or you have already used the key in which case it is 
deactivated.</p>
<p><a href="https://www.allphptricks.com/forgot-password/index.php">
Click here</a> to reset password.</p>';
	}else{
  $row = mysqli_fetch_assoc($query);
  $expDate = $row['expDate'];
  if ($expDate >= $curDate){
  ?>
  <br />
  <form method="post" action="" name="update">
  <input type="hidden" name="action" value="update" />
  <br /><br />
  <label><strong>Enter New Password:</strong></label><br />
  <input type="password" name="pass1" maxlength="15" required />
  <br /><br />
  <label><strong>Re-Enter New Password:</strong></label><br />
  <input type="password" name="pass2" maxlength="15" required/>
  <br /><br />
  <input type="hidden" name="email" value="<?php echo $email;?>"/>
  <input type="submit" value="Reset Password" />
  </form>
<?php
}else{
$error .= "<h2>Link Expired</h2>
<p>The link is expired. You are trying to use the expired link which 
as valid only 24 hours (1 days after request).<br /><br /></p>";
            }
      }
if($error!=""){
  echo "<div class='error'>".$error."</div><br />";
  }			
} // isset email key validate end


if(isset($_POST["email"]) && isset($_POST["action"]) &&
 ($_POST["action"]=="update")){
$error="";
$pass1 = mysqli_real_escape_string($con,$_POST["pass1"]);
$pass2 = mysqli_real_escape_string($con,$_POST["pass2"]);
$email = $_POST["email"];
$curDate = date("Y-m-d H:i:s");
if ($pass1!=$pass2){
$error.= "<p>Password do not match, both password should be same.<br /><br /></p>";
  }
  if($error!=""){
echo "<div class='error'>".$error."</div><br />";
}else{
$pass1 = md5($pass1);
mysqli_query($con,
"UPDATE `users` SET `password`='".$pass1."', `trn_date`='".$curDate."' 
WHERE `email`='".$email."';"
);

mysqli_query($con,"DELETE FROM `password_reset_temp` WHERE `email`='".$email."';");
	
echo '<div class="error"><p>Congratulations! Your password has been updated successfully.</p>
<p><a href="login.php">
Click here</a> to Login.</p></div><br />';
	  }		
}
?>
<!DOCTYPE html>
<html lang="en">
<head>

<style>

*{
	margin : 0;  padding : 0; box-sizing : border-box;
	
}</style>



<title></title>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel ="stylesheet" type ="text/css"href="style.css/all_min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


    <meta charset="UTF-8">
    <title>Reset Password</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body{ font: 14px sans-serif; }
        .wrapper{ width: 360px; padding: 20px; }
    </style>
</head>
<body>
       
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="index.php"><div class="container-fluid">
		Ploat Booking System</div></a>
  <span class="navbar-text"> </span>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="myMenu">
  <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="myMenu">
      <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php"><h5>Home </h5></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="properties.php"><h5>Property</h5></a>
      </li>
	  
	  	
		<li class="nav-item">
        <a class="nav-link" href="listing.php"><h5>listing</h5></a>
			<a  href="listing.php"></a>
      </li>  
	  
	  
<li class="nav-item">
        <a class="nav-link" href="map.php"><h5>Map</h5></a>
			<a  href="map.php"></a>
      </li> 

	  
	  <li class="nav-item">
        <a class="nav-link" href="signup.php"><h5>signup</h5></a>
		<a  href="signup.php"></a>
      </li>
	  
      
     <li class="nav-item">
        <a class="nav-link" href="login.php"><h5>Login</h5></a>
		<a  href="login.php"></a>
     </li>
	 
	 	
    
     <li class="nav-item">
        <a class="nav-link" href="logout.php"><h5>logout</h5></a>
			<a  href="logout.php"></a>
      </li>      
     
    
     </ul>
     </div>
</nav>


<center>
    <div class="wrapper">
        <h2>Reset Password</h2>
        <p>Please fill out this form to reset your password.</p>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post"> 
            <div class="form-group">
                <label>New Password</label>
                <input type="password" name="new_password" class="form-control <?php echo (!empty($new_password_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $new_password; ?>">
                <span class="invalid-feedback"><?php echo $new_password_err; ?></span>
            </div>
            <div class="form-group">
                <label>Confirm Password</label>
                <input type="password" name="confirm_password" class="form-control <?php echo (!empty($confirm_password_err)) ? 'is-invalid' : ''; ?>">
                <span class="invalid-feedback"><?php echo $confirm_password_err; ?></span>
            </div>
            <div class="form-group">
                <button type"submit" class="btn btn-success">submit</button>
                <a class="btn btn-link ml-2" href="index.php">Cancel</a>
            </div>
        </form>
    </div>
  </center> 
<br></br><br></br><br></br><br></br><br></br><br></br><br></br><br></br><br></br><br></br><br></br><br></br><br></br>

<section>
<div>
<footer Class>
   
<h3 class ="p-5 bg-dark text-white"></h3>
 
</footer>
</div>
</section>

  
</body>
</html>
