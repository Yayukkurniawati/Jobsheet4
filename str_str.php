<html>
<head>
<title>Mengenal Fungsi String</title>
</head>
<body>
<?php 
echo"<b>";
		$email = 'yayuk.k@yahoo.com';
		$domain = strstr($email, '@');
		echo $domain."<br>"; // prints yahoo.com
		$mail = strstr($email, 'y');
		echo $mail; // prints mailmu@yahoo.com
echo"</b>";
?>
</body>
</html>