<?php
	$hostname='localhost';
	$username='root';
	$password='';
	$dbname='hotelbangla';

	$con=mysqli_connect($hostname,$username,$password) or die('Database Connection Error');
	mysqli_select_db($con,$dbname);

	session_start();

		$id=$_SESSION['id2'];
		$pass=$_SESSION['pass2'];
		$status=$_SESSION['status2'];
		$fname=$_SESSION['fname2'];
		$lname=$_SESSION['lname2'];
		$gen=$_SESSION['gender2'];
		$add=$_SESSION['address2'];
		$email=$_SESSION['email2'];
		$num=$_SESSION['number2'];

		$sql="insert into user(userId,firstName,lastName,gender,address,email,phone) 
			Values('$id','$fname','$lname',' $gen','$add','$email','$num')" ;
		$result=mysqli_query($con,$sql);
		$sql2="insert into login(status,id,password) 
			Values('$status','$id','$pass')" ;
		$result2=mysqli_query($con,$sql2);
		if($result && $result2)
			{
				echo"Insert Successfully into Database";
			}
		else
			{
				echo"Insert faild into Database";
			}
		
?>

<html>
	<head>
			<title>Database Connection</title>
	</head>

	<body>
		<br>
		<a href="showUser.php">
			<font size="6" style="background-color: dodgerblue; color:white;"
					>Show User</font
				></b>
			</a><br>
			<a href="employee.php">
					<font size="6" style="background-color: dodgerblue; color:white;"
							>Back to Employee</font
						></b>
			</a>
	</body>
</html>