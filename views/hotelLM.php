<?php require_once "topbar.php"; ?>

<html>
	<head>
		<title>Enjoy Your Hotel</title>
	</head>

	<body style="background-color:LightGray">

		<table border="5">
			<tr>
				<font size="6"><b>Le Meridien</b></font>
				<p><?php echo $_SESSION['value2'];?></p>
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
					<font size="5"><b>Cost: <?php echo $_SESSION['cost2']; ?></b></font>
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
