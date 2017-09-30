<?php

$mysql_hostname = "mysql.1freehosting.com";
$mysql_user = "u603710351_ove";
$mysql_password = "ove123";
$mysql_database = "u603710351_iutps";


$con = mysqli_connect($mysql_hostname, $mysql_user, $mysql_password)
or die("connection error");
mysqli_select_db($con, $mysql_database) or die("Opps some thing went wrong");


?>