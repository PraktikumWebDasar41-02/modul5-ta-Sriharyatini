<?php
	session_start();
	$konek = mysqli_connect('localhost','root','','ta5');

	$sql = "SELECT * FROM data";
	$query = mysqli_query($konek, $sql);
	$view = mysqli_fetch_array($query);

	echo "Nim :".$view['Nim']."<br><br>";
	echo "Nama :".$view['Nama']."<br><br>";
	echo "Email :".$view['Email']."<br><br>";
	echo "Tanggal Lahir :".$view['Tanggal Lahir']."<br><br>";
	echo "Program Studi :".$view['Program Studi']."<br><br>";
	echo "Fakultas :".$view['Fakultas']."<br><br>";
	echo "Komentar :".$view['Komentar']."<br><br>";

	
		session_destroy();

?>