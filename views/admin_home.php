<?php
	session_start();
	if(isset($_POST['submit']))
	{	
		session_destroy();
		header("Location:home.php");
	}
?>

<html>
	<head>
		<title>Admin</title>
	</head>

	<body style="background-color:lightslategray">
		<table>
			<tr>
				<td style="text-align:left; width:600px;">
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
				<td>
					<img src="../images/design/emp_icon.jpg" height="250" width="250" /><br /><b>
					<a href="showEmp.php">
					<font size="6" style="background-color: dodgerblue; color:white"
							>Manage Employee</font
						></b>
					</a><br>
				</td>
			</tr>
		</table>
	</body>
</html>
