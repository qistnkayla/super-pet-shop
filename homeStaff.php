<html>
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title> Home </title>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
		<link rel="stylesheet" href="style.css" />
	</head>
	
	<body>
		<!-- Start of Navi -->
		<div class="nav" id="navi">
		  <a href="homeStaff.php" class="active">Home</a>
		  <a href="productsStaff.php">Products</a>
		  <a href="servicesStaff.php">Services</a>
		  <a href="reportStaff.php">Report</a>
		  <div class="nav-item dropdown">
			<button class="dropbtn" onclick="toggleDropdown()">Me <i class="fas fa-caret-down"></i></button>
			<div class="dropdown-content" id="profileDropdown">
			  <a href="#">Schedule</a>
			  <a href="logout.php" style="cursor: pointer">Log Out</a>
			</div>
		  </div>
		  <a href="javascript:void(0)" class="icon" onclick="hamburger()">
			<i class="fas fa-paw"></i>
		  </a>
		</div>
		<!-- End of Navi -->
		
		<!-- Start of Slideshow -->
		<div class="slideshow-container">
		  <div class="mySlides fade">
			<img src="C:/Users/QISHUA AQILAH/Documents/UiTM/SEM 4/CSC264/1.png">
		  </div>

		  <div class="mySlides fade">
			<img src="C:/Users/QISHUA AQILAH/Documents/UiTM/SEM 4/CSC264/2.png">
		  </div>

		  <div class="mySlides fade">
			<img src="C:/Users/QISHUA AQILAH/Documents/UiTM/SEM 4/CSC264/3.png">
		  </div>

		  <!-- Next and previous buttons -->
		  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
		  <a class="next" onclick="plusSlides(1)">&#10095;</a>
		</div>
		<br>

		<!-- The dots/circles -->
		<div style="text-align:center">
		  <span class="dot" onclick="currentSlide(1)"></span>
		  <span class="dot" onclick="currentSlide(2)"></span>
		  <span class="dot" onclick="currentSlide(3)"></span>
		</div>
		<!-- End of Slideshow -->
			
		<br> <br> <br> <br> 
		
		<!-- Start of Description -->
		<div class="column-left">
			<h1 style="font-size: 60px;font-family:Sriracha;color:#C6D2D2;padding:2px;">Welcome!</h1>
			<h2 class="SPP">SUPER PET SHOP</h2>
			<p class="desc" style="color: #C6D2D2;line-height:28px;">The ultimate destination for pet lovers! Discover a world of wagging tails, purrfect products, and expert services. From top-quality pet food to trendy accessories and grooming services, we have everything your furry friends need. Join our pet-loving community and let the fun begin at Super Pet Shop!<p>
		</div>
			
		<div class="column-right">
				 <img src="" alt="DescPic">
		</div>		
		<!-- End of Description -->
		
		<!-- Start of Section card -->
		<div class="row">
		  <div class="column-home">
			<div class="card-home">
			  <img src="C:/Users/QISHUA AQILAH/Documents/UiTM/SEM 4/CSC264/12.jpg" alt="Product" height="350px" style="text-align: center;">
			  <div class="container-home">
				<h2  style="padding-top:10px">Products</h2>
				<p>Some text that describes me lorem ipsum ipsum lorem.</p>
				<p><button class="button" onclick="window.location.href='productsNM.html'" style="cursor:pointer">Click Here</button></p>

			  </div>
			</div>
		  </div>

		  <div class="column-home">
			<div class="card-home">
			  <img src="C:/Users/QISHUA AQILAH/Documents/UiTM/SEM 4/CSC264/12.jpg" alt="Product" height="350px" style="text-align: center;">
			  <div class="container-home">
				<h2  style="padding-top:10px">Services</h2>
				<p>Some text that describes me lorem ipsum ipsum lorem.</p>
				<p><button class="button" onclick="window.location.href='servicesNM.html'" style="cursor:pointer">Click Here</button></p>
			  </div>
			</div>
		  </div>

		  <div class="column-home">
			<div class="card-home">
			  <img src="C:/Users/QISHUA AQILAH/Documents/UiTM/SEM 4/CSC264/12.jpg" alt="Product" height="350px" style="text-align: center;">
			  <div class="container-home">
				<h2 style="padding-top:10px">Membership</h2>
				<p>Some text that describes me lorem ipsum ipsum lorem.</p>
				<p><button class="button" onclick="window.location.href='login.html'" style="cursor:pointer">Sign Up</button></p>
			  </div>
			</div>
		  </div>
		</div>
		<!-- End of Section card -->

		<footer>
			<br>Copyright © Super Pet Shop 2023
		</footer>

		<script>
		<!-- Start of Navi -->
			function hamburger() {
				document.getElementById('navi').classList.toggle('responsive');
			}
			
		//Script for Slideshows in Home
	  let slideIndex = 0;
	  showSlides();

	  // Next/previous controls
	  function plusSlides(n) {
		showSlides(slideIndex + n);
	  }

	  // Thumbnail image controls
	  function currentSlide(n) {
		showSlides(n - 1);
	  }

	  function showSlides(n) {
		let i;
		let slides = document.getElementsByClassName("mySlides");
		let dots = document.getElementsByClassName("dot");
		
		if (n === undefined) {
		  slideIndex++;
		  if (slideIndex > slides.length) {
			slideIndex = 1;
		  }
		} else {
		  slideIndex = n;
		}
		
		for (i = 0; i < slides.length; i++) {
		  slides[i].style.display = "none";
		}
		
		for (i = 0; i < dots.length; i++) {
		  dots[i].classList.remove("active");
		}
		
		slides[slideIndex - 1].style.display = "block";
		dots[slideIndex - 1].classList.add("active");
		
		setTimeout(showSlides, 2000); // Change image every 2 seconds
	  }
		</script>
	</body>
</html>