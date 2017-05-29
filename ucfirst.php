<html>
<head>
<title>Mengenal Fungsi String</title>
</head>
<body>
<?php 
echo"<b>";
	$foo = 'hello world!';
	$foo = ucfirst($foo); // Hello World!
	$bar = 'HELLO WORLD!';
	$bar = ucfirst($bar); // HELLO WORLD!
	$bar = ucfirst(strtolower($bar)); // Hello World!
echo "$foo <br>$bar";
echo "</b>";
?>
</body>
</html>