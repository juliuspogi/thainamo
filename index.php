<!DOCTYPE html>
<html>

<head>
	<title>LOGIN</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
	<img src="tai.jpg" alt="Thai" style="width:25%;">

	<form action="login.php" method="post">
		<h2>LOGIN</h2>
		<?php if (isset($_GET['error'])) { ?>
			<p class="error"><?php echo $_GET['error']; ?></p>
		<?php } ?>
		<label>Username</label>
		<input type="text" name="uname" placeholder="Username"><br>

		<label>Password</label>
		<input type="text" name="password" placeholder="Password"><br>

		<button type="submit">Login</button>

		<a href="signup-check.php" class="ca">Create an account </a>

	</form>
</body>

</html>