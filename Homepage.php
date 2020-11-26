<!DOCTYPE html>
<html>

<head>
  <meta charset='UTF-8'>
  <title>Types of Plants</title>
  <link rel="stylesheet" href="styles.css">
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
        <li><a href="welcome.php"><?php
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
    
  

    <div class="content-wrapper">
      <div class="portfolio-items-wrapper">

        <div class="portfolio-item-wrapper">
          <div class="portfolio-img-background" style="background-image: url(images/1.png)"></div>
        
          <div class="img-text-wrapper">
            <div class="subtitle">
              Fiddle Leaf Fig
            </div>
          </div>
       </div>

       <div class="portfolio-item-wrapper">
          <div class="portfolio-img-background" style="background-image: url(images/2.png)"></div>
        
          <div class="img-text-wrapper">
            <div class="subtitle">
              Echeveria
            </div>
          </div>
        </div>

        <div class="portfolio-item-wrapper">
          <div class="portfolio-img-background" style="background-image: url(images/3.png)"></div>
          
          <div class="img-text-wrapper">
            <div class="subtitle">
              Bonsai
            </div>
          </div>
        </div>

        <div class="portfolio-item-wrapper">
          <div class="portfolio-img-background" style="background-image: url(images/4.jpg)"></div>
          
          <div class="img-text-wrapper">
            <div class="subtitle">
              Monstera Deliciosa
            </div>
          </div>
        </div>

        <div class="portfolio-item-wrapper">
          <div class="portfolio-img-background" style="background-image: url(images/5.png)"></div>
          
          <div class="img-text-wrapper">
            <div class="subtitle">
              Moon Cactus
            </div>
          </div>
        </div>

        <div class="portfolio-item-wrapper">
          <div class="portfolio-img-background" style="background-image: url(images/6.jpg)"></div>
        
          <div class="img-text-wrapper">
            <div class="subtitle">
              Calathea Burle Marx
            </div>
          </div>
        </div>

        <div class="portfolio-item-wrapper">
          <div class="portfolio-img-background" style="background-image: url(images/7.jpeg)"></div>
        
          <div class="img-text-wrapper">
            <div class="subtitle">
              Peacock Plant
            </div>
          </div>
        </div>

        <div class="portfolio-item-wrapper">
          <div class="portfolio-img-background" style="background-image: url(images/11.jpeg)"></div>
        
          <div class="img-text-wrapper">
            <div class="subtitle">
             Snake Plant
            </div>
          </div>
        </div>

        <div class="portfolio-item-wrapper">
          <div class="portfolio-img-background" style="background-image: url(images/10.jpeg)"></div>
        
          <div class="img-text-wrapper">
            <div class="subtitle">
              Weeping Fig
            </div>
          </div>
        </div>

        <div class="portfolio-item-wrapper">
          <div class="portfolio-img-background" style="background-image: url(images/12.jpeg)"></div>
        
          <div class="img-text-wrapper">
            <div class="subtitle">
              Peace Lily Spathiphyllum
            </div>
          </div>
        </div>

        <div class="portfolio-item-wrapper">
          <div class="portfolio-img-background" style="background-image: url(images/8.jpeg)"></div>
        
          <div class="img-text-wrapper">
            <div class="subtitle">
              Majesty Palm
            </div>
          </div>
        </div>

        <div class="portfolio-item-wrapper">
          <div class="portfolio-img-background" style="background-image: url(images/9.png)"></div>
        
          <div class="img-text-wrapper">
            <div class="subtitle">
             Aloe Vera
            </div>
          </div>
        </div>

        <div class="portfolio-item-wrapper">
          <div class="portfolio-img-background" style="background-image: url(images/13.jpg)"></div>
        
          <div class="img-text-wrapper">
            <div class="subtitle">
              Watermelon Peperomia Plant
            </div>
          </div>
        </div>

        <div class="portfolio-item-wrapper">
          <div class="portfolio-img-background" style="background-image: url(images/15.jpg)"></div>
        
          <div class="img-text-wrapper">
            <div class="subtitle">
              Sakura
            </div>
          </div>
        </div>

        <div class="portfolio-item-wrapper">
          <div class="portfolio-img-background" style="background-image: url(images/14.jpg)"></div>
        
          <div class="img-text-wrapper">
            <div class="subtitle">
              Cast Iron Plant
            </div>
          </div>
        </div>

      </div>  
    </div>
  </div>
</body>
<script>
  const portfolioItems = document.querySelectorAll('.portfolio-item-wrapper')
 
  portfolioItems.forEach(PortfolioItem =portfolioItem => {
    portfolioItem.addEventListener('mouseover',() => {
      portfolioItem.childNodes[1].classList.add('img-darken');
    })

    portfolioItem.addEventListener('mouseout',() => {
      portfolioItem.childNodes[1].classList.remove('img-darken');
    })
  })

</script>

</html>
    
 
 

    
