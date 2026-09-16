<?php 

	require_once("require/connection.php");




use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';
require 'PHPMailer/src/Exception.php';

	if(isset($_POST['register']))
{   
	    $role_id =  2;
		$first_name =  $_REQUEST['first_name'];
        $last_name = $_REQUEST['last_name'];
        $email =  $_REQUEST['email'];
        $password = $_REQUEST['password'];
        $gender = $_REQUEST['gender'];
        $date_of_birth = $_REQUEST['Date-of-birth'];
        $address = $_REQUEST['address'];
        $query = "Insert INTO user(role_id,first_name,last_name,email,password,gender,date_of_birth,address) values('".$role_id."','".$first_name."','".$last_name."','".$email."','".$password."','".$gender."','".$date_of_birth."','".$address."')";
		
	$result = mysqli_query($connection,$query);

	if($result)
	{
		
		$mail = new PHPMailer();
//Tell PHPMailer to use SMTP
$mail->isSMTP();
//Enable SMTP debugging
// SMTP::DEBUG_OFF = off (for production use)
// SMTP::DEBUG_CLIENT = client messages
// SMTP::DEBUG_SERVER = client and server messages
//$mail->SMTPDebug = SMTP::DEBUG_SERVER;
//Set the hostname of the mail server
$mail->Host = 'smtp.gmail.com';
// use
// $mail->Host = gethostbyname('smtp.gmail.com');
// if your network does not support SMTP over IPv6
//Set the SMTP port number - 587 for authenticated TLS, a.k.a. RFC4409 SMTP submission
$mail->Port = 587;
//Set the encryption mechanism to use - STARTTLS or SMTPS
$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
//Whether to use SMTP authentication
$mail->SMTPAuth = true;
//Username to use for SMTP authentication - use full email address for gmail
$mail->Username = 'dd889804@gmail.com';
//Password to use for SMTP authentication
$mail->Password = 'Qwer@123456';
//Set who the message is to be sent from
// $mail->setFrom('phpbasic2k22@gmail.com', 'Php Basic');
$mail->setFrom('dd889804@gmail.com');

//Set an alternative reply-to address
//$mail->addReplyTo('hidayatrust1788@gmail.com', 'Hidaya Trust');
//Set who the message is to be sent to
$mail->addAddress('dd889804@gmail.com', "Reciever");
$mail->addCC('enter-your-id@gmail.com','ABC');
$mail->addCC('enter-your-id@gmail.com','S');

$mail->addBCC('enter-your-id@gmail.com');


//Set the subject line
$mail->Subject = 'test';
//Read an HTML message body
//$mail->isHTML();
//$mail->msgHTML("This Is Testing Message Using PhpMailer");
$mail->msgHTML("<h1>Hi</h1>");

//Attach an image file (optional)
$mail->addAttachment('image1.jpg',"My Image");
//send the message, check for errors
if (!$mail->send()) {
    echo 'Mailer Error: ' . $mail->ErrorInfo;
}	header("location:login.php?msg=Account Has Been Registered&color=green");
		

			
	}else
	{
		header("location:register.php?msg=Account Has Not Been Registered&color=red");
	}

}		



?>


