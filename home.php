<?php

include('header.php');

?>


<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
		integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<cript src='https://kit.fontawesome.com/a076d05399.js'></script>
<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

<link rel="stylesheet" href="styles.css">

    <style>
		{box-sizing: border-box;}

/* Button used to open the contact form - fixed at the bottom of the page */
.open-button {
  background-color: #555;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  opacity: 0.8;
  position: fixed;
  bottom: 23px;
  right: 28px;
  width: 280px;
}

/* The popup form - hidden by default */
.form-popup {
  display: none;
  position: fixed;
  bottom: 0;
  right: 15px;
  border: 3px solid #f1f1f1;
  z-index: 9;
}

/* Add styles to the form container */
.form-container {
  max-width: 300px;
  padding: 10px;
  background-color: white;
}

/* Full-width input fields */
.form-container input[type=text], .form-container input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
}

/* When the inputs get focus, do something */
.form-container input[type=text]:focus, .form-container input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Set a style for the submit/login button */
.form-container .btn {
  background-color: #4CAF50;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  margin-bottom:10px;
  opacity: 0.8;
}

/* Add a red background color to the cancel button */
.form-container .cancel {
  background-color: red;
}

/* Add some hover effects to buttons */
.form-container .btn:hover, .open-button:hover {
  opacity: 1;
}
        
 /* Popup Box */
        /* The Modal (background) */
        .modal {
            display: none;
            /* Hidden by default */
            position: fixed;
            /* Stay in place */
            z-index: 8888;
            /* Sit on top */
            left: 0;
            top: 0;
            width: 100%;
            /* Full width */
            height: 100%;
            /* Full height */
            overflow: auto;
            /* Enable scroll if needed */
            background-color: rgb(0, 0, 0);
            /* Fallback color */
            background-color: rgba(0, 0, 0, 0.4);
            /* Black w/ opacity */
        }

        /* Modal Content/Box */
        .modal-content {
            background-color: #fefefe;
            margin: 10vh auto;
            /* 15% from the top and centered */
            padding: 20px;
            border: 1px solid #888;
            width: 60%;
            /* Could be more or less, depending on screen size */
        }

        @media (min-width: 1366px) {
            .modal-content {
                background-color: #fefefe;
                margin: 10vh auto;
                /* 15% from the top and centered */
                padding: 20px;
                border: 1px solid #888;
                width: 30%;
                /* Could be more or less, depending on screen size */
            }
        }

        h2,
        p {
            margin: 0 0 20px;
            font-weight: 400;
            color: white;
        }

        span {
            color: #666;
            display: block;
            padding: 0 0 5px;
        }

        form {
            padding: 25px;
            margin: 25px;
            box-shadow: 0 2px 5px #f5f5f5;
            background: #BEBEBE;
        }

        input,
        textarea {
            width: calc(100% - 18px);
            padding: 8px;
            margin-bottom: 20px;
            border: 1px solid #1c87c9;
            outline: none;
        }

        .contact-form button {
            width: 100%;
            padding: 10px;
            border: none;
            background: #1c87c9;
            font-size: 16px;
            font-weight: 400;
            color: #fff;
        }

        button:hover {
            background: #2371a0;
        }

        /* The Close Button */
        .close {
            color: #aaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
        }

        .close:hover,
        .close:focus {
            color: black;
            text-decoration: none;
            cursor: pointer;
        }

        button.button {
            background: none;
            border-top: none;
            outline: none;
            border-right: none;
            border-left: none;
            border-bottom: #02274a 1px solid;
            padding: 0 0 3px 0;
            font-size: 16px;
            cursor: pointer;
        }

        button.button:hover {
            border-bottom: #a99567 1px solid;
            color: #a99567;
        }
    </style>


    <!--- <link rel="stylesheet" href="popup.css">
	<script src="popup.js"> --->

    <title>Hello, world!</title>
</head>
<style type="text/css">
    th {
        color: white;
    }
</style>

