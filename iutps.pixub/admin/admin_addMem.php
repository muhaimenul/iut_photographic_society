<!DOCTYPE>

<html>
<head>
  <title>Add Member</title>

  <link rel="stylesheet" type="text/css" href="../css/i_style.css" />
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
		  <h2>Admin Panel</h2>
	    </div><!--close welcome-->
	    <!--<div id="welcome_slogan">
	      <h1>Photography came in my life (Slogan)</h1>
	    </div><!--close welcome_slogan-->
	  </div><!--close banner-->
    </div><!--close header-->

	<div id="menubar">
	<nav class="menu">
      <ul class="clearfix">
        <!--<li><a href="../Home.php">Home</a></li>
        <li><a href="../mem_login.php">Member's Login</a></li>
		<li><a href="#">Information<span class="arrow">&#9660;</span></a>
			<ul class="sub-menu">
              <li><a href="../information/history.php">History</a></li>
              <li><a href="../information/services.php">Services</a></li>
			  <li><a href="../information/member_list.php">Members List</a></li>
			  <li><a href="../information/faq.php">FAQ</a></li>
			  <li><a href="../information/join.php">Join Us</a></li>
            </ul>
		</li>
        <li><a href="../gallary.php">Gallary</a></li>
        <li><a href="../blog.php">Blog</a></li>-->
	<li><a href="../index.php">Logout</a></li>
		<li class="current-item"><a href="#">Add Member</a></li>
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
          <li class="show"><img width="680" height="250" src="../images/001.jpg" alt="&quot;Enter your caption here&quot;" /></li>
          <li><img width="680" height="250" src="../images/002.jpg" alt="&quot;Enter your caption here&quot;" /></li>
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
            <h2>Add New Member</h2>
            <p>Insert the new member's information here.</p>
			<p>&nbsp;</p>
			<form action='addNewMem.php' method='POST'>
			
			
			<!--Student ID<br/><input class="contact" type="number" name="mem_id" />
			<br/>Name<br/><input class="contact" type="text" name="mem_name" />
			<br/>Department<br/><input class="contact" type="text" name="mem_dept" />
			<br/>Batch<br/><input class="contact" type="text" name="mem_batch" /></p>
			<br/>Phone Number<br/><input class="contact" type="text" name="mem_phone" />
			<br/>Room<br/><input class="contact" type="text" name="mem_room" />
			<br/>E-mail<br/><input class="contact" type="Email" name="mem_email" />
			<br/>Designation<br/><input class="contact" type="text" name="mem_des" />
			<br/>Password<br/><input class="contact" type="text" name="mem_pass" />
			<br/>Present Address<br/><input class="contact" type="text" name="mem_pres" />
			<br/>Permanent Address<br/><input class="contact" type="text" name="mem_perm" />
			<br/>Current Job<br/><input class="contact" type="text" name="mem_job" />-->
			
			
			
			
			 
			<p><span>Student ID</span><input class="contact" type="number" name="mem_id" value="<?php if (isset($_POST['mem_id'])) echo $_POST['mem_id']; ?>" required/></p>  
			<p><span>Name</span><input class="contact" type="text" name="mem_name" value="<?php if (isset($_POST['mem_name'])) echo $_POST['mem_name']; ?>" required/></p>
			<p><span>Depertment</span><input class="contact" type="text" name="mem_dept" value="<?php if (isset($_POST['mem_dept'])) echo $_POST['mem_dept']; ?>" required/></p>
			<p><span>Batch</span><input class="contact" type="year" name="mem_batch" value="<?php if (isset($_POST['mem_batch'])) echo $_POST['mem_batch']; ?>" required/></p>
			<p><span>Phone Number</span><input class="contact" type="text" name="mem_phone" value="<?php if (isset($_POST['mem_phone'])) echo $_POST['mem_phone']; ?>" required/></p>
			<p><span>Room</span><input class="contact" type="text" name="mem_room" value="<?php if (isset($_POST['mem_room'])) echo $_POST['mem_room']; ?>" required/></p>
			<p><span>E-mail</span><input class="contact" type="email" name="mem_email" value="<?php if (isset($_POST['mem_email'])) echo $_POST['mem_email']; ?>" required/></p>
			<p><span>Designation</span><input class="contact" type="text" name="mem_des" value="<?php if (isset($_POST['mem_des'])) echo $_POST['mem_des']; ?>" required/></p>
			<p><span>Password</span><input class="contact" type="password" name="mem_pass" value="<?php if (isset($_POST['mem_pass'])) echo $_POST['mem_pass']; ?>" required/></p>
			<p><span>Present Address</span><input class="contact" type="text" name="mem_pres" value="<?php if (isset($_POST['mem_pass'])) echo $_POST['mem_pass']; ?>" required/></p>
			<p><span>Permanent Address</span><input class="contact" type="text" name="mem_perm" value="<?php if (isset($_POST['mem_perm'])) echo $_POST['mem_perm']; ?>" required/></p>
			<p><span>Current Job</span><input class="contact" type="text" name="mem_job" value="<?php if (isset($_POST['mem_job'])) echo $_POST['mem_job']; ?>" required/></p>
            
            <p style="padding-top: 15px"><span>&nbsp;</span><input class="submit" type="submit" name="addm" value="Add Member" /></p>
			</form>
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