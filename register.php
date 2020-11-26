<?php
	$UserId = $_POST['UserId'];
	$Email = $_POST['Email'];
	$Password = $_POST['Password'];
	

	// Database connection
	$conn = new mysqli('localhost','root','','aura');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into login2(UserId, Email ,Password) values(?, ?, ?)");
		$stmt->bind_param("sss", $UserId, $Email, $Password);
		$execval = $stmt->execute();
		$stmt->close();
		$conn->close();
		session_start();
		$_SESSION['register']=1;
		header("Location: welcome.php");
	}
?>


