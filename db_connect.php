<?php 
//connection to mySQL
$host="localhost";
$username="root";
$password="";
$link = mysqli_connect($host,$username,$password,"superpetshop")or die("Could not connect");
//connection to database
$db = mysqli_select_db( $link,"superpetshop")or die("Could not select database");
?>
