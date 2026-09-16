<?php
session_start();
require_once('require/database.php');
$query = "UPDATE user SET status='Inactive' WHERE user_role_type_id = '2' AND user_id=".$_SESSION['user']['user_id'];
mysqli_query($conn,$query);
session_destroy();
header('location:login.php');

?>