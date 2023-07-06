<html>
	<head>
	  <meta charset="UTF-8">
	  <meta http-equiv="X-UA-Compatible" content="IE=edge">
	  <meta name="viewport" content="width=device-width, initial-scale=1.0">
	  <title>My Profile</title>
	  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
	  <link rel="stylesheet" href="style.css" />
	  
	  <style>
	  p {
					  font-size: 14px;
					  font-weight: 100;
					  line-height: 12px;
					  letter-spacing: 0.5px;
					  margin: 13px 13px 30px;
					  margin-bottom: 15px;
					  text-shadow: 0 0 10px rgba(16, 64, 74, 0.5);
					  text-align:right;
					}
	  </style>
	</head>

	<body>
	  <!-- Start of Navi -->
			<div class="nav" id="navi">
			  <a href="homeMM.php">Home</a>
			  <a href="productsMM.php">Products</a>
			  <a href="servicesMM.php">Services</a>
			  <a href="aboutMM.php">About Us</a>
			  <div class="nav-item dropdown">
				<button class="dropbtn" onclick="toggleDropdown()">Me <i class="fas fa-caret-down"></i></button>
				<div class="dropdown-content" id="profileDropdown">
				  <a href = "#" class ="active">My Profile</a>
				  <a href="orderHistory.php">Order History</a>
				  <a href="logout.php">Log Out</a>
				</div>
			  </div>
			  <a href="javascript:void(0)" class="icon" onclick="hamburger()">
				<i class="fas fa-paw"></i>
			  </a>
			</div>
			<!-- End of Navi -->

		<h2>Membership Registration</h2>
		<h2>Successful!</h2>
		<div class="profile-card">
			<div class="overlay-profile-card">
				<br><br>
				<h3>Super Pet<br>Family</h3>
				<br><br><br><br><br><br><br><br><br><br><br>
				<h2 style="text-align: right;">Name</h2>
				<p>Contact</p>
				<p>Email</p>
				<p>Date Registered</p>
			</div>
		</div>


	  <script>
	  </script>

	</body>
</html>
