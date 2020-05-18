<?php
	require_once "../controllers/control_employee.php";

	if(isset($_POST['submit']))
	{	
		session_destroy();
		header("Location:home.php");
	}
	if(isset($_SESSION['message']))
        {
            echo $_SESSION['message'];
            unset($_SESSION['message']); // Destroys the speccified variables
        }
?>

<html>
	<head>
		<title>Employee Info</title>
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
				<th>Edit</th>
				<th>Delete</th>
			</tr> 

			<?php			

				$run=mysqli_query($conn,"Select * from emp");
				$row_num = mysqli_num_rows($run);

			
				if($row_num > 0)
				{
					while($row = mysqli_fetch_assoc($run)): ?>
						<tr>
							<td><?php echo $row['empId']; ?></td>
							<td><?php echo $row['firstName']; ?></td>
							<td><?php echo $row['lastName']; ?></td>
							<td><?php echo $row['gender']; ?></td>
							<td><?php echo $row['address']; ?></td>
							<td><?php echo $row['email']; ?></td>
							<td><?php echo $row['phone']; ?></td>
							<td><?php echo $row['salary']; ?></td>
							<td><a href="showEmp.php?edit=<?php echo $row['empId']; ?>"><button>Edit</button></a></td>
							<td><a href="../controllers/control_employee.php?delete=<?php echo $row['empId']; ?>"><button>Delete</button></a></td>
						</tr>
					
					<?php endwhile;
				}
				echo "</table>"."<br>"."<br>";
        
       		 ?>

	<form action="../controllers/control_employee.php" method="POST">
            <table>
                <tr>
                    <td>Id:</td>
                    <td><input type="text" name="id" value='<?php echo $id; ?>'></td>
                </tr>
                <tr>
                    <td>First Name:</td>
                    <td><input type="text" name="fname" value="<?php echo $fname; ?>" ></td>
                </tr>
                <tr>
                    <td>Last Name:</td>
                    <td><input type="text" name="lname" value="<?php echo $lname; ?>"></td>
                </tr>
                <tr>
                    <td>Gender:</td>
					<td>
						<input type="radio" name="gender" value="Male" <?php if($gender == "Male"){echo "Checked";}?>> Male
						<input type="radio" name="gender" value="Female" <?php if($gender == "Female"){echo "Checked";}?>> Female
					</td>
                </tr>
                <tr>
                    <td>Address:</td>
                    <td><input type="text" name="address" value='<?php echo $address; ?>'></td>
                </tr>
                <tr>
                    <td>Email:</td>
                    <td><input type="text" name="email" value="<?php echo $email; ?>" ></td>
                </tr>
                <tr>
                    <td>Phone:</td>
                    <td><input type="text" name="phone" value="<?php echo $phone; ?>"></td>
                </tr>
                <tr>
                    <td>Salary:</td>
                    <td><input type="text" name="salary" value="<?php echo $salary; ?>" ></td>
                </tr>
				<tr>
					<td>Password:</td>
					<td><input type="password" name="pass" value="<?php echo $pass; ?>" ></td>
				</tr>
				
				<?php	
					if($update == true)
						echo '<tr>
								<td><button type="submit" name="update">Update</button></td>
								<td><button type="submit" name="refresh">Refresh</button></td>
							</tr>';
					else
						echo '<tr><td><button type="submit" name="save">Add</button></td></tr>';
                ?>
            </table>
        </form>		
		
		
		</table>
			</a><br>
			<a href="admin_home.php">
					<font size="6" style="background-color: dodgerblue; color:white;"
							>Back to Admin</font
						></b>
			</a><br><br>
		<form action="" method="post">
			<input type="submit" value="Log Out" name="submit">
		</form>

	</body>
</html>