<?php 
session_start();

if(isset($_SESSION['user']['role_id']) && $_SESSION['user']['role_id'] ==  1)
{
	header("location:admin/admindis.php");
}

else if(isset($_SESSION['user']['role_id']) && $_SESSION['user']['role_id'] ==  2)
{
	header("location:user/userdis.php");
}
?>