<?php
	$destination="";
	$checkIn="";
	$checkOut="";
	$room= "";
	$destinationErr = "";
	$checkInErr = "";
	$checkOutErr = "";
	$roomErr = "";
	$key = true;

	session_start();
	if(isset($_POST['search']))
		{
			
			if (empty($_POST['destination']))
			{
				$destinationErr="*Destination Required";
				$key = false;
			}
			else
			{
				$destination=htmlspecialchars($_POST['destination']);
			}
			if (empty($_POST['checkin']))
			{
				$checkInErr="*Check In Required";
				$key = false;
			}
			else
			{
				$checkIn=htmlspecialchars($_POST['checkin']);
			}
			if (empty($_POST['checkout']))
			{
				$checkOutErr="*Check Out Required";
				$key = false;
			}
			else
			{
				$checkOut=htmlspecialchars($_POST['checkout']);
			}
			if (empty($_POST['room']))
			{
				$roomErr="*Room Required";
				$key = false;
			}
			else
			{
				$room=htmlspecialchars($_POST['room']);
			}

			$date1 = new DateTime($checkIn);
			$date2 = new Datetime($checkOut);
			$diff = $date2->diff($date1);
			#printf('%d years, %d month, %d days', $diff->y, $diff->m, $diff->d);
			$dayCount = $diff->d;
			if($dayCount == 0)
				$dayCount = 1;

			

			if($key == true)
			{
				if($destination == Dhaka or $destination == dhaka or $destination == DHAKA)
				{
					$_SESSION["day"] = $dayCount;
					$_SESSION["roomType"] = $room;
					$_SESSION["area"] = 1;
					header("Location:selectedArea.php");
				}
				if($destination == Chattogram or $destination == chattogram or $destination == CHATTOGRAM)
				{
					$_SESSION["day"] = $dayCount;
					$_SESSION["roomType"] = $room;
					$_SESSION["area"] = 2;
					header("Location:selectedArea.php");
				}
				if($destination == Sylhet or $destination == sylhet or $destination == SYLHET)
				{
					$_SESSION["day"] = $dayCount;
					$_SESSION["roomType"] = $room;
					$_SESSION["area"] = 3;
					header("Location:selectedArea.php");
				}
				if($destination == "Cox's Bazar" or $destination == "coxs bazar" or $destination == "cox's bazar" or $destination == "COX'S BAZAR")
				{
					$_SESSION["day"] = $dayCount;
					$_SESSION["roomType"] = $room;
					$_SESSION["area"] = 4;
					header("Location:selectedArea.php");
				}
				if($destination == Sundarban or $destination == sundarban or $destination == SUNDARBAN)
				{
					$_SESSION["day"] = $dayCount;
					$_SESSION["roomType"] = $room;
					$_SESSION["area"] = 5;
					header("Location:selectedArea.php");
				}
				if($destination == Bandarban or $destination == bandarban or $destination == BANDARBAN)
				{
					$_SESSION["day"] = $dayCount;
					$_SESSION["roomType"] = $room;
					$_SESSION["area"] = 6;
					header("Location:selectedArea.php");
				}
			}
		
	}
?>


<html>
    <head>
        
    </head>
    <body>
        <table>
			<tr>
				<td style="text-align:left; width:830px;">
					<font size="7" style="background-color: teal; color: whitesmoke;"
						>Hotel Bangla</font
					>
				</td>
				<td style="text-align: right;">
					<a href="login_panel.php">
						<font
							size="5"
							style="background-color: rgba(5, 163, 26, 0.774); color: whitesmoke;"
							>Log In</font
						>
					</a>
				</td>
			</tr>
		</table>

		<form method="post" action="">
			<table>
				<tr>
					
					<td>
						Destination<br />
						<input type="text" value="<?php echo $destination ?>" name="destination" />
						<br><span style="color:red"><?php echo $destinationErr;?></span>
					</td>
					<td>
						Check In<br />
						<input type="date" value="<?php echo $checkIn ?>" name="checkin" />
						<br><span style="color:red"><?php echo $checkInErr;?></span>
					</td>
					<td>
						Check Out<br />
						<input type="date" value="<?php echo $checkOut ?>" name="checkout" />
						<br><span style="color:red"><?php echo $checkOutErr;?></span>
					</td>
					<td>
						Room<br />
						<select name="room">
							<option disabled="disabled" selected="">Select a room</option>	
							<option value="1" <?php if($room==1) echo "selected";?>>One person room</option>
							<option value="2" <?php if($room==2) echo "selected";?>>Two person room</option>
							<option value="3" <?php if($room==3) echo "selected";?>>Family room(max 4)</option>
						</select>
						<br><span style="color:red"><?php echo $roomErr;?></span>
					</td>
					<td><br /><input type="submit" name="search" value="Search" /></td>
				</tr>
			</table>
		</form>
    </body>
</html>