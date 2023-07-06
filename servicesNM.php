<?php 
$query = "select * from bookings";
$result = mysqli_query($con,$query);


require_once 'config/db.php';
require_once 'config/functions.php';

$result = dispaly_data();
?>

<html>
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title> Services </title>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
		<link rel="stylesheet" href="bootstrap.min.css"/>	
		<link rel="stylesheet" href="style.css" />
	</head>
	
	<body>
		<!-- Start of Navi -->
		<div class="nav" id="navi">
			<a href="homeNM.php">Home</a>
			<a href="productsNM.php" >Products</a>
			<a href="#" class="active">Services</a>
			<a href="aboutNM.php" >About Us</a>
			<div class="nav-item" >
				<a href="login.php">Log In | Sign Up</a>
			</div>
			<a href="javascript:void(0)" class="icon" onclick="hamburger()">
				<i class="fas fa-paw"></i>
			</a>
		</div>
		<!-- End of Navi -->
		
		  <div class="container">
      <div class="row mt-5">
        <div class="col">
          <div class="card mt-5">
            <div class="card-header">
              <h2 class="display-6 text-center">SUPER PET SHOP SERVICE RESERVATION</h2>
            </div>
            <div class="card-body">
              <table class="table table-bordered text-center">
                <tr class="bg-dark text-white">
                  <td> Booking ID </td>
                  <td> Customer Name </td>
				  <td> Pet Name </td>
				  <td> Pet Breed </td>
				  <td> Message  </td>
				  <td> Service </td>
				  <td> Payment Method </td>
				  <td> Date </td>
                  <td> Service ID</td>
				  <td> Email </td>
                  <td> Edit </td>
                  <td> Delete </td>
                </tr>
                <tr>
                <?php 

                  while($row = mysqli_fetch_assoc($result))
                  {
                ?>
                  <td><?php echo $row['id']; ?></td>
                  <td><?php echo $row['NAME_CUST']; ?></td>
                  <td><?php echo $row['PET_NAME']; ?></td>
                  <td><?php echo $row['PET_BREED']; ?></td>
				  <td><?php echo $row['MES_SAGE']; ?></td>
                  <td><?php echo $row['SERVICE_SELECT']; ?></td>
                  <td><?php echo $row['PAY_METHODS']; ?></td>
                  <td><?php echo $row['date_book1']; ?></td>
				  <td><?php echo $row['SERVICE_ID']; ?></td>
                  <td><?php echo $row['CUST_EMAIL']; ?></td>


                  <td><a href="#" class="btn btn-primary">Edit</a></td>  
                  <td><a href="#" class="btn btn-danger">Delete</a></td>  
                </tr>
                <?php    
                  }
                
                ?>
                
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
	</body>
	
	<script>
	
	</script>
</html>