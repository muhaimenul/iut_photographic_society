<!DOCTYPE>



<html>
<head>
  <title>Update Info</title>

  <link rel="stylesheet" type="text/css" href="../css/i_style.css" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.3/jquery.min.js"></script>
  <script type="text/javascript" src="../js/jquery.min.js"></script>
  <script type="text/javascript" src="../js/image_slide.js"></script>
  <link rel="stylesheet" href="../css/style.css" />
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
  <script type="text/javascript" src="../js/calendar.js"></script>
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
        <!--<li  ><a href="Home.php">Home</a></li>
        <li><a href="mem_login.php">Your Profile</a></li>
		<li><a href="#">Information<span class="arrow">&#9660;</span></a>
			<ul class="sub-menu">
              <li><a href="information/history.php">History</a></li>
              <li><a href="information/services.php">Services</a></li>
			  <li><a href="information/member_list.php">Members</a></li>
			  <li><a href="information/faq.php">FAQ</a></li>
			  <li><a href="information/join.php">Join Us</a></li>
            </ul>
		</li>
        <li><a href="gallary.php">Gallary</a></li>
        <li><a href="blog.php">Blog</a></li>
		<li><a href="contact.php">Contact Us</a></li>-->
		<li><a href="../index.php">Logout</a></li>
		<li><a href="admin_addMem.php">Add Member</a></li>
		<li class="current-item"><a href="#">Update Info</a></li>
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
            <p>PS Freshers. First year students shoudl be introduced with us.</p>         
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
            <p>Break The Circle, Inter Photography Compitition of different univarsities.</p>         
		  </div><!--close sidebar_item--> 
        </div><!--close sidebar--> 

		<div class="sidebar">
			<div class="sidebar_item">
			<div>
				<div><h2>Calendar</h2></div>
				<div class="jquery-calendar"></div>
			</div>
			</div><!--close sidebar_item--> 
		</div><!--close sidebar--> 		
       </div><!--close sidebar_container-->	
	   
	<div class="slideshow">
	    <ul class="slideshow">
          <li class="show"><img width="680" height="250" src="../images/001.jpg" alt="&quot;Preparation of 2nd Intra IUT Photography Exhibition of 2015&quot;" /></li>
          <li><img width="680" height="250" src="../images/002.jpg" alt="&quot;IUT&quot;" /></li>
        </ul>
      </div> 
	   
	<!--<div class="slideshow">
	    <ul class="slideshow">
          <li class="show"><img width="680" height="250" src="images/001.jpg" alt="&quot;Preparation of 2nd Intra IUT Photography Exhibition of 2015&quot;" /></li>
          <li><img width="680" height="250" src="images/002.jpg" alt="&quot;IUT&quot;" /></li>
        </ul>
      </div>   -->  
	   
	<div id="content">
        <div class="content_item">
		  
		  <div class="form_settings">
		   <h2>Update Member info</h2>
			<p>&nbsp;</p>
		  <?php
		
			include("../config.php");
			//updating new
			$id=$_GET['id'];
			if (isset($_POST['updatem'])) {
				$st_id = $id;
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
		
		$testQuery = "UPDATE member_info SET NAME='$st_nm', DEPT='$st_dp', BATCH='$st_bt', PHONE_NO='$st_ph',
									ROOM_NO='$st_rm', EMAIL='$st_em', DESIGNATION='$st_ds', PASSWORD='$st_ps', 
									PRES_ADR='$st_pr', PERM_ADR='$st_pm', CURRENT_JOB='$st_jb' WHERE STD_ID='$st_id'";

		if (mysqli_query($con,$testQuery)) {
			echo "<div style='background-color: lightblue;'><h2>member info updated successfully</h2></div>";
		} else {
			echo "Error: " . $testQuery . "<br>" .  mysqli_error($con);
		}

	}
			
			
			//taking id from list
			if (isset($_GET['id'])) {
				$id=$_GET['id'];
				//var_dump($id);
				$selectTest = "SELECT * FROM member_info WHERE STD_ID='$id'";
				$result = mysqli_query($con, $selectTest);
				if (!$result) {
					printf("Error: %s\n", mysqli_error($con));
					exit();
				}	 

			}
			
			while($row = mysqli_fetch_array($result)){ 
		  ?>
			<form action="edit_pro1.php?id=<?php echo $id; ?>" method="POST">
			 
			<p><span>Student ID</span><input class="contact" type="text" name="mem_id" value="<?php echo $row['STD_ID']; ?>" disabled /></p>  
			<p><span>Name</span><input class="contact" type="text" name="mem_name" value="<?php echo $row['NAME']; ?>" required/></p>
			<p><span>Depertment</span><input class="contact" type="text" name="mem_dept" value="<?php echo $row['DEPT']; ?>" required/></p>
			<p><span>Batch</span><input class="contact" type="year" name="mem_batch" value="<?php echo $row['BATCH']; ?>" required/></p>
			<p><span>Phone Number</span><input class="contact" type="text" name="mem_phone" value="<?php echo $row['PHONE_NO']; ?>" required/></p>
			<p><span>Room</span><input class="contact" type="text" name="mem_room" value="<?php echo $row['ROOM_NO']; ?>" required/></p>
			<p><span>E-mail</span><input class="contact" type="email" name="mem_email" value="<?php echo $row['EMAIL']; ?>" required/></p>
			<p><span>Designation</span><input class="contact" type="text" name="mem_des" value="<?php echo $row['DESIGNATION']; ?>" required/></p>
			<p><span>Password</span><input class="contact" type="password" name="mem_pass" value="<?php echo $row['PASSWORD']; ?>" required/></p>
			<p><span>Present Address</span><input class="contact" type="text" name="mem_pres" value="<?php echo $row['PRES_ADR']; ?>" required/></p>
			<p><span>Permanent Address</span><input class="contact" type="text" name="mem_perm" value="<?php echo $row['PERM_ADR']; ?>" required/></p>
			<p><span>Current Job</span><input class="contact" type="text" name="mem_job" value="<?php echo $row['CURRENT_JOB']; ?>" required/></p>
            
            <p style="padding-top: 15px"><span>&nbsp;</span><input class="submit" type="submit" name="updatem" value="Update" /></p>
			</form>
			<?php
	}?>
		  </div><!--close form_settings-->
		  
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