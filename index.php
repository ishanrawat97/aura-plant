<?php
			session_start();
			?>
<!DOCTYPE html>
<html>
    <head>
        <title> AURA NURSERY </title>
        <link rel="stylesheet" type="text/css"  href="style1.css">
    </head>
    <body>
        <header>

             <div class="container">
               <div class="logo">
                 <img src="Images/1601505805906.png">
                </div>
                <div class="hero">
                        <h1>WELCOME TO AURA </h1><br><br><br>
                        <p>Make your homes beautiful</p><br><br>
                        <p>India's largest online nursery</p>
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
					</a> </li>
                    <li><a href="Contact.php">Contact Us</a> </li>
                    
                </ul>
                
            </div>
           
        </header>
        
           
        
    </body>
</html>