<?php
	session_start();
	if(isset($_POST['submit']))
	{	
		session_destroy();
		session_start();
		$_SESSION['active'] = false;
		$_SESSION['check'] = false;
		header("Location:home.php");
	}

	require_once "../models/database.php";
	$conn = mysqli_connect($serverName,$userName,$password,$dbName) or die('Database Connection Error');

	$run2=mysqli_query($conn,"Select * from user");
	$row_num2 = mysqli_num_rows($run2);
	$userNum = 0;	
	if($row_num2 > 0)
	{
		while(mysqli_fetch_assoc($run2))
		{
			$userNum++;
		}		
	}

	$run3=mysqli_query($conn,"Select * from booking");
	$row_num3 = mysqli_num_rows($run3);
	$resNum = 0;	
	if($row_num3 > 0)
	{
		while($row = mysqli_fetch_assoc($run3))
		{
			$resNum++;
		}		
	}
?>

<html>
	<head>
		<title>Employee</title>
	</head>

	<body style="background-color:DarkCyan">
		<table>
			<tr>
				<td style="text-align:left; width:1000px;">
					<font size="7" style="background-color: teal; color: whitesmoke;"
						>Hotel Bangla</font
					>
				</td>
				<td style="text-align: right;">
					<form action="" method="post">
						<input type="submit" value="Log Out" name="submit">
					</form>
				</td>
			</tr>
		</table>

		<br /><br />
		<table align="center">
			<tr>
				<td style="text-align:left; width:500px; color:white">
					<font size="6">
						<big>
						Total User: <?php echo $userNum;?><br>
						Total Reservation: <?php echo $resNum;?>
						</big>
					</font>
				</td>
				<td style="text-align:center">
					<img src="../images/design/user_icon.JPG" height="250" width="250" /><br /><b>
					<a href="showUser.php">
						<font size="6" style="background-color:dodgerblue; color:white;">Manage User</font></b>
					</a>
					<br />
					<a href="home.php">
						<font size="5" style="background-color:tomato; color: whitesmoke;">Book Hotel</font>
					</a>
				</td>
			</tr>
		</table>
	</body>
</html>
