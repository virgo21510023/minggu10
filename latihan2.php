<?php

if (!isset($_GET["title"])){
	header("Location: latihan1.php");
	exit();
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Detail Buku</title>
</head>
<body>
<ul>
	<li>
		<img src="gambar/<?=$_GET["gambar"]; ?> ">
	</li>
	<li>Authors : <?= $_GET["authors"]; ?></li>
	<li>Year 	: <?= $_GET["year"]; ?></li>
	<li>Title 	: <?= $_GET["title"]; ?></li>
</ul>
<a href="latihan1.php">Kembali ke Daftar Buku</a>
</body>
</html>