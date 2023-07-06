<html>
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title> About Us </title>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
		<link rel="stylesheet" href="style.css" />
		
		<style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f7f7f7;
    }

    h1 {
      text-align: center;
      color: #333;
    }

    table {
      margin: 20px auto;
      border-collapse: collapse;
      width: 80%;
      background-color: #fff;
      box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
    }

    th, td {
      padding: 15px;
      text-align: left;
    }

    th {
      background-color: #333;
      color: #fff;
    }

    tr:nth-child(even) {
      background-color: #f2f2f2;
    }

    tr:hover {
      background-color: #ddd;
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
			  <a href="profileMM.php">My Profile</a>
			  <a href="orderHistory.php" class="active">Order History</a>
			  <a href="logout.php">Log Out</a>
			</div>
		  </div>
		  <a href="javascript:void(0)" class="icon" onclick="hamburger()">
			<i class="fas fa-paw"></i>
		  </a>
		</div>
		<!-- End of Navi -->
		
		<header style="font-size:30px;text-align: center; font-family:Quicksand; color: white;">
		ORDER HISTORY
		</header>
		
		
  <table>
    <thead>
      <tr>
        <th>Order ID</th>
        <th>Date</th>
        <th>Customer</th>
        <th>Amount</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>1</td>
        <td>2023-06-30</td>
        <td>Safwan Hirman</td>
        <td>RM100.00</td>
      </tr>
      <tr>
        <td>2</td>
        <td>2023-06-29</td>
        <td>Jeon Jungkook</td>
        <td>RM150.00</td>
      </tr>
      <!-- Add more rows for additional orders -->
    </tbody>
  </table>
		
		<footer>
			<br>Copyright © Super Pet Shop 2023
		</footer>
	</body>
	
	<script>
	
	</script>
</html>

