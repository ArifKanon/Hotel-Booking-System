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
		<title>Enjoy Le-Meridien</title>
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

		<table border="5">
			<tr>
				<font size="6"><b>Le Meridien</b></font>
			</tr>
			<tr>
				<td>
					<img
						src="places/Dhaka/leMeridienInterior (1).jpg"
						height="180"
						width="270"
					/>
				</td>
				<td>
					<img
						src="places/Dhaka/leMeridienInterior (2).jpg"
						height="180"
						width="270"
					/>
				</td>
				<td style="width:200px;">
					<font size="5">&nbsp;&nbsp;&nbsp;<b>Facility</b></font>
					<ul>
						<li>Free Wifi</li>
						<li>Free Parking</li>
						<li>Breakfast</li>
						<li>Air Condition</li>
					</ul>
				</td>
			</tr>
			<tr>
				<td>
					<img
						src="places/Dhaka/leMeridienInterior (3).jpg"
						height="180"
						width="270"
					/>
				</td>
				<td>
					<img
						src="places/Dhaka/leMeridienInterior (4).jpg"
						height="180"
						width="270"
					/>
				</td>
				<td style="width:200px; text-align: center;">
					<font size="5"><b>Cost: <?php echo $_SESSION['cost1']; ?></b></font>
					<br /><br />
					<a href="reserve.php"
						><font style="background-color: green; color: white;" size="5"
							>Reserve</font
						>
					</a>
				</td>
			</tr>
		</table>

		<br />

		<table border="1">
			<!--Hotel Details-->
			<tr>
				<td style="width: 760px;">
					<font size="5"><b>Details:</b></font
					><br />
					<p>
						Retreat to our stylish hotel in Dhaka, Bangladesh A brilliant travel
						experience awaits guests of Le Méridien Dhaka. Ideal for both
						business and leisure travel, our hotel welcomes you with a prime
						location in Bangladesh's capital city, tastefully designed rooms and
						a wealth of smart amenities. Unwind in our spacious hotel rooms and
						suites, showcasing thoughtful details like complimentary Wi-Fi
						access, plush bedding, a flat-screen TV, a mini-bar and a luxurious
						bathroom. You'll be thrilled with our hotel's selection of six
						dining options, featuring a trattoria-style Italian restaurant and a
						chic lobby lounge; we also boast a tranquil spa and a breathtaking
						rooftop infinity pool. If you're interested in hosting a business or
						social event here in Bangladesh, make use of 45,000 square feet of
						adaptable venue space, enhanced by on-site event planning and
						catering. Our hotel is just two miles from Dhaka Airport, plus is
						near Uttara and the U.S. Embassy, making Le Méridien Dhaka the
						perfect choice for your visit to Bangladesh.
					</p>
				</td>
			</tr>
		</table>
	</body>
</html>
