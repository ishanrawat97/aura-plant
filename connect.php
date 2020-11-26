<?php  
    $UserId=$_POST['UserId'];  
    $Password=$_POST['Password'];  
  
    $con=mysqli_connect('localhost','root','','aura') or die(mysql_error());  
  
    $query=("SELECT * FROM login2 WHERE UserId='".$UserId."' AND Password='".$Password."'");
	$result=mysqli_query($con, $query);
    $numrows=mysqli_num_rows($result);  
    if($numrows!=0)  
    {
	$row = $result->fetch_assoc();
	
    $dbUserId=$row['UserId'];  
    $dbPassword=$row['Password']; 
	$dbEmail=$row['Email'];

    if($UserId == $dbUserId && $Password == $dbPassword)  
    {  
    session_start();  
	
    /* Redirect browser */  
	echo "Login Successful! Welcome ".$dbEmail."";
	$_SESSION['UserName']= $UserId;
	header("Location: index.php");  
    } else {  
    echo "Invalid username or password!";  
    }  
  
	}
	else {  
    echo "All fields are required!";  
	}  

?>