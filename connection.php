connection.php
<!-- <?php
$username="root";
$password="";
$server='localhost';
$db='prac';
$con=mysqli_connect($server, $username, $password, $db );
if($con)
{
    // echo "Connection successful";
    ?>
     <script>
    alert("Connection Successful");
    </script>
    <?php
}
else
{
	?>
	<script>
		alert("No connection");
		</script>
    <?php
}
?> -->
<?php
	$_user=$_POST['user'];
    $_hello=$_POST['hello'];
    $_hi=$_POST['hi'];
    $_bye=$_POST['bye'];
	// Database connection
	$con = new mysqli('localhost','root','','prac');
	if($con->connect_error){
		echo "$con->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $con->prepare("insert into contract(naam, email, pwd, fp) values(?, ?, ?, ?)");
		$stmt->bind_param("ssss", $_user, $_hello, $_hi, $_bye);
		$execval = $stmt->execute();
		echo $execval;
		echo "Registration successful";
		$stmt->close();
		$con->close();
	}
?>
