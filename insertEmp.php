<?php
	$hostname='localhost';
	$username='root';
	$password='';
	$dbname='hotelbangla';

	$con=mysqli_connect($hostname,$username,$password) or die('Database Connection Error');
	mysqli_select_db($con,$dbname);

	session_start();

		$id=$_SESSION['id'];
		$pass=$_SESSION['pass'];
		$status=$_SESSION['status'];
		$fname=$_SESSION['fname'];
		$lname=$_SESSION['lname'];
		$gen=$_SESSION['gender'];
		$add=$_SESSION['address'];
		$email=$_SESSION['email'];
		$num=$_SESSION['number'];
		$salary=$_SESSION['salary'];

		$sql="insert into emp(empId,firstName,lastName,gender,address,email,phone,salary) 
			Values('$id','$fname','$lname',' $gen','$add','$email','$num','$salary')" ;
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
		<a href="showEmp.php">
			<font size="6" style="background-color: dodgerblue; color:white;"
					>Show Employee</font
				></b>
			</a><br>
			<a href="admin.php">
					<font size="6" style="background-color: dodgerblue; color:white;"
							>Back to Admin</font
						></b>
			</a>
	</body>
</html>