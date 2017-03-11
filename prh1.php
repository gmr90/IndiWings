<!DOCTYPE html>

<html>

	<head>
		<meta charset = "utf-8">
		<title>IndiWW Home</title>
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
				<!--Navigation bar  -->
				<nav class="page_nav">
					<ul>
						<li> <a	href="prh1.php">Home				</a></li>
						<li> <a	href="ContactUs.php">Reach Us		</a></li>				
						<li> <a	href="req.php">Cook Book</a></li>
						<li> <a	href="Feedback.php">FeedBack</a></li>
					</ul>					
				</nav>
				<div class="clear"></div>
			</header>
				
			<section class="section_left">
				<div>			
					<img src="images/rstr.jpg" alt="restrn" class="rstrbldng">
				</div>
				<div>			
			        <img src="images/rstr2.jpg" alt="restrn2" class="rstr">
					<p>hi</p>
				</div>					
												
			</section>		
				
			<aside class="aside_right">
				<div class="login">
					<?php
						 require('db.php');
						 session_start();
						 // If form submitted, insert values into the database.
						 if (isset($_POST['username'])){
							$username = $_POST['username'];
							$password = $_POST['password'];
							$username = stripslashes($username);
							$username = mysql_real_escape_string($username);
							$password = stripslashes($password);
							$password = mysql_real_escape_string($password);
								
						 //Checking is user existing in the database or not
					
							$query = "SELECT * FROM users  WHERE email='".$username."' and password='".md5($password)."'";
							$result = mysql_query($query) or die(mysql_error());
							$rows = mysql_num_rows($result);
							if($rows==1){
								 $_SESSION['username'] = $username;
								 header("Location: req.php"); // Redirect user to prh1.php
							}else{
								 echo "<div class='form'><h3>Username/password is incorrect.</h3><br/>Click here to <a href='prh1.php'>Login</a></div>";
							}
								 }else{
								?>
							<div class="form">
								<h2 style ="color:white">Log In</h2>
								<form action="" method="post" name="login">
									<input type="text" name="username" placeholder="Username" required />
									<input type="password" name="password" placeholder="Password" required />
									<input name="submit" type="submit" value="Login" />
								</form>
								<br>
								<p style ="color:Mistyrose">Not registered? <a style ="color:green" href='registration.php'>Register Here</a></p>
							</div>
								<?php } ?>
						
					</div>
					<div>
						<button class="button button1" onclick="document.location.href='req.html'">Intra Order  <strong>&#9786;</strong> </button>
								
					</div>		
						
					<div>
						<video class ="video_css" controls>
							<!--	<video width="" height="" controls autoplay loop > -->
							<source src="video/foodsong.mp4" type="video/mp4">
										If you see this, your browser does not support HTML5 video tag.
						</video>							
								
					</div>		
				
										
					<div>
						<article>
							<h3>Follow us on</h3>
								   
								 <a	href="http://www.facebook.com">FaceBook</a><br>
											 <a	href="http://www.twitter.com">Twitter</a><br>
											 <a	href="http://www.Instagram.com">Instagram</a>
											 
											
																								
						</article>	
																					
				</aside>
				
				<footer class="page_footer">
					&copy; www.indiwings.com
				</footer>
				
				</div>				
	</body>
	
</html>
