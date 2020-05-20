<?php require_once "topbar.php"; ?>
<?php
	require_once "../models/database.php";
	$conn = mysqli_connect($serverName,$userName,$password,$dbName) or die('Database Connection Error');

	$b_uId = $_SESSION['b_uId'];
	$bName = $_SESSION['bName'];
	$bRoomNum = $_SESSION['room_number'];
	$bCost = $_SESSION['bCost'];

	$sql="insert into booking(b_uId,bName,bRoomNum,bCost) 
			Values('$b_uId','$bName','$bRoomNum',' $bCost')" ;
	mysqli_query($conn,$sql);

?>	


<html>
<head>
	<title>Reserve Confirmation</title>
</head>
<body style="background-color:DarkCyan" text-allign="center">
	<br>
	<h1 style="text-align:center"><font size="10" color="white"><b>Reservation Successfully Complete</b></font></h1>
	<br><br>
	<div style="text-align:center">
		<a href="user_home.php"><button><font size="5"><b>Go to Account</b></font></button></a><br><br>
		<a href="home.php"><button><font size="5"><b>Go to Home</b></font></button></a>
	</div>
</body>
</html>