<body style="background-color:darkgrey;">


    <div class="bg" style="height:1000px ;width:100%;border:5px solid white;padding:10px;">

        <!--- <img src="https://i.postimg.cc/MpCVgWnp/image2r.png" style="width: 100%; height: 100%;"></img> --->

        

    </div>
    <div style="width: 100%;padding: 20px;position:absolute;top:100px;">
        <div align="center" style="height:850px;width:100%;border:5px solid white;padding:10px;">
            <!--- <input type="button" value="CREATE USER" id="contact" onclick="function()"  style="margin:10px;color: white;border-radius: 10PX;font-size: 25px;padding: 5px;background-color: black;font-weight: 900px;"> --->

            <h2><button class="button" data-modal="modalOne"
                    style="margin:10px;color: white;border-radius: 10PX;font-size: 25px;padding: 5px;background-color: black;font-weight: 900px;">CREATE
                    USER</button></h2>


            <div id="modalOne" class="modal">
                <div class="modal-content">
                    <div class="contact-form">
                        <a class="close">&times;</a>
                        <form method="post" action="add.php" enctype="multipart/form-data">
                            <h2>Create New User</h2>
                            <div>
                                <input class="fname" type="text" name="uname" placeholder="User Name">
                                <input type="text" name="city" placeholder="City">
                                <input type="text" name="country" placeholder="Country">
                                <input type="date" name="dob" placeholder="DOB">
                                <input type="text" name="contact" placeholder="Contact No.">
                            </div>
                            <button type="submit" name="submit" href="/">Submit</button>
                        </form>
                    </div>
                </div>
            </div>



            <div style="width: 100%; height: 90%; border: 5px solid white;">
                <table class="table">
                    <thead>
                        <tr>
                            <th align="left">ID</th>
                            <th align="left">USER NAME</th>
                            <th align="left">CITY</th>
                            <th align="left">COUNTRY</th>
                            <th align="left">DOB</th>
                            <th align="left">CONTACT NO</th>
                            <th align="left">CREATE DATE</th>
                            <th align="left">EDIT</th>
                            <th align="left">DELETE</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php
	include('dbcon.php');
	
	$pgn=0;
	
	$results_per_page = 10;
	if (isset($_GET["page"])) 
	{ $page  = $_GET["page"]; } 
	else { $page=1; }
	$start_from = ($page-1) * $results_per_page;
	
	
	$sql = "SELECT * FROM `user` ORDER BY ID DESC LIMIT $start_from ,10";
	$run = mysqli_query($con, $sql);
		
		if(mysqli_num_rows($run)>0)
		{
			$count = 0;
			while ($data = mysqli_fetch_assoc($run))
			{
				$count++;
				?>
                        <tr align="center" style="color:white; font-size:15px;">
                            <td align="left"> <?php echo $data['ID']; ?> </td>
                            <td align="left"> <?php echo $data['USER NAME']; ?> </td>
                            <td align="left"> <?php echo $data['CITY']; ?> </td>
                            <td align="left"> <?php echo $data['COUNTRY']; ?> </td>
                            <td align="left"> <?php echo $data['DOB']; ?> </td>
                            <td align="left"> <?php echo $data['CONTACT NO']; ?> </td>
                            <td align="left"> <?php echo $data['CREATED DATE']; ?> </td>
                            <td align="left">


                                

							

							<button  name="edit" id="<?php echo $data['ID']; ?>" class="btn btn-primary"  onclick="openForm(this.id)">
														Edit
									</button>
													
						</td>
                            <td align="left"> 
							<a href="home.php?uid=<?= $data['ID']; ?>">
							<button type="button" class="btn btn-danger"
									style="font-size:12px;">DELETE</button> </a> </td>

								

                        </tr>
                        <?php } 
		
		}?>

                        <?php 
		$sql = "SELECT * FROM `user`";
		$run = mysqli_query($con, $sql);
		$total=mysqli_num_rows($run);
		$a=$total/$results_per_page;
		$a=ceil($a);
		//echo $a;
		
			
					
					
					if ($page >1){
						
						?><a href="home.php?page=<?php echo $page-1; ?>" class="btn btn-primary ">previous</a><?php
					}else{
?><a href="javascript:avoid(0)" class="btn btn-primary disabled ">previous</a><?php
					}
											
					
					
					
					
		
		
		
		
		
		
		
				for($i=1;$i<=$a;$i++)
				{
					
					?>
                        <a href="home.php?page=<?php echo $i; ?>" style="text-decoration:none;"><?php echo $i; ?> </a>



                        <?php
				}
				
				
				
				if (($i > $page ) && ($page < $a)){
						
						?><a href="home.php?page=<?php echo $page+1; ?>" class="btn btn-primary ">Next</a><?php
					}else{
			?><a href="javascript:avoid(0)" class="btn btn-primary disabled ">Next</a><?php
					}
				
				
				?>







                    </tbody>
                </table>
               


            </div>


        </div>
	</div>
	<?php 
	 include('dbcon.php');
			if (  isset($_GET["uid"])) // && (isset($_GET["delete"])))
			{
				
			$uid = $_GET["uid"];
			echo $uid;
			$sql = "DELETE FROM `user` WHERE `ID` = $uid";
			//echo $sql;
			$run = mysqli_query($con, $sql);
			
			header("location:home.php");
			echo "<script>window.open('home.php','_self'); </script>";
			
			}
			

