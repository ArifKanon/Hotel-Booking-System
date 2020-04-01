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
					header("Location:selectDhaka.php");
				}
			}
		
	}
?>

<html>
	<head>
		<title>Explore Dhaka</title>
	</head>

	<body style="background-color:LightGray">
		<table>
			<tr>
				<td style="text-align:left; width:600px;">
					<font size="7" style="background-color: teal; color: whitesmoke;"
						>Hotel Bangla</font
					>
				</td>
				<td style="text-align: right;">
					<a href="home.php">
						<font
							size="5"
							style="background-color: rgba(141, 27, 23, 0.774); color: whitesmoke;"
							>Home</font
						>&nbsp;&nbsp;
					</a>
					<a href="login.php">
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

		<table border="2">
			<tr>
				<td>
					<a href="hotelLM.php">
						<img src="places/Dhaka/exterior.jpg" height="200" width="300" />
					</a>
				</td>
				<td style="width:500px">
					<a href="hotelLM.php">
						<font size="6"><b>Le Meridien</b></font
						><br />
						Nikunja-2,Khilkhet,Dhaka <br><br>
						One person room rent: 100$<br>
						Two person room rent: 120$<br>
						Family room rent: 150$<br><br>
						<font size="5" style="background-color:green; color: whitesmoke; text-align:right;"
						>Your Cost:
						<?php
							if($_SESSION['roomType'] == 1)
							{
								$cost = 100*$_SESSION['day'];
								$_SESSION['cost1'] = $cost;
								echo  "$cost"."$";
							}
							else if($_SESSION['roomType'] == 2)
							{
								$cost = 120*$_SESSION['day'];
								$_SESSION['cost1'] = $cost;
								echo  "$cost"."$";
							}
							else
							{
								$cost = 150*$_SESSION['day'];
								$_SESSION['cost1'] = $cost;
								echo  "$cost"."$";
							}
						?>
						</font>
					</a>
				</td>
			</tr>

			<tr>
				<td>
					<a href="hotelGH.php">
						<img src="places/Dhaka/gulshan.jpg" height="200" width="300" />
					</a>
				</td>
				<td style="width:500px">
					<a href="hotelGH.php">
						<font size="6"><b>Dhaka Gulshan Hotel</b></font
						><br />
						Gulshan,Dhaka <br><br>
						One person room rent: 80$<br>
						Two person room rent: 100$<br>
						Family room rent: 130$<br><br>
						<font size="5" style="background-color:green; color: whitesmoke; text-align:right;"
						>Your Cost:
						<?php
							if($_SESSION['roomType'] == 1)
							{
								$cost = 80*$_SESSION['day'];
								$_SESSION['cost2'] = $cost;
								echo  "$cost"."$";
							}
							else if($_SESSION['roomType'] == 2)
							{
								$cost = 100*$_SESSION['day'];
								$_SESSION['cost2'] = $cost;
								echo  "$cost"."$";
							}
							else
							{
								$cost = 130*$_SESSION['day'];
								$_SESSION['cost2'] = $cost;
								echo  "$cost"."$";
							}
						?>
						</font>
					</a>
				</td>
			</tr>
		</table>
	</body>
</html>
