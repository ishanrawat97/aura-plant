<?php
			session_start();
			?>
<!DOCTYPE html>
<html>

<head>
  <meta charset='UTF-8'>
  <title>Login and Register</title>
  <link rel="stylesheet" href="style3.css">
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
			if(isset($_SESSION['UserName']))
			{ 
				echo $_SESSION['UserName'];
			}
			else
			{
				echo "Login";
			}
		  ?>
		  </a></li>
          <li><a href="Contact.php">Contact Us</a> </li>
        </ul>  
      </div>
   </div>
       
   
        <div class="hero"></div>
          <div class="form-box">
               <div class="button-box">
                  <div id="btn"></div>
                  <button type="button" class="toggle-btn" onclick="login()">Log In</button>
                  <button type="button" class="toggle-btn" onclick="register()">Register</button>
              </div> 
              <form action="connect.php" method="post" id="login" class="input-group">
                 <input type="text" class="input-field" placeholder="User Id" required name="UserId">
                 <input type="password" class="input-field" placeholder="Enter Password" required name="Password">
                 <input type="checkbox" class="check-box"><span>Remember Password</span>
                 <button type="submit" class="submit-btn" name="submit" >Log In</button>
				<br><a ><?php 
				if(isset($_SESSION['register']))
				{ 
					echo "You have registered successfully";
					unset($_SESSION['register']);
				}
				?>
			</a>
              </form>
              <form action="register.php" method="POST" id="register" class="input-group">
                <input type="text" class="input-field" placeholder="User Id" required name="UserId">
				<input type="email" class="input-field" placeholder="Email Id" required name="Email">
                <input type="password" class="input-field" placeholder="Enter Password" required name="Password">
                <input type="checkbox" class="check-box" required><span>I agree to the terms and conditions</span>
                <button type="submit" class="submit-btn">Register</button>
              </form>

           </div>
        </div>
        <script>
           var x = document.getElementById("login");
           var y = document.getElementById("register");
           var z = document.getElementById("btn");
           
           function register(){
              x.style.left = "-400px";
              y.style.left = "50px";
              z.style.left = "110px";
           }
           function login(){
              x.style.left = "50px";
              y.style.left = "450px";
              z.style.left = "0";
           }
           
        </script>
    

</body>
</html>