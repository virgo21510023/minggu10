<?php

if (!isset($_POST["submit"])){
	header("Location: latihan3.php");
	exit();
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Hasil metode POST</title>
</head>
<body>
	<h1>Selamat datang, <?= $_POST["nama"]; ?></h1>
</body>
</html>