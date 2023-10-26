<?php  
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "plotbookingsystem";
	
	$conn = mysqli_connect($servername, $username, $password, $dbname);
	
	if($conn){
		echo "print";
	}
	else{
		echo "error";
	}
?>