<?php
	require_once "../models/database.php";

	$conn = mysqli_connect($serverName,$userName,$password,$dbName) or die('Database Connection Error');

	session_start();

		$id=$_SESSION['id2'];
		$pass=$_SESSION['pass2'];
		$fname=$_SESSION['fname2'];
		$lname=$_SESSION['lname2'];
		$gen=$_SESSION['gender2'];
		$add=$_SESSION['address2'];
		$email=$_SESSION['email2'];
		$num=$_SESSION['number2'];

		$sql="insert into user(userId,firstName,lastName,gender,address,email,phone) 
			Values('$id','$fname','$lname',' $gen','$add','$email','$num')" ;
		$result=mysqli_query($conn,$sql);
		$sql2="insert into login(status,id,password) 
			Values('2','$id','$pass')" ;
		$result2=mysqli_query($conn,$sql2);


		if($result && $result2)
		{
			//echo"Insert Successfully into Database";
			$_SESSION['active'] = true;
			$_SESSION['b_uId'] = $id;
			if($_SESSION['check'] == true)
			{
				$_SESSION['check'] = false;
				header("Location:../views/reserve_complete.php");
			}
			else
				header("Location:../views/user_home.php");
		}
		else
		{
			echo"Insert faild into Database";
		}
		
?>
