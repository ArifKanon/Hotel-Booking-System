<?php
	$id="";
	$pass="";
	$idErr = "";
	$passErr = "";
	$key = true;

	$connect = mysqli_connect("localhost","root","");
	mysqli_select_db($connect,"hotelbangla");

	session_start();
	if(isset($_POST['submit']))
		{
			
			if (empty($_POST['id']))
			{
				$idErr="*Id Required";
				$key = false;
			}
			else
			{
				$id=htmlspecialchars($_POST['id']);
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

			if($key == true)
			{
				$query = mysqli_query($connect,"select * from login where status='0' && id='$id' && password='$pass'");
				$rowCount = mysqli_num_rows($query);
				$query2 = mysqli_query($connect,"select * from login where status='1' && id='$id' && password='$pass'");
				$rowCount2 = mysqli_num_rows($query2);
				$query3 = mysqli_query($connect,"select * from login where status='2' && id='$id' && password='$pass'");
				$rowCount3 = mysqli_num_rows($query3);
				if($rowCount == true)
				{
					header("Location:admin.php");
				}
				if($rowCount2 == true)
				{
					header("Location:employee.php");
				}
				if($rowCount3 == true)
				{
					header("Location:user.php");
				}
				
			}
		
	}
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <form method="post" action="">
            <div class="login-box">
                <h1>Login</h1>
                <div class="textbox">
                <i class="fas fa-user"></i>
                <input type="text" value="<?php echo $id ?>" name="id" placeholder="User Id" />
				<br><span style="color:red"><?php echo $idErr;?></span>
            </div>

            <div class="textbox">
                <i class="fas fa-lock"></i>
					<input type="password" name="pass" value="<?php echo $pass;?>" placeholder="Password">
					<br><span style="color:red"><?php echo $passErr;?></span>
            </div>
            <input type="submit" name="submit" class="btn" value="Sign in">
            <div>
                <h4>Don't have an account yet? <a href="sign_up.php"><span style="background-color:black;"><font color="White">Sign Up</font></span></a> </h4> 
            </div>
            </div>
        </form>
    </body>
</html>
