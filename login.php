<?php
if (isset($_POST["submit"])) {
	// code...
	if ($_POST["username"] == "admin" && $_POST["password"] == "123") {
		// code...
		header("Location: admin.php");
		exit();
	}
	else {
		// code...
		$error = true;
	}
}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login</title>
</head>
<body>
	<h1>Login Admin</h1>
	<?php if (isset($error)) : ?>
	<p style="color: red; font-style: italic;">Username / Password anda salah</p>
	<?php endif; ?>
	<ul>
		<form action="" method="POST">
		<li>
			<label for="username">Username	: </label>
			<input type="text" name="username" id="username">
		</li>
		<li>
			<label for="password">Password	: </label>
			<input type="password" name="password" id="password">
		</li>
		<li>
			<button type="submit" name="submit">Login</button>
		</li>
	</ul>
	</form>
</body>
</html>