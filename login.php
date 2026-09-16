<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>foodie_blog</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
</head>
<body>
<?php require_once("nav.php") ?>





<hr />
    <?php 
      require_once("session.php");
      if(isset($_GET['msg']))
      {
        ?>
          <h4 style="color:<?php echo $_GET['color']; ?>">
            <?php echo $_GET['msg']; ?>
          </h4>
        <?php
      }
    ?>


<div class="container mt-5 mb-5">
  <h3 style="color:purple;">LOGIN HERE</h3>
  <hr>
  <div class="row">
    <div class="col-md-3"></div>
    <center>
      <div class=" col-md-6 p-3 shadow-lg border border-primary" >
        <form action="login1_process.php" method="POST">
          <div class="mb-3 row mt-5">
            <div class="col-md-3">
              <label for="Email" class="col-form-label">Email</label>
            </div>
            <div class="col-md-9">
              <input type="email" name="email" required style="width:70%" placeholder="Enter email">
                
            </div>
          </div>
          <div class="mb-3 row">
            <div class="col-md-3"><label for="Password" class=" col-form-label">Password</label>
            </div>
            
            <div class="col-md-9">
              <input type="password" name="password" required style="width:70%" placeholder="Enter password">
            </div>
          </div>
          <!-- <div> -->
          <div class="col-sm-10" >
            <input type="submit" name="login" class="btn btn-primary"value="login" style="width: 10rem;">
          </div> 
        </form>
        <p>Don't HAVE  AN ACCOUNT</p>
        <a href="register.php">Register HERE...</a>
      </div>
      </div>
    </center>  
    <div class="col-sm-3"></div>
  </div>

    

</div>
<!-- </div> -->


<div class="container-fluid">
  <div class="row" style="background-color:purple;">
    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 p-3">
      <h6 class="text-white text-center">foodies</h6>
      <center>
        <hr class="text-white">
      <img src="images/oo.jpg" width="150px" height="150px">
    </center>
    </div>
    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 p-3 text-white ">
      <h6>Quick Links</h6>
      <hr>
      <li>About Us</li>
      <li>Contact Us</li>
      <li>foodie_blog</li>
      
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
      <i class="fa fa-copyright text-white"></i> Copy Right foodie_blog 2022
    </div>
  </div>
</div>

<script type="text/javascript" src="bootstrap/js/bootstrap.bundle.min.js"></script>
<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
</body>
</html>