<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>foodei-blog</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
</head>
<body>
<?php require_once("nav.php")?>


<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/55.jpg" height="500px" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="images/88.jpg" height="500px" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="images/44.jpg" height="500px" class="d-block w-100 alt="...">
    </div>
    <div class="carousel-item">
      <img src="images/00.jpg" height="500px" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>








<div class="container mt-5 mb-5" id="our_meun">
<center>
<h2 style="color:blue">Categoires</h2>
<hr style="width:100px; height:4px;color:blue" class="mb-3">
<br>






<div class="row mt-5">
    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
      <div class="card shadow-lg border border-warning" style="width: 18rem;" >
        <img src="images/yu.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="p-1 text-center rounded" style="background-color:purple; color:white">veegi</h5>
          
        </div>
      </div>
    </div>

    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
      <div class="card shadow-lg border border-info" style="width: 18rem;">
        <img src="images/df.jpg" class="card-img-top" alt="...">
        <div class="card-body ">
          <h5 class="p-1 text-center rounded" style="background-color:purple; color:white">desi_food</h5>
          
        </div>
      </div>
    </div>


    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
      <div class="card shadow-lg border border-warning" style="width: 18rem;">
        <img src="images/as.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="p-1 text-center rounded" style="background-color:purple; color:white">fast_food</h5>
          
        </div>
      </div>
    </div>
  </div>
  </center>
</div>


<div class="container mt-5 mb-5" id="our_meun">
<center>
<h2 style="color:blue">Posts</h2>
<hr style="width:100px; height:4px;color:blue" class="mb-3">
<br>




<div class="row mt-5">
    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
      <div class="card shadow-lg border border-warning" style="width: 18rem;" >
        <img src="images/ft.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="p-1 text-center rounded" style="background-color:purple; color:white">PHP - BASIC</h5>
          <p class="card-text">This hands-on course provides the knowledge necessary to design and develop dynamic, database-driven web pages using PHP</p>
        </div>
      </div>
    </div>

    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
      <div class="card shadow-lg border border-info" style="width: 18rem;">
        <img src="images/vg.jpg" class="card-img-top" alt="...">
        <div class="card-body ">
          <h5 class="p-1 text-center rounded" style="background-color:purple; color:white">PHP - ADVANCE</h5>
          <p class="card-text">This hands-on course provides the knowledge necessary to design and develop dynamic, database-driven web pages using PHP</p>
        </div>
      </div>
    </div>


    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
      <div class="card shadow-lg border border-warning" style="width: 18rem;">
        <img src="images/ds.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="p-1 text-center rounded" style="background-color:purple; color:white">REACT JS</h5>
          <p class="card-text">This hands-on course provides the knowledge necessary to design and develop dynamic, database-driven web pages using PHP</p>
        </div>
      </div>
    </div>
  </div>
  </center>
</div>








<div class="container mt-5 mb-5" id="contact_us">
  <h2 style="background-color:purple" class="p-2 text-white text-center">FEEDBACK</h2>
  <form method="post"action="insert1.php">
  <div class="row">
    <div class="col-lg-2"></div>
    <div class="col-lg-4 mt-5">
      <img src="images/fd.png" width="400px" height="400px">
    </div>
    <div class="col-lg-4 mt-5">
      <div class="mb-3">
         <label for="user_name" class=" form-label">user_name</label>
        <input type="text"  name="user_name"  class="form-control" placeholder="Enter user_name ">
      </div>
      <div class="mb-3">
        <label for="email" class="form-label">email</label>
        <input type="email" name="user_email"class="form-control"  placeholder="Enter user_email">
      </div>

      <div class="mb-3">
        <label for="feedback" class="form-label">feedback</label>
        <input type="text" name="feedback" class="form-control"  placeholder="Enter feedback">
      </div>
      

      <div class="mb-3">
      
        <input type="submit" name="submit" value="add">
      </div>
    </div>
    <div class="col-lg-2"></div>
  </div>
</div>





<div class="container-fluid">
  <div class="row" style="background-color:purple;">
    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 p-3">
      <h6 class="text-white text-center">Foodei_blog</h6>
      <center>
        <hr class="text-white">
      <img src="images/oo.jpg" width="150px" height="150px">
    </center>
    </div>
    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 p-3 text-white ">
      <h6> Links</h6>
      <hr>
      <li>About Us</li>
      <li>Contact Us</li>
      <li>foodri_blog</li>
      
    </div>
    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 p-3 text-white">
      <h6>HOW WE WORK</h6>
      <hr>
      <p class="p-1">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
      tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
      quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
      consequat</p>
    </div>
  </div>
  <div class="row">
    <div class="col-sm-12 col-lg-12 col-xs-12 col-md-12 bg-dark text-white p-2 text-center">
      <i class="fa fa-copyright text-white"></i> Copy Right FOODEI_BLOG 2022
    </div>
  </div>
</div>




<script type="text/javascript" src="bootstrap/js/bootstrap.bundle.min.js"></script>
<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
</body>
</html>
































