<?php
session_start();
if(!empty($_POST["login"])) {
	$conn = mysqli_connect("localhost", "root", "", "aura");
	$sql = "Select * from login2 where UserId = '" . $_POST["UserId"] . "'";
        if(!isset($_COOKIE["UserId"])) {
            $sql .= " AND Password = '" . md5($_POST["Password"]) . "'";
	}
        $result = mysqli_query($conn,$sql);
	$user = mysqli_fetch_array($result);
	if($user) {
			$_SESSION["UserId"] = $user["UserId"];
			
			if(!empty($_POST["remember"])) {
				setcookie ("member_login",$_POST["member_name"],time()+ (10 * 365 * 24 * 60 * 60));
			} else {
				if(isset($_COOKIE["member_login"])) {
					setcookie ("member_login","");
				}
			}
	} else {
		$message = "Invalid Login";
	}
}
?>