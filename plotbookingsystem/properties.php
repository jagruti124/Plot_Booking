

<?php
$con =mysqli_connect('localhost','root');
if($con)
{
}
else
{
echo"No connection";
}

	mysqli_select_db($con,'plotbookingsystem');	

 ?>

<html>
      
	<head>
	<head>


	<title></title>

	<div>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel ="stylesheet" type ="text/css"href="style.css/all_min.css">
  <link rel ="stylesheet" type ="text/css"href="style.css/boostrap_min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <style>
		
         table, th,td{
				text-align: center;
				font-size: 20px;
				border: 1px solid black;
				

			}
			th{
				font-size: 35px;
			}
			
			
			
			
		</style>
	</head>
	<body>
	
	
	<div>
	<!doctype html>
<html lang="en">
  <head>
      
         </div>
		 <div>
    <title>Ploat Booking System</title>
    <meta charset="utf-8">
  
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="style">
  <!-- bootstrap css -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  
  <!-- google font -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
   </head>
  <body>
   

  <!-- start navigation  -->
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
        <a class="nav-link" href="index.php"><h4>Home </h4></a>
      </li>
	  
	  	
		<li class="nav-item">
        <a class="nav-link" href="listing.php"><h4>listing</h4></a>
			<a  href="listing.php"></a>
      </li>  
	  
	  	  
<li class="nav-item">
        <a class="nav-link" href="map.php"><h4>Map</h4></a>
			<a  href="map.php"></a>
      </li> 

      
       <li class="nav-item">
        <a class="nav-link" href="signup.php"><h4>signup</h4></a>
		<a  href="signup.php"></a>
      </li>
	  
	  <li class="nav-item">
        <a class="nav-link" href="login.php"><h4>Login</h4></a>
		<a  href="login.php"></a>
     </li>
     
	  
    <li class="nav-item">
        <a class="nav-link" href="logout.php"><h4>logout</h4></a>
			<a  href="logout.php"></a>
      </li>      

	  
    
     	
     
    </ul>
   
  </div></div>

 

	
	 </body>
</html>
<center>
	<h3>Property List for Buyer</h3>
	<br></br>
		<table>
		
			<thead>
				<tr>
					<th>Zone</th>
					<th>Address</th>
					<th>plot</th>
					<th>plot_Area</th>
					<th>price</th>
					<th>owner</th>
					<th>number</th>
				</tr>
			</thead>
			</center>
			<tbody>
			
		
			
				<tr>
					<?php
					$query = "select * from property";
					$result = mysqli_query($con, $query);
					
					while($row = mysqli_fetch_array($result)){
					?>
					<tr>
					<td><?php echo $row['zone']; ?></td>
					<td><?php echo $row['address']; ?></td>
					<td><?php echo $row['plot']; ?></td>
					<td><?php echo $row['plot_area']; ?></td>
					<td><?php echo $row['price']; ?></td>
					<td><?php echo $row['owner']; ?></td>
					<td><?php echo $row['number']; ?></td>
					</tr>
					<?php 
					}
					?>
				</tr>
			</tbody>
		</table>
		<br fix footer bottem></br>
		<br></br> <br></br> <br></br> <br></br> <br></br><br></br><br></br><br></br><br></br><br></br><br></br><br></br><br></br><br></br><br></br>
		<footer Class>
   
<h3 class ="p-5 bg-dark text-white"></h3>
 
</footer></div></section>

	</body>
</html>