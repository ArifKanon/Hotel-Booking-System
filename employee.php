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
		<title>Employee</title>
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
					<img src="user.JPG" height="250" width="250" /><br /><b>
					<a href="showUser.php">
						<font size="6" style="background-color:dodgerblue"
								>Manage User</font
							></b
						>
					</a>
				</td>
			</tr>
			<tr>
				<td>
					<a href="sign_up.php">
						<font size="5" style="background-color:tomato; color: whitesmoke;">Add User</font>
					</a>
					<br />
					<a href="home.php">
						<font size="5" style="background-color:tomato; color: whitesmoke;">Book Hotel</font>
					</a>
					<br />
				</td>
			</tr>
		</table>
	</body>
</html>
