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

	$run=mysqli_query($conn,"Select * from emp");
	$row_num = mysqli_num_rows($run);
	$empNum = 0;	
	if($row_num > 0)
	{
		while(mysqli_fetch_assoc($run))
		{
			$empNum++;
		}		
	}

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
		<title>Admin</title>
		<link rel="stylesheet" href="admin.css">
	</head>
	<?php require_once 'header.php' ?>
	<body>
		<!-- <table>
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
		</table> -->

		<!-- <br /><br />
		<table align="center">
			
			<tr>
				<td style="text-align:left; width:500px; color:whitesmoke">
					<font size="6">
						<big>
						Total Employee: <?php echo $empNum;?><br>
						Total User: <?php echo $userNum;?><br>
						Total Reservation: <?php echo $resNum;?>
						</big>
					</font>
				</td>
				<td>
					<img src="../images/design/emp_icon.jpg" height="250" width="250" /><br /><b>
					<a href="showEmp.php">
					<font size="6" style="background-color: dodgerblue; color:white"
							>Manage Employee</font
						></b>
					</a><br>
				</td>
			</tr>
		</table> -->
		<div class="overview">
			<div class="card">
				<big>
				Total Employee: <?php echo $empNum;?><br>
				Total User: <?php echo $userNum;?><br>
				Total Reservation: <?php echo $resNum;?>
				</big>
			</div>
			<div class="card">
				<div style="display: flex;">
					<div class="img">
					<img src="../images/design/emp_icon.jpg" />
					</div>
					<a href="showEmp.php">Manage Employee</a>
				</div>
					<!-- <a href="showEmp.php">
					<font size="6" style="background-color: dodgerblue; color:white"
							>Manage Employee</font
						></b>
					</a><br> -->
			</div>
		</div>
	</body>
</html>
