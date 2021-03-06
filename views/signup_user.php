<?php
		$fname="";
		$fnameErr="";
		$lname="";
		$lnameErr="";
		$gen="";
		$genErr="";
		$add="";
		$addErr="";
		$email="";
		$emailErr="";
		$num="";
		$numErr="";
		$id="";
		$idErr="";
		$pass="";
		$passErr="";
		$confPass="";
		$confPassErr="";
		$key = true;

		session_start();
		if(isset($_POST['submit']))
		{
			
			if(empty($_POST['fname']))
			{
				$fnameErr="*First Name Required";
				$key = false;
			}
			else
			{			
				$fname=htmlspecialchars($_POST['fname']);
				if (!preg_match("/^[a-zA-Z ]*$/",$fname))
				{
					$fnameErr = "Only letters and white space allowed!";
					$key = false;
				}
			}
			if(empty($_POST['lname']))
			{
				$lnameErr="*Last Name Required";
				$key = false;
			}
			else
			{			
				$lname=htmlspecialchars($_POST['lname']);
				if (!preg_match("/^[a-zA-Z ]*$/",$lname)) {
					$lnameErr = "Only letters and white space allowed!";
					$key = false;
				}
			}
			if (empty($_POST['gender']))
			{
				$genErr="*Gender Required";
				$key = false;
			}
			else
			{
				$gen=$_POST['gender'];
			}
			if (empty($_POST['address']))
			{
				$addErr="*Address Required";
				$key = false;
			}
			else
			{
				$add=htmlspecialchars($_POST['address']);
			}
			if (empty($_POST['email']))
			{
				$emailErr="*Email Required";
				$key = false;
			}
			else
			{
				$email = test_input($_POST["email"]);
				if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
				$emailErr = "Invalid email format";
    			}
			}
			if(empty($_POST['number']))
			{
				$numErr="*Number Required";
				$key = false;
			}
			else
			{			
				$num= test_input($_POST["number"]);
				if (!preg_match("/^[0-9]*$/",$num)) {
					$numErr = "Only numbers are allowed!";
					$key = false;
				  }
			}

			if (empty($_POST['id']))
			{
				$idErr="*Id Required";
				$key = false;
			}
			else
			{
				$id=htmlspecialchars($_POST['id']);
				if (!preg_match("/^[0-9-]*$/",$id)) {
					$idErr = "Only numbers and hyphens are allowed!";
					$key = false;
				}
			}

			if (empty($_POST['pass']))
			{
				$passErr="*Password Required";
				$key = false;
			}
			else
			{
				$pass=htmlspecialchars($_POST['pass']);
			}
			/*if (empty($_POST['confPass']))
			{
				$confPassErr="*Confirm Password Required";
				$key = false;
			}
			else
			{
				$confPass=htmlspecialchars($_POST['confPass']);
				if($pass == $confPass)
				{
					$confPassErr = "Password Doesn't Match!";
					$key = false;
				}
			}*/

			if($key == true)
			{
				$_SESSION['id2'] = $id;
				$_SESSION['pass2'] = $pass;
				$_SESSION['fname2'] = $fname;
				$_SESSION['lname2'] = $lname;
				$_SESSION['gender2'] = $gen;
				$_SESSION['address2'] = $add;
				$_SESSION['email2'] = $email;
				$_SESSION['number2'] = $num;
				header("Location:../controllers/insertUser.php");
			}
		}
		

		function test_input($data) 
		{
			$data = trim($data);
			$data = stripslashes($data);
			$data = htmlspecialchars($data);
			return $data;
		}
	?>

<html>
	<head>
		<link rel="stylesheet" href="form.css">
	</head>
	<body>
	<div class="container">
	<h1>Sign Up</h1>
		<form method="post" action="">
			<table align="center">
				<tr>
					<td>First Name:</td>
					<td><input type="text" value="<?php echo $fname;?>" name="fname" >
						<br><span style="color:red"><?php echo $fnameErr;?></span></td> 
					
				</tr>
				<tr>
					<td>Last Name:</td>
					<td><input type="text" value="<?php echo $lname;?>" name="lname" >
						<br><span style="color:red"><?php echo $lnameErr;?></span></td> 
					
				</tr>
				<tr>
					<td>Gender: </td>
					<td>
						<input type="radio" name="gender" value="Male" <?php if($gen == "Male"){echo "Checked";}?>> Male
						<input type="radio" name="gender" value="Female" <?php if($gen == "Female"){echo "Checked";}?>> Female
						<br><span style="color:red"><?php echo $genErr; ?></span>
					</td>
				</tr>
				<tr>
					<td>Address:</td>
					<td>
						<input type="text" name="address" value="<?php echo $add;?>">
						<br><span style="color:red"><?php echo $addErr;?></span>
					</td>
				</tr>
				<tr>
					<td>E-mail:</td>
					<td>
						<input type="text" name="email" placeholder="abc@aiub.com" value="<?php echo $email;?>">
						<br><span style="color:red"><?php echo $emailErr;?></span>
					</td>
				</tr>
				<tr>
					<td>Phone Number:</td>
					<td>
						<input type="text" name="number" placeholder="01521234567" value="<?php echo $num;?>">
						<br><span style="color:red"><?php echo $numErr;?></span>
					</td>
				</tr>

				<tr>
					<td>Id:</td>
					<td>
						<input type="text" name="id" placeholder="17-00000-2" value="<?php echo $id;?>">
						<br><span style="color:red"><?php echo $idErr;?></span>
					</td>
				</tr>
				<tr>
					<td>Password:</td>
					<td> <input type="password" name="pass" value="<?php echo $pass;?>">
					<br><span style="color:red"><?php echo $passErr;?></span></td>
					
				</tr>
				<!--<tr>
					<td>Confirm Password:</td>
					<td> <input type="password" name="confPass" value="<?php echo $confPass;?>">
					<br><span style="color:red"><?php echo $confPassErr;?></span></td>
					
				</tr>-->

				<tr>
					<td colspan="2" align="center">
						<input type="submit" name="submit" class="btn" value="Submit">
					</td>
				</tr>
				 
				
			</table>
		</form>
		</div>
	</body>
</html>