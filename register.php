<?php
	// Check if the form was submitted
	include 'db_connect.php';

	if (isset($_POST['submit'])) {
	  // Retrieve form data
	  $name = $_POST['name'];
	  $address = $_POST['address'];
	  $contact = $_POST['contact'];
	  $email = $_POST['email'];
	  $password = $_POST['password'];
	  $agree = isset($_POST['agree']) ? 1 : 0; // Check if the checkbox is checked
	  
	  // Insert data into the customer table
	  $query = "INSERT INTO customer (CUST_NAME, CUST_ADDRESS, CUST_CONTACT, CUST_EMAIL, CUST_PWD) VALUES ('$name', '$address', '$contact', '$email', '$password')";
	  
	  $result = mysqli_query($link, $query);
	  
	  // Check if the query executed successfully
	  if ($result) {
	    echo "Data added successfully! <a href='homeMM.php'>Back to menu</a>";		
	  } else {
	    echo "An error occurred while adding the data.";
	  }
	  
	  mysqli_close($link);
	}
?>

