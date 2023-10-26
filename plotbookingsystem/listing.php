<?php
$con =mysqli_connect('localhost','root');
if($con)
{
	echo"Connection successful";
}
else
{
echo"No connection";
}
	
	mysqli_select_db($con,'plotbookingsystem');
	
	if(isset($_POST['insert_btn'])){
		$zone = $_POST['zone'];
		$address = $_POST['address'];
		$plot_available = $_POST['plot_available'];
		$area = $_POST['area'];
		$plot_price = $_POST['plot_price'];
		$oname = $_POST['oname'];
		$contact_number = $_POST['contact_number'];
	
		$query= "insert into property(zone,address,plot,plot_area,price,owner,number)
		values('$zone', '$address', '$plot_available', '$area', '$plot_price', '$oname', '$contact_number')";
		$result = mysqli_query($con,$query);
		
		if($result){
			echo "Success";
		}
		else{
			echo "failed";
		}
	}

?>

<!DOCTYPE html>
<html>

<head>
<style>

*{
	margin : 0;  padding : 0; box-sizing : border-box;
	
}</style>

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
        <a class="nav-link" href="index.php"><h5>Home</h5> </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="properties.php"><h5>Property</h5></a>
      </li>
      
	  
<li class="nav-item">
        <a class="nav-link" href="map.php"><h5>Map</h5></a>
			<a  href="map.php"></a>
      </li> 


      <li class="nav-item">
        <a class="nav-link" href="register.php"><h5>signup</h5></a>
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



<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</head>
<body>
  
  <title></title>
	<div>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel ="stylesheet" type ="text/css"href="style.css/all_min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

  
  <div class="col-ig-8 m-auto d-block">
  <div class ="w-50 m-auto">
  <div class "container"><br>
  <h2 class"text-success text-center"> Enter information about Owner and Property </h2></br>
  
  <form action="" method="POST" onsubmit="return validation()class"bg-light">
  
  
  <div class="form-group">
  <label>zone:</label>
  <input type="text"name="zone"class="form-control"id="zone">
  </div>
  
  <div class="form-group">
  <label>address:</label>
  <input type="text"name="address"class="form-control"id="address">
  </div>
  
  <div class="form-group">
  <label>number of available plots:</label>
  <input type="text"name="plot_available"class="form-control"id="number of available plots">
  </div>
  
  <div class="form-group">
  <label>area(sqft):</label>
  <input type="text"name="area"class="form-control"id="area(sqft)">
  </div>
  
  <div class="form-group">
  <label>plot price</label>
  <input type="text"name="plot_price"class="form-control"id="plot price">
  </div>
  
  <div class="form-group">
  <label>Name Of The Owner:</label>
  <input type="text"name="oname"class="form-control"id="Name Of The Owner">
  </div>
  
  <div class="form-group">
  <label>Contact Number:</label>
  <input type="text"name="contact_number"class="form-control"id="Contact Number">
  </div>
  
  <button type"INSERT" name="insert_btn" class="btn btn-success">INSERT</button>
  <button type"UPDATE" name="update_btn" class="btn btn-success">UPDATE</button>
  <button type"DELETE"  name="delete_btn"class="btn btn-success">DELETE</button>
  
  </form>
  </div></div></div>
   <br></br><br></br><br></br><br></br>
  <section>
<div>
<footer Class>
   
<h3 class ="p-5 bg-dark text-white"></h3>
 
</footer>
</div>
</section>

  
</body>
</html>
