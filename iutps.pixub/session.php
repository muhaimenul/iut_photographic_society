<?php
   include("config.php");
   session_start();
   
   $user_check = $_SESSION['STDNT_ID'];
   
   $ses_sql = mysqli_query($con,"select * from member_info where STD_ID = '$user_check' ");
   
   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
   
   $login_session = $row['STD_ID'];
   
   if(!isset($_SESSION['STDNT_ID'])){
      header("location:mem_login.php");
   }
?>