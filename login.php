<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Database connection
    $con = new mysqli('localhost', 'root', '', 'prac');
    if ($con->connect_error) {
        die("Connection Failed: " . $con->connect_error);
    }

    $stmt = $con->prepare("SELECT * FROM contract WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();
    $row = $result->fetch_assoc();
    $stored_password = $row['fp'];

    if ($result->num_rows == 1 && password_verify($password, $stored_password)) {
        $_SESSION['email'] = $email;
        // Redirect to the home page or desired location upon successful login
        header("Location: dashboard.php");
        exit;
    } else {
        echo "Invalid email or password";
    }

    $stmt->close();
    $con->close();
}
?>