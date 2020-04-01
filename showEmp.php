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
		<title></title>
	</head>
	<body>
		<center>
		<h1>All Employee Details</h1> 	
		<table border="2" width="600">
			<tr>
				<th>UserId</th>
				<th>FirstName</th>
				<th>LastName</th>	
				<th>Gender</th>
				<th>Address</th>
				<th>Email</th>
				<th>Phone</th>
				<th>Salary</th>
				<th>Update</th>
				<th>Delete</th>
			</tr> 
			<?php
					$hostname='localhost';
					$username='root';
					$password='';
					$dbname='hotelbangla';

					$con=mysqli_connect($hostname,$username,$password) or die('Database Connection Error');
					mysqli_select_db($con,$dbname);
				

				$run=mysqli_query($con,"Select * from emp");
				while($row=mysqli_fetch_array($run))
				{
					$showid=$row[0];
					$showfname=$row[1];
					$showlname=$row[2];
					$showgen=$row[3];
					$showadd=$row[4];
					$showemail=$row[5];
					$shownum=$row[6];
					$showsalary=$row[7];
					echo "<tr>
								<td>$showid</td>
								<td>$showfname</td>
								<td>$showlname</td>
								<td>$showgen</td>
								<td>$showadd</td>
								<td>$showemail</td>
								<td>$shownum</td>
								<td>$showsalary</td>
								<td>Update</td>
								<td>Delete</td>
						</tr>";
				}
			?>
				
		</table>
			</a><br>
			<a href="admin.php">
					<font size="6" style="background-color: dodgerblue; color:white;"
							>Back to Admin</font
						></b>
			</a><br><br>
		<form action="" method="post">
			<input type="submit" value="Log Out" name="submit">
		</form>

	</body>
</html>