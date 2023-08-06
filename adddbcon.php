<?php

$_contractid = $_POST['contractid'];
$_contractname = $_POST['contractname'];
$_status = $_POST['status'];
$_Contracttype = $_POST['Contracttype'];
$_startdate = $_POST['startdate'];
$_enddate = $_POST['enddate'];
$_description = $_POST['description'];

$con = new mysqli('localhost', 'root', '', 'prac');
if ($con->connect_error) {
    echo "$con->connect_error";
    die("Connection Failed: " . $con->connect_error);
} else {
    $stmt = $con->prepare("INSERT INTO addcontract(`Contract Id`, `Contract Name`, `Status`, `Contract Type`, `Start Date`, `End Date`, `Description`) VALUES (?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("sssssss", $_contractid, $_contractname, $_status, $_Contracttype, $_startdate, $_enddate, $_description);
    $execval = $stmt->execute();
    if ($execval) {
        // echo '<script>alert("Data registered successfully");</script>';
        header("Location: dashboard.php");
        exit;
    } else {
        echo '<script>alert("Error registering data");</script>';
    }
    $stmt->close();
    $con->close();
}
?>