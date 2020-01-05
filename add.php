<?php
	if(isset($_POST['submit']))
	{
		
		include('dbcon.php');
		
		$uname = $_POST['uname'];
		$city = $_POST['city'];
		$country = $_POST['country'];
		$dob = $_POST['dob'];
		$contact = $_POST['contact'];
		$myDate = date('m/d/Y');
		echo $myDate;
	
	
		$qry = "INSERT INTO `user`(`USER NAME`, `CITY`, `COUNTRY`, `DOB`, `CONTACT NO`,`CREATED DATE`) VALUES ('$uname','$city','$country','$dob','$contact','$myDate')";
		
		$run = mysqli_query($con, $qry);
		if($run==true)
		{
			?>
			<script>
				alert('User Inserted Sucessfully !!');
			</script>
			<?php
			

		}
	}
?>

<?php
/* Redirect browser */
header("location:home.php");

/* Make sure that code below does not get executed when we redirect. */
exit;
?>
<html>





</html>

