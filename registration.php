<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Registration</title>
<link rel="stylesheet" href="CSS/prc1.css" />
<link rel="stylesheet" href="style.css" />
</head>
<body>
<div class="container">
				
				<header class="top">
						<img src="IMAGES\pic1.png" alt="Logo" class="logo" /></br></br>
						<h1>Indi Wings</h1>
						<img src="IMAGES\pic2.jpg" alt="bld" class="bld"/>
	
						<div class="address">
							
							<span class="store-title">Lee'S Summit,MO</span>
							<br>
							 <span class="store-adr">
								NW Chipman Road<br>
								816-666-0000
							</span><br>
							<a  target="_blank" href="https://www.google.com/maps/dir//NW+Chipman+Rd,+Lee's+Summit,+MO/@38.9265396,-94.4193292,17z/data=!4m13!1m4!3m3!1s0x87c0e03e70ec15f9:0xb229aca95a2ca656!2sNW+Chipman+Rd,+Lee's+Summit,+MO!3b1!4m7!1m0!1m5!1m1!1s0x87c0e03e70ec15f9:0xb229aca95a2ca656!2m2!1d-94.4171405!2d38.9265396" style ="color:white"title="get direction to this store">Get Direction</a>
						</div>
						<nav class="page_nav">
									<ul>
												<li> <a	href="prh1.php">Home				</a></li>
												<li> <a	href="ContactUs.php">Reach Us		</a></li>				
												<li> <a	href="req.php">Cook Book</a></li>
												<li> <a	href="#">Reservation</a></li>
									</ul>					
						</nav>
						<div class="clear"></div>
				</header>
				<div style="height:300px;background-color:grey">
				
					<?php
					 require('db.php');
					 // If form submitted, insert values into the database.
					 if (isset($_POST['username'])){
					 $username = $_POST['username'];
					 $email = $_POST['email'];
					 $password = $_POST['password'];
					 $username = stripslashes($username);
					 $username = mysql_real_escape_string($username);
					 $email = stripslashes($email);
					 $email = mysql_real_escape_string($email);
					 $password = stripslashes($password);
					 $password = mysql_real_escape_string($password);
					 $trn_date = date("Y-m-d H:i:s");
					 $query = "INSERT into `users` (username, password, email, trn_date) VALUES ('$username', '".md5($password)."', '$email', '$trn_date')";
					 $result = mysql_query($query);
					 if($result){
					 echo "<div class='form'><h3>You are registered successfully.</h3><br/>Click here to <a href='prh1.php'>Login</a></div>";
					 }
					 }else{
					?>
					<div style="hegiht:400px"></div>	
					<div class="form" style="padding-top:20px;">
					
					<h1>Registration</h1>
					<form name="registration" action="" method="post">
					<input type="text" name="username" placeholder="Username" required />
					<input type="email" name="email" placeholder="Email" required />
					<input type="password" name="password" placeholder="Password" required />
					<input type="submit" name="submit" value="Register" />
					</form>
					</div>
					<?php } ?>
					
				
				</div>
				
				<footer class="page_footer">
					&copy; www.indiwings.com
				</footer>
				
				</div>				






</body>
</html>