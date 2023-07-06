<html>
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title> Log In | Sign Up </title>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
		<link rel="stylesheet" href="style.css" />
	</head>
	
	<body>
		<!-- Start of Navi -->
		<div class="nav" id="navi">
			<a href="homeNM.php">Home</a>
			<a href="productsNM.php">Products</a>
			<a href="servicesNM.php">Services</a>
			<a href="aboutNM.php">About Us</a>
			<div class="nav-item" >
				<a href="#login"  class="active">Log In | Sign Up</a>
			</div>
			<a href="javascript:void(0)" class="icon" onclick="hamburger()">
				<i class="fas fa-paw"></i>
			</a>
		</div>
		<!-- End of Navi -->
		
		<!-- START OF LOGIN FORM -->
		<div class="container" id="container">

			<div class="form-container slogin-container">
			  <form id="staffLoginForm" method="post" action="staff-login.php">
				<h1>Staff Login</h1>
				<input type="email" placeholder="Email" name="STAFF_EMAIL" id="staffEmail" value ="<?php if(isset($_COOKIE["STAFF_EMAIL"])) { echo $_COOKIE["STAFF_EMAIL"]; } ?>" required>
				<input type="password" placeholder="Password" name="STAFF_PWD" id="staffPassword" value "<?php if(isset($_COOKIE["STAFF_PWD"])) { echo $_COOKIE["STAFF_PWD"]; } ?>" required>
				<div class="content">
				  <div class="pass-link">
					<a href="#" id="forgetPassw">Forgot password?</a>
				  </div>
				</div>
				<button type="submit">Login</button>
			  </form>
			</div>

			<div class="form-container mlogin-container">
			  <form id="customerLoginForm" method="post" action="cust-login.php">
				<h1>Membership Login</h1>
				<input type="email" placeholder="Email" name="CUST_EMAIL" id="custEmail" value ="<?php if(isset($_COOKIE["CUST_EMAIL"])) { echo $_COOKIE["CUST_EMAIL"]; } ?>" required>
				<input type="password" placeholder="Password" name="CUST_PWD" id="custPassword" value "<?php if(isset($_COOKIE["CUST_PWD"])) { echo $_COOKIE["CUST_PWD"]; } ?>" required>
				<div class="content">
				  <div class="pass-link">
					<a href="#" id="forgetPassw">Forgot password?</a>
				  </div>
				</div>
				<button type="submit">Login</button>
			  </form>
			</div>


			<div class="overlay-container">
			  <div class="overlay">
				<div class="overlay-panel overlay-left">
				  <br> <br>
				  <h2 class="title">Membership <br> <br> Login</h2>
				  <p>Are you a member of <br> Super Family?<br> </p>
				  <button class="ghost" id="mlogin">Click Here
					<i class="lni lni-arrow-left mlogin"></i>
				  </button>
				</div>
				
				<div class="overlay-panel overlay-right">
				 <div class="hehe">
				 <br> <br>
				  <h2 class="title">Staff Login</h2>
				  <p>Are you a staff?</p>
				  <button class="ghost" id="slogin"> Click Here
					<i class="lni lni-arrow-right slogin"></i>
				  </button>
				  
				   <h2 class="title">Membership</h2>
				  <p>Don't have an account?</p>
				  <button class="ghost" id="slogin" onclick="document.getElementById('id01').style.display='block'" style="width:auto;"> Sign Up </button> </a>
				 </div>
				</div>
			  </div>
			</div>
		</div>
		<!-- END OF LOGIN FORM -->
		
		<!-- START OF REGISTER FORM -->
		<div id="id01" class="modal">
		  <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
		  <form class="modal-container animate" action="register.php" method="POST">
			<h1>Membership Registration Form</h1>
			<p>Please fill in this form to create an account.</p>
			<hr>
			<div class="clearfix">
			  <div class="row">
				<div class="column">
				  <label for="name">Enter your name:</label>
				  <input type="text" id="name" name="name" placeholder="Name" required>

				  <label for="address">Enter your address:</label>
				  <input type="text" id="address" name="address" placeholder="Address" required>

				  <label for="contact">Enter your contact:</label>
				  <input type="text" id="contact" name="contact" placeholder="Contact" required>
				</div>
				<div class="column">
				  <label for="email">Enter your email:</label>
				  <input type="email" placeholder="Enter Email" name="email" required>

				  <label for="password">Enter your password:</label>
				  <input type="password" id="password" name="password" placeholder="Password" required><br>

				  <input type="checkbox" name="agree" value="1">I agree to the <a href="#" style="color: dodgerblue">Terms & Privacy</a>

				  <div class="clearfix">
					<button type="button" onclick="document.getElementById('id01').style.display='none'" class="button">Cancel</button>
					<button type="submit" name="submit" class="button">Sign Up</button>
				  </div>
				</div>
			  </div>
			</div>
		  </form>
		</div>
		<!-- END OF REGISTER FORM -->

		
		
		<script>
			<!-- Start of Navi -->
			function hamburger() {
				document.getElementById('navi').classList.toggle('responsive');
			}
			<!-- End of Navi -->
			
			<!-- Script for LogIn-->
			const sloginButton = document.getElementById("slogin");
			const mloginButton = document.getElementById("mlogin");
			const container = document.getElementById("container");
			const forgetPass = document.getElementById("forgetPassw");

			forgetPass.addEventListener("click", () => {
			  forgetPassword();
			});

			function forgetPassword() {
				var email = prompt("Enter your registered email: ");	
				var newPassword = prompt("Enter new password: ");
			  // Perform the necessary logic for password recovery using the newPassword and email variables
			}

			sloginButton.addEventListener("click", () => {
			  container.classList.add("right-panel-active");
			});

			mloginButton.addEventListener("click", () => {
			  container.classList.remove("right-panel-active");
			});

		

		<!-- End of script for LogIn -->
		
		//SCRIPT FOR REGISTER FORM
			// Get the modal
			  var modal = document.getElementById('id01');

			  // When the user clicks anywhere outside of the modal, close it
			  window.onclick = function(event) {
				if (event.target == modal) {
				  modal.style.display = "none";
				}
			  }		
		</script>
	</body>
</html>
