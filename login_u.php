<?php
session_start(); 
$error=''; 

if (isset($_POST['submit'])) {
if (empty($_POST['username']) || empty($_POST['password'])) {
$error = "Username or Password is invalid";
}
else
{
// Define $username and $password
$username=$_POST['username'];
$password=$_POST['password'];
//$password=md5($p);
$_SESSION['username'] = $username;
// Establishing Connection with Server by passing server_name, user_id and password as a parameter
require 'connection.php';
$conn = Connect();
$result = substr($username, 0, 5);
if($result=="@dmin")
{
	$query = "SELECT username, password FROM MANAGER WHERE username=? AND password=? LIMIT 1";
				
			$stmt = $conn->prepare($query);
			$stmt -> bind_param("ss", $username, $password);
			$stmt -> execute();
			$stmt -> bind_result($username, $password);
			$stmt -> store_result();

			if ($stmt->fetch())  
			{
				$_SESSION['loggedin']=true;
				$_SESSION['login_user1']=$username; // Initializing Session
				header("location: myrestaurant.php"); // Redirecting To Other Page
			} else {
			$error = "Username or Password is invalid";
			}
			mysqli_close($conn); // Closing Connection
			}
else{
	$query = "SELECT username, password FROM CUSTOMER WHERE username=? AND password=? LIMIT 1";
	
// SQL query to fetch information of registerd users and finds user match.

// To protect MySQL injection for Security purpose
$stmt = $conn->prepare($query);
$stmt -> bind_param("ss", $username, $password);
$stmt -> execute();
$stmt -> bind_result($username, $password);
$stmt -> store_result();

if ($stmt->fetch())  
{
	$_SESSION['loggedin']=true;
	$_SESSION['login_user2']=$username; // Initializing Session
	header("location: services.php"); // Redirecting To Other Page
} else {
	$message = "Username and/or Password incorrect.\\nTry again.";
	echo "<script type='text/javascript'>alert('$message');</script>";
}
mysqli_close($conn); // Closing Connection
}
}
}


?>