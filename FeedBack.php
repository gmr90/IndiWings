<!DOCTYPE html>

<html>

	<head>
		<meta charset = "utf-8">
		<title>IndiWW Home</title>
		<link rel="stylesheet" href="CSS/prc1.css" />
		<!--<script type="text/javascript" src="Feedback.js"></script> -->
		
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
						<a href="https://www.google.com/maps/dir//NW+Chipman+Rd,+Lee's+Summit,+MO/@38.9265396,-94.4193292,17z/data=!4m13!1m4!3m3!1s0x87c0e03e70ec15f9:0xb229aca95a2ca656!2sNW+Chipman+Rd,+Lee's+Summit,+MO!3b1!4m7!1m0!1m5!1m1!1s0x87c0e03e70ec15f9:0xb229aca95a2ca656!2m2!1d-94.4171405!2d38.9265396" style ="color:white"title="get direction to this store">Get Direction</a>
					</div>
						<nav class="page_nav">
							<ul>
								<li> <a	href="prh1.php">Home</a></li>
								<li> <a	href="ContactUs.php">Reach Us</a></li>				
								<li> <a	href="req.php">Cook Book</a></li>
								<li> <a	href="FeedBack.php">FeedBack</a></li>
							</ul>					
						</nav>
					<div class="clear"></div>
				</header>
				
				<section class="containerFeedback">
					<table class="tableContainer">
						<tr>
							<td>
								<table class="tableContainer_2col">
								
									<tr>
										<td>
											<label >Name  </label> 
										</td>
										<td>
											<input id="txtName" type="text" ></input>
										</td>
									</tr>
									<tr>
										<td>
											<label >Mobile Number</label>
										</td>
										<td>
											<input id="txtMobileNum" type="text" ></input>
										</td>
									</tr>
									<tr>
										<td>
											<label>Email ID</label>
										</td>
										<td>
											<input id="txtEmail" type="text" ></input>
										</td>
									</tr>
									<tr>
										<td>
											<label>Rating</label>
										</td>
										<td >
											<span class="rating">
											  <input id="rating5" type="radio" name="rating" value="5">
											  <label for="rating5">5</label>
											  <input id="rating4" type="radio" name="rating" value="4">
											  <label for="rating4">4</label>
											  <input id="rating3" type="radio" name="rating" value="3">
											  <label for="rating3">3</label>
											  <input id="rating2" type="radio" name="rating" value="2" checked>
											  <label for="rating2">2</label>
											  <input id="rating1" type="radio" name="rating" value="1">
											  <label for="rating1">1</label>
											</span>
										</td>
									</tr>
									<tr>
										<td>
											<label>Comments</label>
										</td>
										<td>
											<textarea  rows="6" cols="50" id="txtComments"></textarea>
										</td>
									</tr>
									<tr>
										<td colspan="2" style="text-align:center;">
											<!--<input type="submit" id="btnSubmit" text="Submit" onclick="feedbackSubmit()"></input>-->
											<input type="submit" id="btnSubmit" text="Submit" onclick="location.href='Thankyou.php';"></input>
										</td>
									</tr>
									
									<tr>
										<td colspan="2">
											<input type="hidden" id="txthidden"></input>
										</td>
									</tr>
								</table>	
							</td>
						</tr>
					</table>
				</section>

				<footer class="page_footer">
					&copy; copyright IndiWings.com
				</footer>
				
				</div>				
	</body>
	
</html>
