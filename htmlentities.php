<html>
<head>
<title>Mengenal Fungsi String</title>
</head>
<body>
<?php 
echo"<b>";
	$str = "A 'quote' is <b>bold</b>
	<a href=www.stekom.ac.id> stekom</a>";
	// Outputs: A 'quote' is <b>bold</b>
	echo "Sebelum: $str <br>";
	echo htmlentities($str);
echo"</b>";
?>
</body>
</html>