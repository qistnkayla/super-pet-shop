<?php
include 'db_connect.php';
session_start();

$STAFF_EMAIL = $_POST['STAFF_EMAIL']; // Assign textbox value to variable
$STAFF_PWD = $_POST['STAFF_PWD'];

if (isset($_POST["remember"])) {
  setcookie("STAFF_EMAIL", $_POST["STAFF_EMAIL"], time() + 3600);
  setcookie("STAFF_PWD", $_POST["STAFF_PWD"], time() + 3600);
} else {
  setcookie("STAFF_EMAIL", "");
  setcookie("STAFF_PWD", "");
}

$query = "SELECT * FROM staff WHERE STAFF_EMAIL='$STAFF_EMAIL' AND STAFF_PWD='$STAFF_PWD'";
$result = mysqli_query($link, $query) or die("Query failed");

if (mysqli_num_rows($result) <= 0) {
  echo '<script>alert("Staff login failed. Please check your email and password.");</script>';
  header("location: login.php");
} else {
  $info = mysqli_fetch_array($result);
  $_SESSION['name'] = $info['name'];
  echo '<script>alert("Staff login successful!");</script>';
  header("location: homeSTAFF.php");
}

mysqli_close($link);
?>
