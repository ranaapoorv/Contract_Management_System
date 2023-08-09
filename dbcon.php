<?php

$_user=$_POST['user'];
$_hello=$_POST['hello'];
$_hi=$_POST['hi'];
$_bye=$_POST['bye'];

	$pass=password_hash($_POST['hi'], PASSWORD_BCRYPT);
	$cpass=password_hash($_POST['bye'], PASSWORD_BCRYPT);

	// $emailquery="select * from contract where email='$hello' ";
	// $query=mysqli_query($con,$emailquery);

	// $emailcount=mysqli_num_rows($query);

	// Database connection
	$con = new mysqli('localhost','root','','prac');
	if($con->connect_error){
		echo "$con->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else if($_hi===$_bye) 
		{
		$stmt = $con->prepare("insert into contract(naam, email, pwd, fp) values(?, ?, ?, ?)");
		$stmt->bind_param("ssss", $_user, $_hello, $pass, $cpass);
		$execval = $stmt->execute();
		echo $execval;
		echo '<script>alert("Password registered successfully");</script>';
		$stmt->close();
		$con->close();
		}
		else {
			echo '<script>alert("Passwords do not match");</script>';
		}
?>

























