<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Registration</title>
<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css"  />
<link rel="stylesheet" href="css/style.css" type="text/css" />
    <script src="bootstrap/js/jquery.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
</head>
<body>

<?php	
	include_once 'connect/connect.php';

	if ( isset($_POST['signup']) ) {
		
		// clean user inputs to prevent sql injections
		$admn = trim($_POST['admn_no']);
		$admn = strip_tags($admn);
		$admn = htmlspecialchars($admn);
		
		$Fname = trim($_POST['fname']);
		$Fname = strip_tags($Fname);
		$Fname = htmlspecialchars($Fname);
		
		$Sname = trim($_POST['sname']);
		$Sname = strip_tags($Sname);
		$Sname = htmlspecialchars($Sname);

		$sex = trim($_POST['gender']);
		$sex = strip_tags($sex);
		$sex = htmlspecialchars($sex);

		$addrs = trim($_POST['email']);
		$addrs = strip_tags($addrs);


        $conta = trim($_POST['contact']);
		$conta = strip_tags($conta);
		$conta = htmlspecialchars($conta);	

		$yr = trim($_POST['year']);
		$yr = strip_tags($yr);
		$yr = htmlspecialchars($yr);

		$fculty = trim($_POST['faculty']);
		$fculty = strip_tags($fculty);
		$fculty = htmlspecialchars($fculty);	


		$dpart = trim($_POST['depart']);
		$dpart = strip_tags($dpart);
		$dpart = htmlspecialchars($dpart);

   //validating name not tob null
		if(empty($admn)){
			?>
			<script> alert ('Oops!! cant leave any field blank');
        window.location.assign('index.php');
            </script>
        <?php
		}
		//validating email address
		if(!filter_var($addrs,FILTER_VALIDATE_EMAIL) ) {
			?>
			<script> alert ('Please enter valid email address');
        window.location.assign('index.php');
            </script>
        <?php
		}
		

		
	
		else{
		
			$query = "INSERT INTO students(Admn,firstname,surname,Gender,Email_address,Phone_number,Year,Faculty,Department) VALUES('$admn','$Fname','$Sname','$sex','$addrs','$conta','$yr','$fculty','$dpart')";

			 $res = mysqli_query($conn,$query);				
			if (!$res) {
				?>
			<script> alert ('Error occured,not registered!');
                   window.location.assign('index.php');
             </script>
        <?php
             }
             else{
         	?>
       	 <script> alert ('Successfuly registered!');
               window.location.assign('index.php');
         </script>
        <?php
		}
		}
	} 

	?>
</body>
</html>      