/*Code for Update*/



?php
	
	include('../dbcon.php');
		
	$uname = $_POST['uname'];
	$city = $_POST['city'];
	$country = $_POST['country'];
	$dob = $_POST['dob'];
	$contact = $_POST['contact'];
	$myDate = date('m/d/Y');
		
	$qry = "UPDATE `user` SET `USER NAME`='$uname',`CITY`='$city',`COUNTRY`='$country',`DOB`='$dob',`CONTACT NO`='contact' WHERE `mobiotics`.`ID` = $id; " ;    
	
	$run = mysqli_query($con, $qry);
	if($run ==true)
	{
		?>
		<script>
			alert('User Updated Sucessfully !!');
			window.open('new.php','_self');
		</script>
		<?php
			

	}
?>