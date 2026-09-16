    <?php



        require_once("require/connection.php");

            $user_name=$_POST['user_name'];

                $user_email=$_POST['user_email']; 

                   $feedback=$_POST['feedback']; 





                     $query="INSERT INTO user_feedback (user_name,user_email,feedback)VALUES('".$_REQUEST['user_name']."','".$_REQUEST['user_email']."','".$_REQUEST['feedback']."')";

                     $result= mysqli_query($connection,$query);



            header("location:index.php");   
                 

             ?>