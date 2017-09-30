<!DOCTYPE>
<html>
<head>
  <title>Members List</title>

  <link rel="stylesheet" type="text/css" href="css/i_style.css" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.3/jquery.min.js"></script>
   <script type="text/javascript" src="js/jquery.min.js"></script>
  <script type="text/javascript" src="js/image_slide.js"></script>
	  <script type="text/javascript">
		$(document).ready(function(){
			$("#see").click(function(){
				$("#tog").toggle();
			});
		});
	</script>

</head>

<body>
	<div id="main">
    <div id="header">
	  <div id="banner" style="display: inline">
	    <div id="welcome">
		<br>
		<img width="100" height="90" src="images/black-02.png" alt="iutps logo" style="float: left"/>
		  <h1>IUT Photography Society</h1>
		  <h2>I was single then Photography came in my life</h2>
	    </div><!--close welcome-->
	    <!--<div id="welcome_slogan">
	      <h1>Photography came in my life (Slogan)</h1>
	    </div><!--close welcome_slogan-->
	  </div><!--close banner-->
    </div><!--close header-->

	<div id="menubar">
	<nav class="menu">
      <ul class="clearfix">
        <li><a href="index.php">Home</a></li>
        <li><a href="mem_login.php">Your Profile</a></li>
		<li ><a href="#">Information<span class="arrow">&#9660;</span></a>
			<ul class="sub-menu">
              <li><a href="information/history.php">History</a></li>
              <li><a href="information/services.php">Services</a></li>
			  <li><a href="information/member_list.php">Members</a></li>
			  <li><a href="information/faq.php">FAQ</a></li>
			  <li><a href="information/join.php">Join Us</a></li>
            </ul>
		</li>
        <li><a href="gallary.php">Gallary</a></li>
        <li class="current-item"><a href="#">Blog</a></li>
		<!--<li><a href="../mem_welcome.php">Profile</a></li>-->
		<li><a href="contact.php">Contact Us</a></li>
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
       </div><!--close sidebar_container-->	
	   
	<div class="slideshow">
	    <ul class="slideshow">
          <li class="show"><img width="680" height="250" src="images/001.jpg" alt="&quot;Preparation of 2nd Intra IUT Photography Exhibition of 2015&quot;" /></li>
          <li><img width="680" height="250" src="images/002.jpg" alt="&quot;IUT&quot;" /></li>
        </ul>
      </div>   
	  
	  
	   
	<div id="content">
        <div class="content_item">
			<!--<div class="form_settings">
			<form  method="GET" enctype="multipart/form-data" >
			<span>&nbsp;</span><input type="text" name="memSearch" id="formValueId" placeholder="Search by ID" />
			<p style="padding-top:15px"><span>&nbsp;</span><input class="submit" type="submit" id="myButton" value="Search" onclick="showUser(formValueId.value)"/></p>
			</form>
			</div>-->
			 
			 <div class="list-scrol">
		 	<?php
			include("config.php");
	
			$selectTest = "SELECT * FROM blog_post";
			
			$result = mysqli_query($con, $selectTest);
	
			if (!$result) {
			printf("Error: %s\n", mysqli_error($con));
				exit();
			} 
			
			
			while($row = mysqli_fetch_array($result)) {
				
				echo "<table class ='tb_b' >";
				echo "<tr><th>";
				echo $row['title'] ."</th></tr>";
				echo "<tr><td>";
				echo $row['dtime'] . "</td></tr>";
				echo "<tr><td class='btd'>By ";
				echo $row['author'] . "</td></tr>";
				echo "<tr><td>";
				echo $row['body'] . "</td></tr>";
				echo "</table></br><p style='text-align:center'>------------END-------------</P></br>";
				
				
				
				/*echo "
					<table class='tb_b'> <th>";
							echo $row['title'] . "</th><td>";
							echo $row['dtime'] . "</td><th>By ";
							echo $row['author'] . "</th><td>";
							//echo "<img width='80' height='50' src=''data:image/jpeg;base64,'.base64_encode( $row['image'] ).'' alt='About Photography' />";
							echo "<p>". $row['body'] . "</td>
						</table><br/><br/> ";*/
				

			}
			mysqli_close($con);
			
?>
	</div>
	
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