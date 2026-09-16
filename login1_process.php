<?php 
	session_start();

	require_once("require/connection.php");
	
	if(isset($_POST['login']))
	{
		//print_r($_POST);
		extract($_POST);

		$query = "SELECT * FROM `user` WHERE `user`.`email` = ? AND `user`.`password` = ?";

		$stmt = mysqli_prepare($connection,$query);

		mysqli_stmt_bind_param($stmt,"ss",$email,$password);
		mysqli_stmt_execute($stmt);

		echo $user_id;
		
		
		$data = mysqli_stmt_get_result($stmt);
		if($data->num_rows > 0)
		{

			$user_data = mysqli_fetch_assoc($data);
			$_SESSION['user'] = $user_data;
			if($_SESSION['user']['role_id'] ==  1)
			{
				header("location:admin/admindis.php");
			}
			
			else if($_SESSION['user']['role_id'] ==  2)
			{
				header("location:user/userdis.php");
			}

		}
		else
		{

			header("location:login.php?msg=Login Failed!...&color=red");

		}






	}

?>