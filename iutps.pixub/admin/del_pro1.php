<?php
			include("../config.php");
			if (isset($_GET['id'])) {
				$id=$_GET['id'];
				//var_dump($id);
				$selectTest = "DELETE FROM member_info WHERE STD_ID='$id'";
				$result = mysqli_query($con, $selectTest);
				if ($result) {
					header("location:member_list1.php");
				}
				else{
					echo mysql_error();
				}

			}
?>