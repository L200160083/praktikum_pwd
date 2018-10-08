<html>
	<head>
		<titlele>variable</title>
	</head>
	<body>
		<h1>Program Penjumlahan</h1>
		<form method='post' action='jumlah.php'>
		<p>Nilai A : <input type='text' name='A' size='3'></p>
		<p>Nilai B : <input type='text' name='B' size='3'></p>
		<p><input type='submit' value='Jumlahkan' name ='submit'></p>
		</form>
		
		<?php
		error_reporting (E_ALL ^ E_NOTICE);
		$A = $_POST['A'];
		$B = $_POST['B'];
		$submit = $_POST['submit'];
		$hasil = $A+$B;
		
		if($submit){
			echo"Nilai A adalah $A</br>";
			echo"Nilai B adalah $B</br>";
			echo"Jadi Nilai A ditambah Nilai B adalah $hasil";}
		?>
	</body>
</html>	