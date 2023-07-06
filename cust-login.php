<?php

include 'db_connect.php';
session_start();

$CUST_EMAIL = $_POST['CUST_EMAIL']; // Assign textbox value to variable
$CUST_PWD = $_POST['CUST_PWD'];

if (isset($_POST["remember"])) {
  setcookie("CUST_EMAIL", $_POST["CUST_EMAIL"], time() + 3600);
  setcookie("CUST_PWD", $_POST["CUST_PWD"], time() + 3600);
} else {
  setcookie("CUST_EMAIL", "");
  setcookie("CUST_PWD", "");
}

$query = "SELECT * FROM customer WHERE CUST_EMAIL='$CUST_EMAIL' AND CUST_PWD='$CUST_PWD'";
$result = mysqli_query($link, $query) or die("Query failed");

if (mysqli_num_rows($result) <= 0) {
  header("location: login.php");
} else {
  $info = mysqli_fetch_array($result);
  $_SESSION['name'] = $info['name'];
  header("location: homeMM.php");
}


mysqli_close($link);
?>
