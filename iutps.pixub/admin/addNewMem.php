<!DOCTYPE>
<html>
<head>
  <title>Member Added</title>

  <link rel="stylesheet" type="text/css" href="../css/i_style.css" />
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.3/jquery.min.js"></script>
   <script type="text/javascript" src="../js/jquery.min.js"></script>
  <script type="text/javascript" src="../js/image_slide.js"></script>

</head>

<body>
	<div id="main">
    <div id="header">
	  <div id="banner" style="display: inline">
	    <div id="welcome">
		<br>
		<img width="100" height="90" src="../images/black-02.png" alt="iutps logo" style="float: left"/>
		  <h1>IUT Photography Society</h1>
		  <h2>Photography came in my life (Slogan)</h2>
	    </div><!--close welcome-->
	    <!--<div id="welcome_slogan">
	      <h1>Photography came in my life (Slogan)</h1>
	    </div><!--close welcome_slogan-->
	  </div><!--close banner-->
    </div><!--close header-->

	<div id="menubar">
	<nav class="menu">
      <ul class="clearfix">
		<li><a href="admin_addMem">Add Member</a></li>
		<li><a href="edit_pro1.php">Update Info</a></li>
		<li><a href="del_pro1.php">Delete Member</a></li>
		<li><a href="member_list1.php">Member List</a></li>
      </ul>
	  </nav>
    </div><!--close menubar-->
	
	<div id="site_content">		

	  <div class="sidebar_container">       
		<div class="sidebar">
          <div class="sidebar_item">
            <h2>Latest Update</h2>
            <h3>25th March 2016</h3>
            <p>Meeting will be held at 4.00PM. Everyone should come at room 405.</p>
          </div><!--close sidebar_item--> 
        </div><!--close sidebar-->     		
		<div class="sidebar">
          <div class="sidebar_item">
            <h2>Upcoming Events</h2>
            <h3>January 2016</h3>
            <p>PS Freshers. First year students should be introduced with us.</p>         
		  </div><!--close sidebar_item--> 
        </div><!--close sidebar-->
		<div class="sidebar">
          <div class="sidebar_item">
            <h3>May 2016</h3>
            <p>Exhibition. Some good photos of PS member's will be displayed in Student Center </p>         
		  </div><!--close sidebar_item--> 
        </div><!--close sidebar-->  
		<div class="sidebar">
          <div class="sidebar_item">
            <h3>November 2016</h3>
            <p>Break The Circle, Inter Photography Competition of different universities.</p>         
		  </div><!--close sidebar_item--> 
        </div><!--close sidebar-->  		
       </div><!--close sidebar_container-->	
	   
	<div class="slideshow">
	    <ul class="slideshow">
          <li class="show"><img width="680" height="250" src="../images/001.jpg" alt="&quot;Preparation of 2nd Intra IUT Photography Exhibition of 2015&quot;" /></li>
          <li><img width="680" height="250" src="../images/002.jpg" alt="&quot;IUT&quot;" /></li>
        </ul>
      </div>   
	   
	<div id="content">
        <div class="content_item">
	
			<?php
	include("config.php");
	
	
	$st_id = $_POST['mem_id'];
	$st_nm = $_POST['mem_name'];
	$st_dp = $_POST['mem_dept'];
	$st_bt = $_POST['mem_batch'];
	$st_ph = $_POST['mem_phone'];
	$st_rm = $_POST['mem_room'];
	$st_em = $_POST['mem_email'];
	$st_ds = $_POST['mem_des'];
	$st_ps = $_POST['mem_pass'];
	$st_pr = $_POST['mem_pres'];
	$st_pm = $_POST['mem_perm'];
	$st_jb = $_POST['mem_job'];
	
	
	$testQuery = "INSERT INTO member_info VALUES('$st_id', '$st_nm', '$st_dp', '$st_bt','$st_ph','$st_rm','$st_em','$st_ds','$st_ps','$st_pr','$st_pm','$st_jb')";
	
	if (mysqli_query($con,$testQuery)) {
    echo "New member Added successfully";
} else {
    echo "Error: " . $testQuery . "<br>" .  mysqli_error($con);
}
	
	mysqli_close($con);
	//echo "One member info added to the system.";
?>






		<div id="content_bottom1">
	  <div class="content_bottom_container_boxl">
		<div class="readmore1">
		  <a href="admin_addMem.php"> Add More </a> </br>
		</div><!--close readmore-->
	  </div><!--close content_bottom_container_box-->
      <div class="content_bottom_container_boxl">
        <div class="readmore1">
		  <a href="member_list1.php"> View All</a>
		</div><!--close readmore-->
	  </div><!--close content_bottom_container_box-->
	  </div><!--close content_bottom_container_box1-->      
	</div><!--close content_bottom-->  
		
		
		
	  
      <!--<h2><a href = "logout.php">Log Out</a></h2>-->
	  
		</div><!--close content_item-->
      </div><!--close content-->  
    </div><!--close site_content-->  

	<div id="content_bottom">
	  <div class="content_bottom_container_box">
		<h4>Latest Blog Post</h4>
	    <p> Phasellus laoreet feugiat risus. Ut tincidunt, ante vel fermentum iaculis.</p>
		<div class="readmore">
		  <a href="#">Read more</a>
		</div><!--close readmore-->
	  </div><!--close content_bottom_container_box-->
      <div class="content_bottom_container_box">
       <h4>Latest News</h4>
	    <p> Phasellus laoreet feugiat risus. Ut tincidunt, ante vel fermentum iaculis.</p>
	    <div class="readmore">
		  <a href="#">Read more</a>
		</div><!--close readmore-->
	  </div><!--close content_bottom_container_box-->
      <div class="content_bottom_container_box">
		<h4>News Latter</h4>
	    <p> Phasellus laoreet feugiat risus. Ut tincidunt, ante vel fermentum iaculis.</p>
	    <div class="readmore">
		  <a href="#">Read more</a>
		</div><!--close readmore-->	  
	  </div><!--close content_bottom_container_box1-->      
	  <br style="clear:both"/>
    </div><!--close content_bottom-->   
    </div><!--close main-->
	
	<div id="footer">
	  <a href="https://www.facebook.com/IUTPS/">IUTPS</a> | Copyright | <a href="http://facebook.com/muhaimenul">Muhaimenul Islam</a>
    </div><!--close footer--> 
	
	
	</div>
</body>
</html>