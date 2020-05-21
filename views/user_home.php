<?php require_once "topbar1.php";?>

<?php
	require_once "../models/database.php";
	$conn = mysqli_connect($serverName,$userName,$password,$dbName) or die('Database Connection Error');
?>	

<html>
	<head>
		<title>User Home</title>
	</head>
	<body style="background-color:DarkSeaGreen">
		<center>
		<h1>History of Reservation</h1> 	
		<table border="2" width="600">
			<tr>
				<th>Booked Id</th>
				<th>Hotel Name</th>
				<th>Room Number</th>	
				<th>Cost</th>
				<th>Issue Date</th>
			</tr> 

			<?php			
                $b_uId = $_SESSION['b_uId'];
				$run=mysqli_query($conn,"Select * from booking where b_uId = $b_uId");
				$row_num = mysqli_num_rows($run);

			
				if($row_num > 0)
				{
					while($row = mysqli_fetch_assoc($run)): ?>
						<tr>
							<td><?php echo $row['bId']; ?></td>
							<td><?php echo $row['b_uId']; ?></td>
							<td><?php echo $row['bName']; ?></td>
							<td><?php echo $row['bRoomNum']; ?></td>
							<td><?php echo $row['bDate']; ?></td>
						</tr>
					
					<?php endwhile;
				}
				echo "</table>"."<br>"."<br>";
        
       		 ?>
    </body>
</html>