<!DOCTYPE>
<html>
<head>
  <title>Members List</title>

  <link rel="stylesheet" type="text/css" href="../css/i_style.css" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.3/jquery.min.js"></script>
   <script type="text/javascript" src="../js/jquery.min.js"></script>
  <script type="text/javascript" src="../js/image_slide.js"></script>
  
  <style>
  	  .list-scrol{
		margin-top:20px;
		float:left;
	  height: 425px;
	  width:640px; 
	  padding:3px;
	  overflow:auto;
		
	} 
	.mem-table{
	color: #333; /* Lighten up font color */
    font-family: Helvetica, Arial, sans-serif; /* Nicer font */
    width: 640px; 
    border-collapse: collapse;
	border-spacing: 0; 
	}
	.mem-table th{
		width:120px;
		background-color: #4CAF50;
		color: white;
		font-weight: bold; 
		border: 1px solid #CCC;
	}

	.mem-table td {  
		background: #FAFAFA; /* Lighter grey background */
		text-align: center; /* Center our text */
		border: 1px solid #CCC;
	}
	.mem-table a {  
		color: black;
	}
	</style>
  
</head>

<body>
	<div id="main">
    <div id="header">
	  <div id="banner" style="display: inline">
	    <div id="welcome">
		<br>
		<img width="100" height="90" src="../images/black-02.png" alt="iutps logo" style="float: left"/>
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
	  <li><a href="../index.php">Logout</a></li>
        <li><a href="admin_addMem.php">Add Member</a></li>
		<li class="current-item"><a href="member_list1.php">Member List</a></li>
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
          <li class="show"><img width="680" height="250" src="../images/001.jpg" alt="&quot;Preparation of 2nd Intra IUT Photography Exhibition of 2015&quot;" /></li>
          <li><img width="680" height="250" src="../images/002.jpg" alt="&quot;IUT&quot;" /></li>
        </ul>
      </div>   
	  
	  
	   
	<div id="content">
        <div class="content_item">
			<div class="form_settings">
			<form  method="GET" enctype="multipart/form-data" >
			<span>&nbsp;</span><input type="text" name="memSearch" id="formValueId" placeholder="Search by ID" />
			<p style="padding-top:15px"><span>&nbsp;</span><input class="submit" type="submit" id="myButton" value="Search" onclick="showUser(formValueId.value)"/></p>
			</form>
			</div>
			
			
			<?php
			include("../config.php");
			$err="";
			
			if(isset($_GET['memSearch'])){
				$q =$_GET['memSearch'];
				$sql="SELECT * FROM member_info WHERE STD_ID = '".$q."'";
				$result = mysqli_query($con,$sql);
				$count = mysqli_num_rows($result);
				if($count==1){
					//$q="134414";

				echo "<table class ='mem-search' bgcolor='#8cd9b3'>
				<tr>
				<th>Student ID</th>
				<th>Name</th>
				<th>Department</th>
				<th>Batch</th>
				<th>Mobile</th>
				</tr>";
				while($row = mysqli_fetch_array($result)) {
					echo "<tr>";
					echo "<td>" . $row['STD_ID'] . "</td>";
					echo "<td>" . $row['NAME'] . "</td>";
					echo "<td>" . $row['DEPT'] . "</td>";
					echo "<td>" . $row['BATCH'] . "</td>";
					echo "<td>" . $row['PHONE_NO'] . "</td>";
					echo "</tr>";
				}
				echo "</table>";
				}else{
					$err="Invalid Search";
				}
			}
				echo $err;

				
				
				mysqli_close($con);
			?>
			
			
			
			
	
			 
			 <div class="list-scrol">
		 	
				<table  class ='mem-table'>
			<thead>
					<tr class='info'>
						<td>Student ID</td>
						<td>Student Name</td>
						<td>Depertment</td>
						<td>E-mail</td>
						<td>Action</td>
					</tr>
			</thead>
			<tbody>
			
			<?php
			include("config.php");
	
			$selectTest = "SELECT * FROM member_info";
			$result = mysqli_query($con, $selectTest);
			if (!$result) {
			printf("Error: %s\n", mysqli_error($con));
				exit();
			} 
			
		
			while($row = mysqli_fetch_array($result)){ ?>
				
			<tr class='success'>
			<td> <?php echo $row['STD_ID']; ?></td>
			<td> <?php echo $row['NAME']; ?></td>
			<td> <?php echo $row['DEPT']; ?></td>
			<td> <?php echo $row['EMAIL']; ?></td>
			<td><a href="edit_pro1.php?id=<?php echo $row['STD_ID']; ?>">Edit</a>/
				<a href="del_pro1.php?id=<?php echo $row['STD_ID']; ?>" >Delete</a></td>
			</tr>
			<?php
			} ?>
			</tbody>
			</table>
			</br>";
			
			<?php /*while($row = mysqli_fetch_array($result)) {
				echo "<table  border='1' bgcolor='#8cd9b3' class ='mem-table' >";
				echo "<tr><th>Student ID</th><th>";
				echo $row['STD_ID'] ."</th></tr>";
				echo "<tr><th>Name</th><td>";
				echo $row['NAME'] . "</td></tr>";
				echo "<tr><th>Department</th><td>";
				echo $row['DEPT'] . "</td></tr>";
				echo "<tr><th>Batch</th><td>";
				echo $row['BATCH'] . "</td></tr>";
				echo "<tr><th>Mobile No.</th><td>";
				echo $row['PHONE_NO'] . "</td></tr>";
				echo "<tr><th>E-mail</th><td>";
				echo $row['EMAIL'] . "</td></tr>";
				echo "<tr><th>Designation</th><td>";
				echo $row['DESIGNATION'] . "</td></tr>";
				echo "<tr><th>Current Job</th><td>";
				echo $row['CURRENT_JOB'] . "</td></tr>";
				echo "</table></br>";

			}*/
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