<?php 
session_start();
?>



<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
		content="width=device-width,
						initial-scale=1.0">
	<title>Contact Managment System</title>
	<link rel="stylesheet"
		href="style.css" 
	>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

</head>

<body>

	<header>
		<h1 class="heading">Contract Management System</h1>
		<h3 class="title">Sign in/Sign up</h3>
	</header>
	<div class="container">
        <div class="container">
            <img src="https://sendeyo.com/get/d/8f4b3e4420" alt="Corner Image" class="corner-image">

		<div class="slider"></div>
		<div class="btn">
			<button class="login">Login</button>
			<button class="signup">Signup</button>
		</div>

		<div class="form-section">
            <form action="login.php" method="POST">

			<!-- login form -->
			<div class="login-box">
    <div class="email-div">
        <input type="email"
			name="email"
            class="email ele"
            id="username"
            placeholder="Email">
    </div>
    <div class="password-div">
        <input type="password"
			name="password"
            class="password ele"
            id="password"
            placeholder="Password">
    </div>
    <button type="submit" class="clkbtn">Login</button>
</div>
        </form>

			<!-- signup form -->
			<form action="dbcon.php" method="POST">
				<div class="signup-box">
				<div class="name-input">
					<input type="text"
						class="name ele"
						placeholder="Enter your name"
						name="user">
				</div>
				<div class="email-input">
					<input type="email"
						class="email ele"
						placeholder="username@email.com"
						name="hello">
				</div>
				<div class="password-input">
    <input type="password" class="password ele" placeholder="Password" name="hi" id="password">
</div>
<div class="password-confirm-input">
    <div class="password-input">
        <input type="password" class="password ele" placeholder="Confirm password" name="bye" id="confirm-password">
    </div>
	
    <div class="eye-icon">
        <i class="fas fa-eye" id="confirm-password-eye" onclick="togglePassword('confirm-password')"></i>
    </div>
	</div>
    <button type="submit" class="clkbtn" name="submit">Register</button>
  </div>
			</form>
			</div>
		</div>
	</div>
	<script src="jss.js"></script>
	
	<script>
    function togglePassword(inputId) {
        var passwordInput = document.getElementById(inputId);
        var passwordEye = document.getElementById(inputId + "-eye");

        if (passwordInput.type === "password") {
            passwordInput.type = "text";
            passwordEye.classList.remove("fa-eye");
            passwordEye.classList.add("fa-eye-slash");
        } else {
            passwordInput.type = "password";
            passwordEye.classList.remove("fa-eye-slash");
            passwordEye.classList.add("fa-eye");
        }
    }
</script>

</body>
</html>

</body>
</html>
