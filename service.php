<!--?php 


$query = "select * from bookings";
$result = mysqli_query($con,$query);


require_once 'config/db.php';
require_once 'config/functions.php';

$result = dispaly_data();


?-->

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <title>RESERVATION FOR SERVICES</title>
</head>
<body class="bg-dark">
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
                <!--?php 

                  while($row = mysqli_fetch_assoc($result))
                  {
                ?-->
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
                
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
</body>
</html>