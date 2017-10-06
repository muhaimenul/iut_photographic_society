<?php

$mysql_hostname = "localhost";
$mysql_user = "root";
$mysql_password = "";
$mysql_database = "iutpsdb";


$con = mysqli_connect($mysql_hostname, $mysql_user, $mysql_password)
or die("connection error");
mysqli_select_db($con, $mysql_database) or die("Opps some thing went wrong");


?>