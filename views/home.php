<?php
	require_once "topbar.php";
	$message = null;
	if(isset($_SESSION['S_message'])){
		$message = $_SESSION['S_message'];
		unset($_SESSION['S_message']);
	}

?>


<html>
	<head>
		<title>Home</title>
		<link rel="stylesheet" type="text/css" href="home.css">
		
	</head>
 
	<body style="background-color:LightGray">
		<nav id="navber">
			<h1 class="logo">
				<span class="logo-text">
					Hotel
				</span>Bangla
			</h1>
			<ul>
				<li> <a href="">Home</a></li>
			
				
				<li> <a href="login_panel.php">Login</a></li>
				<li> <a href="signup_user.php">Sign Up</a></li>
				<li> <a href="#footer">About Us</a></li>
				<li> <a href="contact.html">Contact Us</a></li>
			</ul>
		</nav>

		<div class="container">
			<form method="post" action="topbar.php">
				<div class="search">
					<div class="caver">
						<div class="form">
							<div class="form-group">
							<h4>Destination</h4>
							<input type="text" value="" name="destination"  placeholder = 'Destination'  required/>
						   </div>
						   <div class="form-group">
						   	<h4>CheckIn</h4>
							<input type="date" value="" name="checkin"  placeholder = 'checkin'  required/>
							</div>
							<div class="form-group">
							<h4>CheckOut</h4>
							<input type="date" value="" name="checkout"  placeholder = 'checkout'  required/>
							</div>
							<div class="form-group">
							<h4>Room</h4>
							 <select name="room">
								  <option disabled="disabled" selected="">Select a room</option>	
								<option value="1" <?php if($room==1) echo "selected";?>>One person room</option>
								<option value="2" <?php if($room==2) echo "selected";?>>Two person room</option>
								<option value="3" <?php if($room==3) echo "selected";?>>Family room(max 4)</option>
       						</select>
							</div>
							
							<div class="form-group">
						   	<h4>Room Number</h4>
							<input type="text" value="" name="roomNum"  placeholder = ''/  required>
							</div>

							<div class="button">
							 <button type="submit" name="search" >Check</button>	
							</div>
							
						</div>
					</div>
				</div>
			</form>
		</div>
		<h1 style="text-align: center; margin: 10px 0;">Available Area</h1>
		<!-- <form style="align:center">
		<h1>Available Area</h1>
		<table>
			<tr>
				<td style="text-align:center">
					<img
							src="../images/home_image/dhaka.jp
							dig"
							height="200"
							width="300"
						/><br />
					<font size="5">Dhaka</font>
				</td>
				<td style="text-align:center">
					<img
							src="../images/home_image/chittagong.jpg"
							height="200"
							width="300"
					/><br />
					<font size="5">Chattogram</font>
				</td>
				<td style="text-align:center">
						<img
							src="../images/home_image/sylhet.jpg"
							height="200"
							width="300"
						/><br />
						<font size="5">Sylhet</font>
				</td>
			</tr>
			<tr>
				<td style="text-align:center">
					<img src="../images/home_image/coxs.jpg" height="200" width="300" />
					<br />
					<font size="5">Cox's Bazar</font>
				</td>
				<td style="text-align:center">
						<img
							src="../images/home_image/sundarban.jpg"
							height="200"
							width="300"
						/><br />
						<font size="5">Sundarban</font>
				</td>
				<td style="text-align:center">
						<img
							src="../images/home_image/bandarban.jpg"
							height="200"
							width="300"
						/><br />
						<font size="5">Bandarban</font>
				</td>
			</tr>
		</table>
	 </form > -->

	
	<section id="why">
		<div class="why-img">
			<a href="hotel_sylhet.php"><img src="../images/home_image/sylhet.jpg" alt=""></a>
		</div>
		<div class="why-text">
			<h1><a href="hotel_sylhet.php">Sylhet</a></h1>
			
			<p><a href="hotel_sylhet.php">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Porro qui consectetur cumque. Fugiat molestiae facere in fugit aliquid sapiente magni, ea minus quos minima vero dolorem, pariatur, inventore explicabo nostrum.</a></p>
		</div>
	</section>

	
	<section id="what">
		<div class="what-text">
			<h1><a href="hotel_bandarban.php">Bandarban</a></h1>
			<p><a href="hotel_bandarban.php">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Porro qui consectetur cumque. Fugiat molestiae facere in fugit aliquid sapiente magni, ea minus quos minima vero dolorem, pariatur, inventore explicabo nostrum.</a></p>
		</div>
		<div class="what-img">


			<a href="hotel_bandarban.php"><img src="../images/home_image/bandarban.jpg" alt=""></a>
		</div>
	</section>


	<section id="value">
		<div class="value-img">
			<a href="hotel_chittagong.php"><img src="../images/home_image/chittagong.jpg" alt=""></a>
		</div>
		<div class="value-text">
			<h1><a href="hotel_chittagong.php">Chattogram</a></h1>
			<p><a href="hotel_chittagong.php">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Porro qui consectetur cumque. Fugiat molestiae facere in fugit aliquid sapiente magni, ea minus quos minima vero dolorem, pariatur, inventore explicabo nostrum.</a></p>
		</div>
	</section>

	<section id="what">
		<div class="what-text">
			<h1><a href="hotel_cox.php">Cox's Bazar</a></h1>
			<p><a href="hotel_cox.php">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Porro qui consectetur cumque. Fugiat molestiae facere in fugit aliquid sapiente magni, ea minus quos minima vero dolorem, pariatur, inventore explicabo nostrum.</a></p>
		</div>
		<div class="what-img">


			<a href="hotel_cox.php"><img src="../images/home_image/coxs.jpg" alt=""></a>
		</div>
	</section>

	<section id="why">
		<div class="why-img">
			<a href="hotel_sundarban.php"><img src="../images/home_image/sundarban.jpg" alt=""></a>
		</div>
		<div class="why-text">
			<h1><a href="hotel_sundarban.php">Sundarban</a></h1>
			
			<p><a href="hotel_sundarban.php">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Porro qui consectetur cumque. Fugiat molestiae facere in fugit aliquid sapiente magni, ea minus quos minima vero dolorem, pariatur, inventore explicabo nostrum.</a></p>
		</div>
	</section>

	<section id="what">
		<div class="what-text">
			<h1><a href="hotel_dhaka.php">Dhaka</a></h1>
			<p><a href="hotel_dhaka.php">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Porro qui consectetur cumque. Fugiat molestiae facere in fugit aliquid sapiente magni, ea minus quos minima vero dolorem, pariatur, inventore explicabo nostrum.</a></p>
		</div>
		<div class="what-img">


			<a href="hotel_dhaka.php"><img src="../images/home_image/dhaka.jpg" alt=""></a>
		</div>
	</section>

	<section id="who">

		<div class="wrapper">
			<h2>We Are</h2>

			<div class="our_team">

				<div class="team_member">
					<div class="team_img">
						<img src="../images/design/tareq.jpg" alt="">
					</div>
					<h3>Tareq</h3>
					<p class="role">Developer</p>
					<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus, quia! Velit reiciendis odio veritatis non.
						Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus, quia! Velit reiciendis odio veritatis non.

					</p>
				</div>
				<div class="team_member">
					<div class="team_img">
						<img src="../images/design/arif.jpg" alt="">
					</div>
					<h3>Al Amin</h3>
					<p class="role">Developer</p>
					<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus, quia! Velit reiciendis odio veritatis non.
						Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus, quia! Velit reiciendis odio veritatis non.
					</p>
				</div>
				



			</div>

		</div>

	</section>

	<div class="footer" id="footer">
		<div class="f-1 contact">
			<h2>Resources</h2>
			
			<ul>
				<li><a href="">About Us</a></li>
				<li><a href="contact.html">Contact Us</a></li>
				<li><a href="">Trems & Condition</a></li>
				<li><a href="">Privacy Policy</a></li>
				<li><a href="CustomerSupport.html">Customer Support</a></li>
				<li><a href="">Find Jobs</a></li>
				<li><a href="">Review</a></li>
			</ul>




		</div>

		<div class="f-1 contact">
			<h2>About Us</h2>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sed pariatur nisi, vel. Minima, culpa tempore libero aspernatur consequatur ratione distinctio! Asperiores dolores, tempora neque, aperiam explicabo quidem temporibus voluptas, sunt velit, non pariatur et? Ut.</p>
		</div>


		<div class="contact f-1 ">
			<h2>Contact Us</h2>
			<p style="text-align: center; color: #f9ed69"><?php echo $message; ?></p>
			<form action="../controllers/contactController.php" method="post">
				<div class="c-form-group">
					<label for="name">Name</label>
					<input type="text" name="name" id="name" value="" required>
				</div>
				<div class="c-form-group">
					<label for="email">Email</label>
					<input type="email" name="email" id="email" value="" required>
				</div>
				<div class="c-form-group">
					<label for="message">Message</label>
					<textarea name="message" id="message" rows="7"></textarea>
				</div>

				<button type="submit" class="btn" id="submit_cont" name="con_submit">Send Message</button>
			</form>
		</div>
	</div>
	</div>
	</body>
</html>