?>



    <?php

include('dbcon.php');
	
	if (isset($_POST["uid"]))
	{
		
	$uid = $_GET["uid"];
	$sql = "SELECT * FROM `user` WHERE `ID` = $uid";
	//echo $sql;
	$run = mysqli_query($con, $sql);
	$data = mysqli_fetch_assoc($run);
	
	echo $data['COUNTRY'];
	}
	?>

    <div id="modalTwo" class="modal">
		<div class="modal-content">
        <div class="contact-form">
          <a class="close">&times;</a>
          <form method="post" action="home.php" enctype="multipart/form-data">
            <h2>Update User</h2>
            <div>
              <input class="fname" type="text" name="uname" id="uname" placeholder="User Name" value=<?php echo $data['USER NAME']; ?> required>
              <input type="text" name="city" id="city" placeholder="City" value=<?php echo $data['CITY']; ?> required>
              <input type="text" name="country" id="country" placeholder="Country" value=<?php echo $data['COUNTRY']; ?> required>
              <input type="date" name="dob" id="dob" placeholder="DOB" value=<?php echo $data['DOB']; ?> required>
			  <input type="hidden" name="uid1" id="uid1"  />
			   
			  <input type="text" name="contact" id="contact" placeholder="Contact No." value=<?php echo $data['CONTACT NO']; ?> required>
            </div>
			<input type="submit" name="update" id="update" value="Update" />
			
          </form>
        </div>
      </div>
    </div>

	<div class="form-popup" id="myForm" style="background-color:lightgrey;">
	<h2 style="text-align:center;">Update User</h2>
  <form method="post" action="home.php" class="form-container" enctype="multipart/form-data">
            <h2>Update User</h2>
            <div>
			<input type="text" name="uid1" id="uid12" value="" >
			   
			<input class="fname" type="text" name="uname" id="uname" placeholder="User Name" value=<?php echo $data['USER NAME']; ?> required>
			  
			  <input type="text" name="city" id="city" placeholder="City" value=<?php echo $data['CITY']; ?> required>
              <input type="text" name="country" id="country" placeholder="Country" value=<?php echo $data['COUNTRY']; ?> required>
              <input type="date" name="dob" id="dob" placeholder="DOB" value=<?php echo $data['DOB']; ?> required>
			   
			  <input type="text" name="contact" id="contact" placeholder="Contact No." value=<?php echo $data['CONTACT NO']; ?> required>
            </div>
			<input type="submit" name="update" id="update" value="Update" />
			<button type="button" class="btn cancel" onclick="closeForm()">Close</button>
			
          
  </form>
</div>
















</body>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
</script>

<script>
    var modalBtns = [...document.querySelectorAll(".button")];
    modalBtns.forEach(function (btn) {
        btn.onclick = function () {
			var modal = btn.getAttribute('data-modal');
		
			document.getElementById(modal).style.display = "block";
			
        }
    });

    var closeBtns = [...document.querySelectorAll(".close")];
    closeBtns.forEach(function (btn) {
        btn.onclick = function () {
            var modal = btn.closest('.modal');
            modal.style.display = "none";
        }
	});
	

	
    window.onclick = function (event) {
        if (event.target.className === "modal") {
            event.target.style.display = "none";
        }
	}

 	function update() {
		alert("help");

   alert("help");
	 }
function openForm(z) {
  document.getElementById("myForm").style.display = "block";

	var y = document.getElementById(z).id;
  alert(y);
  document.getElementById("uid12").value=y;
  
  



}

function closeForm() {
  document.getElementById("myForm").style.display = "none";
}
	
</script>



</html>







<?php

include('footer.php');

?>