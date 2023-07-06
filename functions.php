<?php 

  require_once 'db_connect.php';

  function dispaly_data(){
    global $con;
    $query = "select * from bookings";
    $result = mysqli_query($con,$query);
    return $result;
  }

?>