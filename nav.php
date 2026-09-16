



<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php"><img src="images/oo.jpg" height="40px"> foodei-blog</a>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarText">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        
        
   <!--     <li class="nav-item">
           <a class="nav-link active" aria-current="page" href="aboutus.php">About Us</a>
        </li>
        
        <li class="nav-item">
           <a class="nav-link active" aria-current="page" href="Contact.php">Contact Us</a>
        </li>

         <li class="nav-item">
 <a class="nav-link active" aria-current="page" href="blog.php">foodei-blog</a>




        </li>-->




      
        

       
      </ul>
      <span class="navbar-text">
        <?php 
if(isset($_SESSION['user']['email'])){
  ?>

  <a href="logout.php" style="text-decoration:none;">
        <i class='fas fa-user-alt' style="color:white"></i> Logout&nbsp;
        </a>
        <?php

}
else{


        ?>
        <a href="login.php" style="text-decoration:none;">
        <i class='fas fa-user-alt' style="color:white"></i> Login&nbsp;
        </a>
        <?php

      }
      ?>
        
        
         |
        <a href="register.php" style="text-decoration:none;"> 
        <i class='fas fa-user-plus' style="color:white"></i> Register
        </a>
      </span>
      
    </div>
  </div>
</nav>