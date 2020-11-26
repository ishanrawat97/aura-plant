<!DOCTYPE html>
<html>

<head>
  <meta charset='UTF-8'>
  <title>Contact Us</title>
  <link rel="stylesheet" href="style2.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
</head>

<body>
    <div class="container">
        <div="nav-wrapper">
          <div class="logo">
             <img src="Images/1601505805906.png">
          </div>
          <ul class="main">
            <li class="active"><a href="index.php">Home</a> </li>
            <li><a href="Homepage.php">Plants</a> </li>
            <li><a href="welcome.php">
			<?php
					session_start();
					if(isset($_SESSION['UserName']))
					{ 
						echo $_SESSION['UserName'];
					}
					else
					{
						echo "Login";
					}
			?>
			</a> </li>
            <li><a href="Contact.php">Contact Us</a> </li>
          </ul>  
    </div>
    
    
  
    <div class="contact-info">
        <div class="card">
             <i class="card-icon far fa-envelope"></i>
             <p>Aura@gmail.com</p>
        </div>

        <div class="card">
            <i class="card-icon fas fa-phone"></i>
            <p>+91 8934674900</p>
        </div>

        <div class="card">
            <i class="card-icon fas fa-map-marker-alt"></i>
            <p>Delhi, India</p>
        </div>
  </div>

</body>
</html>