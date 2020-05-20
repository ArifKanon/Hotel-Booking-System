<?php 

session_start();

if(isset($_POST['con_submit'])){
	$name = htmlentities($_POST['name']);
	$email = htmlentities($_POST['email']);
	$message  = htmlentities($_POST['message']);



	if($name && $email && $message){
		$_SESSION['S_message'] = 'Message Sent';
		header('location:../views/home.php#footer');
	}
	else{
		$_SESSION['S_message'] = 'Message Faild';
		header('location:../views/home.php#footer');
	}
}




 ?>