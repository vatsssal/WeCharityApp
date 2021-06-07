<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
         <div class="container">
            <a href="index.php"><img src ="images/logo.png" style="max-width:220px;float:left;"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> Menu
            </button>
            <div class="collapse navbar-collapse" id="ftco-nav">
               <ul class="navbar-nav ml-auto">
			   
                  <li class="nav-item <?php $active=$_SERVER['REQUEST_URI'];
				  if($active=='/wecharity/' || $active=='/wecharity/index.php')
				  {
					  echo 'active';
					  }
				  ?>">
				  <a href="index.php" class="nav-link">Home</a></li>
                  <li class="nav-item <?php $active=$_SERVER['REQUEST_URI'];
				  if($active=='/wecharity/about.php')
				  {
					  echo 'active';
					  }
				  ?>"><a href="about.php" class="nav-link">About</a></li>
                  <li class="nav-item <?php $active=$_SERVER['REQUEST_URI'];
				  if($active=='/wecharity/causes.php')
				  {
					  echo 'active';
					  }
				  ?>"><a href="causes.php" class="nav-link">Charities</a></li>
                  <li class="nav-item <?php $active=$_SERVER['REQUEST_URI'];
				  if($active=='/wecharity/donate.php')
				  {
					  echo 'active';
					  }
				  ?>"><a href="donate.php" class="nav-link">Donations</a></li>
                  <li class="nav-item <?php $active=$_SERVER['REQUEST_URI'];
				  if($active=='/wecharity/add_charity.php')
				  {
					  echo 'active';
					  }
				  ?>"><a href="add_charity.php" class="nav-link">Add Charity</a></li>
                  <li class="nav-item <?php $active=$_SERVER['REQUEST_URI'];
				  if($active=='/wecharity/blog.php')
				  {
					  echo 'active';
					  }
				  ?>"><a href="blog.php" class="nav-link">Blog</a></li>
                  <li class="nav-item <?php $active=$_SERVER['REQUEST_URI'];
				  if($active=='/wecharity/gallery.php')
				  {
					  echo 'active';
					  }
				  ?>"><a href="gallery.php" class="nav-link">Gallery</a></li>
                  <li class="nav-item <?php $active=$_SERVER['REQUEST_URI'];
				  if($active=='/wecharity/contact.php')
				  {
					  echo 'active';
					  }
				  ?>"><a href="contact.php" class="nav-link">Contact</a></li>
				   <?php
        if(!isset($_SESSION['user_name']))
        {
	        	?>
	         	<a href="registration.php"><button>Become a Patron</button></a>  
	        <?php
    		 }
        else if(isset($_SESSION['user_name']))
        {
	        	?>
	        	<a href="profile.php"><button>Hey! <?=$_SESSION['user_name']?></button></a>  
	       <?php 
    		}
       
    ?>  
				  
               </ul>
	 </div>
      </div>
      </nav>       
