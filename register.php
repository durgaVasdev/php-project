

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


    



          <script>
          function form_validation(){
            var is_validate = true;
                // Input Fields Data
            var first_name = document.getElementById("first_name").value;
            var last_name = document.getElementById("last_name").value;
            var email = document.getElementById("email").value;
            var address = document.getElementById("address").value;
            var password = document.getElementById("password").value;
            


            // Input Fields Patterns

            var alphabets_pattern = /^[a-z]{3,15}$/i;
            var email_pattern = new RegExp(/^[a-z0-9]{3,15}@[a-z]{5,10}\.(com|org)$/i);
            var address_pattern = /^[\w\W]{10,100}$/;
            var password_pattern= /^[0-9a-zA-Z]+[@]$/;
      


              if(first_name == ""){
                is_validate = false;
                document.getElementById("first_name_msg").innerHTML  = "Please Enter First Name";
              }
              else{
                document.getElementById("first_name_msg").innerHTML = "";
                if(!alphabets_pattern.test(first_name)){
                  is_validate = false;
                  document.getElementById("first_name_msg").innerHTML  = "First Name Should Contain only Alphabets range[3-15]";
                }
              }
              if(last_name != ""){
                if(!alphabets_pattern.test(last_name)){
                  is_validate = false;
                  document.getElementById("last_name_msg").innerHTML  = "Last Name Should Contain only Alphabets range[3-15]";
                }
                else{
                  document.getElementById("last_name_msg").innerHTML  = "";
                }
              }
              if(email == ""){
                is_validate = false;
                document.getElementById("email_msg").innerHTML  = "Please Enter Email";
              }
              else{
                document.getElementById("email_msg").innerHTML = "";
                if(!email_pattern.test(email)){
                  is_validate = false;
                  document.getElementById("email_msg").innerHTML  = "Email Should Be Like: abc@gmail.com";
                }
              }
              if(address == ""){
                is_validate = false;
                document.getElementById("address_msg").innerHTML  = "Please Enter Address";
              }
              else{
                document.getElementById("address_msg").innerHTML = "";
                if(!address_pattern.test(address)){
                  is_validate = false;
                  document.getElementById("address_msg").innerHTML  = "Address Length Min:10 Max:100";
                }
              }

                 if(password == ""){
                is_validate = false;
                document.getElementById("password_msg").innerHTML  = "Please Enter password";
              }
              else{
                document.getElementById("password_msg").innerHTML = "";
                if(!password_pattern.test(password)){
                  is_validate = false;
                  document.getElementById("password_msg").innerHTML  = "pasword like 12abc@";
                }
              }
              if(is_validate){
              return true;
            }
            else{
              return false;
            }
          }

          </script>
</head>
<body>
  <?php
  

    require_once("require/connection.php");
    $query = "SELECT * FROM `role` WHERE `role`.`role_id` <> 1";
    $result = mysqli_query($connection,$query);
  ?>

<br><br>

 <div class="container" style="margin-top: 30px;">
  <form action="register-process.php" method="POST" onsubmit="return form_validation()">
 <!---heading---->
     <header class="heading" > Registration-Form</header><hr></hr>
  <!---Form starting----> 
  <div class="row ">
   <!--- For Name---->
         <div class="col-sm-12">
             <div class="row">
           <div class="col-xs-4">
                     <label class="firstname">First Name :</label> </div>
             <div class="col-xs-8">
                 <input type="text" name="first_name" id="first_name" placeholder="Enter your First Name" class="form-control ">
                 <td><span id="first_name_msg"></span></td>
             </div>
          </div>
     </div>
     
     
         <div class="col-sm-12">
         <div class="row">
           <div class="col-xs-4">
                     <label class="lastname">Last Name :</label></div>
        <div class ="col-xs-8">  
                 <input type="text" name="last_name" id="last_name" placeholder="Enter your Last Name" class="form-control last">
                 <td><span id="last_name_msg"></span></td>
                </div>
         </div>
     </div>
     <!-----For email---->
     <div class="col-sm-12">
         <div class="row">
           <div class="col-xs-4">
                 <label class="mail" >Email :</label></div>
           <div class="col-xs-8"  >  
                <input type="email" name="email"  id="email"placeholder="Enter your email" class="form-control" >
                <td><span id="email_msg"></span></td>
             </div>
         </div>
     </div>
     <!-----For date-of-birth---->
     

   <!-----For Password and confirm password---->
          <div class="col-sm-12">
             <div class="row">
             <div class="col-xs-4">
                    <label class="pass">Password :</label></div>
          <div class="col-xs-8">
                   <input type="password" name="password" id="password" placeholder="Enter your Password" class="form-control"><td><span id="password_msg"></span></td>
         </div>
          </div>
      </div>
      
     <!-----------gender-------->
         <div class="col-sm-12">
         <div class ="row">
                 <div class="col-xs-4 ">
             <label class="gender">Gender:</label>
         </div>
       
           <div class="col-xs-4 male">   
             <input type="radio" name="gender"  id="gender" value="male">Male</input>
         </div>
         
         <div class="col-xs-4 female">
             <input type="radio"  name="gender" id="gender" value="female" >Female</input>
           </div>
      
         </div>
         <!-----For date-of-birth---->
         <div class="col-sm-12">
         <div class="row">
           <div class="col-xs-4">
                 <label class="date-of-birth" > Date of birth :</label></div>
           <div class="col-xs-8"  >  
                <input type="Date" name="Date-of-birth"  id="date-of-birth" placeholder="Enter your birthday" class="form-control" >
             </div>
         </div>
     </div>
     <!-----adress---->
         
     
      
     <div class="col-sm-12">
         <div class="row">
           <div class="col-xs-4">
                 <label class="mail" > Address :</label></div>
           <div class="col-xs-8"  >  
                <input type="text" name="address"  id="address"placeholder="Enter your adress" class="form-control" >
                <td><span id="address_msg"></span></td>
             </div>
         </div>
     </div>
         <div class= "col-sm-12">
             <tr>
            <th></th>
            <td>
              <input type="submit" name="register" value="Register" style="width:30%">
            </td>
          </tr>
       </div>
     </div>
   </div>  
         
     
</div>
</form>


<br><br>

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


</body>   
</html>
   
   
























