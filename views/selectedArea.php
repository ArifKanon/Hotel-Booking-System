<?php require_once "topbar1.php"; ?>

<?php
	require_once "../models/database.php";
	$conn = mysqli_connect($serverName,$userName,$password,$dbName) or die('Database Connection Error');
	
	$area = $_SESSION['area'];

	$query = "SELECT * FROM area WHERE id = $area";
	$res = mysqli_query($conn,$query);
	if($res)
	{
		$row = mysqli_fetch_array($res);

		//$update = true;
		//$id = $row['id'];
		$img1 = $row['img1'];
		$img2 = $row['img2'];
		$name1 = $row['name1'];
		$name2 = $row['name2'];
		$details1 = $row['details1'];
		$details2 = $row['details2'];
		$cost_a1 = $row['cost_a1'];
		$cost_a2 = $row['cost_a2'];
		$cost_a3 = $row['cost_a3'];
		$cost_b1 = $row['cost_b1'];
		$cost_b2 = $row['cost_b2'];
		$cost_b3 = $row['cost_b3'];
	}
	if(isset($_POST['first']))
	{
		if($area == 1)
		{
			$_SESSION['hotel_id'] = "1";
			header("Location:selectedHotel.php");
		}
		if($area == 2)
		{
			$_SESSION['hotel_id'] = "3";
			header("Location:selectedHotel.php");
		}
		if($area == 3)
		{
			$_SESSION['hotel_id'] = "5";
			header("Location:selectedHotel.php");
		}
		if($area == 4)
		{
			$_SESSION['hotel_id'] = "7";
			header("Location:selectedHotel.php");
		}
		if($area == 5)
		{
			$_SESSION['hotel_id'] = "9";
			header("Location:selectedHotel.php");
		}
		if($area == 6)
		{
			$_SESSION['hotel_id'] = "11";
			header("Location:selectedHotel.php");
		}
	}
	if(isset($_POST['second']))
	{
		if($area == 1)
		{
			$_SESSION['hotel_id'] = "2";
			header("Location:selectedHotel.php");
		}
		if($area == 2)
		{
			$_SESSION['hotel_id'] = "4";
			header("Location:selectedHotel.php");
		}
		if($area == 3)
		{
			$_SESSION['hotel_id'] = "6";
			header("Location:selectedHotel.php");
		}
		if($area == 4)
		{
			$_SESSION['hotel_id'] = "8";
			header("Location:selectedHotel.php");
		}
		if($area == 5)
		{
			$_SESSION['hotel_id'] = "10";
			header("Location:selectedHotel.php");
		}
		if($area == 6)
		{
			$_SESSION['hotel_id'] = "12";
			header("Location:selectedHotel.php");
		}
	}
?>

<html>
	<head>
		<title>Explore The Area</title>
	</head>

	<body style="background-color:LightGray">
		
			<table border="2">
			<form method="post" action="">
				<tr>
					<td>
						<button type="submit" name="first">
							<img src="<?php echo $img1; ?>" height="200" width="300"/>
						</button>					
					</td>
					<td style="width:500px">
						<button type="submit" name="first">
							<font size="6"><b><?php echo $name1; ?></b></font><br/>
							<?php echo $details1; ?>
							<font size="5" style="background-color:green; color: whitesmoke; text-align:right;"
							>Your Cost:
							<?php
								if($_SESSION['roomType'] == 1)
								{
									$cost = $cost_a1 * $_SESSION['day'] * $_SESSION["room_number"];
									$_SESSION['cost1'] = $cost;
									echo  "$cost"."$";
								}
								else if($_SESSION['roomType'] == 2)
								{
									$cost = $cost_a2 * $_SESSION['day'] * $_SESSION["room_number"];
									$_SESSION['cost1'] = $cost;
									echo  "$cost"."$";
								}
								else
								{
									$cost = $cost_a3 * $_SESSION['day'] * $_SESSION["room_number"];
									$_SESSION['cost1'] = $cost;
									echo  "$cost"."$";
								}
							?>
							</font>
						</button>
					</td>				
				</tr>
				</form>
				<form method="post" action="">							
				<tr>
					<td>
						<button type="submit" name="second">
							<img src="<?php echo $img2; ?>" height="200" width="300" />
						</button>
					</td>
					<td style="width:500px">
						<button type="submit" name="second">
							<font size="6"><b><?php echo $name2; ?></b></font><br />
							<?php echo $details2;?>
							<font size="5" style="background-color:green; color: whitesmoke; text-align:right;"
							>Your Cost:
							<?php
								if($_SESSION['roomType'] == 1)
								{
									$cost2 = $cost_b1*$_SESSION['day'] * $_SESSION["room_number"];
									$_SESSION['cost2'] = $cost2;
									echo  "$cost2"."$";
								}
								else if($_SESSION['roomType'] == 2)
								{
									$cost2 = $cost_b2*$_SESSION['day'] * $_SESSION["room_number"];
									$_SESSION['cost2'] = $cost2;
									echo  "$cost2"."$";
								}
								else
								{
									$cost2 = $cost_b3*$_SESSION['day'] * $_SESSION["room_number"];
									$_SESSION['cost2'] = $cost2;
									echo  "$cost2"."$";
								}
							?>
							</font>
						</button>
					</td>
				</tr>
				</form>
			</table>
							
	</body>
</html>
