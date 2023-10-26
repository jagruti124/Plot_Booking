<?php
//$con =mysqli_connect('localhost','root');
//if($con)
//{
	//echo"Connection successful";
//}
//else
//{
//echo"No connection";}/

	include("db_connect/connection.php");
	//mysqli_select_db($con,'plotbookingsystem');
	
	if(isset($_POST['insert_btn'])){
		$user = $_POST['username'];
		$email = $_POST['email'];
		$mobile = $_POST['mobile'];
		$comments = $_POST['comments'];
	
		$query= "insert into contactus(username,email,mobile,comments)
		values('$user', '$email', '$mobile', '$comments')";
		$result = mysqli_query($con,$query);
		
		if($result){
			echo "Success";
		}
		else{
			echo "failed";
		}
	}
	
	header("location: index.php");

?>