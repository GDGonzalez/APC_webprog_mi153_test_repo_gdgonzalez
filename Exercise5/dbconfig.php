<?php
$host = "localhost";
$user = "root";
$password = "";
$datbase = "gabdata";
$con = mysqli_connect($host,$user,$password);
mysqli_select_db($con, $datbase);
?>