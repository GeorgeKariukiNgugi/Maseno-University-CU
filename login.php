<?php
include('includes/databaseConnectivity.php');
if($_SERVER['REQUEST_METHOD'] == "POST"){
	$username = $_POST['username'];
	$password = $_POST['password'];
	
	echo $username;
	echo $password;
	
	
	$sql = "select id from login where username ='". $username ."' and password ='". $password . "';";
	
	if($conn-> query($sql)){
		echo "query fine";
		
		$result = $conn-> query($sql);
		
		$number = $result->num_rows;
		echo $number;
		
		if($number == 1){
			header('Location:superAdmin.html');
		}
		else{
			// 
		echo "error";
		
		}
	}
	else{
		
		echo $conn->error ."error registered.";
	}
}
?>
