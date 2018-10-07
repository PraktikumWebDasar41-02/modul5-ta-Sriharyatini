<!DOCTYPE html>
<html>
<head>
	<title>Jurnal 5</title>
</head>
<body>
	<form method="POST">
		<h4> DATA DIRI </h4>
		NIM : <input type="" name="nim"><br><br>
		Nama : <input type="text" name="nama"> <br><br>
		Email : <input type="email" name="email"><br><br>
		Tanggal Lahir: <input type="date" name="tl"><br><br>
		Jenis Kelamin : 
			<input type="Radio" name="jk">Perempuan
			<input type="Radio" name="jk">Laki-Laki
		<br><br>

		Program Studi: 
		<select name="ps" required="">
				<option value="Sistem Informasi"> Sistem Informasi</option>
				<option value="Komputerisasi Akuntansi"> Komputerisasi Akuntansi</option>
				<option value="MBTI">MBTI</option>
				<option nvalue="Telekomunikasi"> Teknik Telekomunikasi </option>
				<option value="Perhotelan"> Perhotelan</option>
				<option value="Manajemen Pemasaran"> Manajemen Pemasaran</option>
			</select><br><br>

		Fakultas: 
		<select name="fk" required="">
			<option value="FIT">FIT</option>
			<option value="FKB">FKB</option>
			<option value="FEB">FEB</option>
			<option value="INFORMATIKA">INFORMATIKA</option>
			<option value="FIF">FIF</option>
			<option value="FIK">FIK</option>

		</select>
		<br><br>
		KOMENTAR : <textarea name="komen"></textarea><br><br>
		<input type="submit" name="send" value="kirim">
	</form>
</body>
</html>

<?php
	//include '2.php';
	if(isset($_POST['send'])) {

		if(strlen($_POST['nim'])==12 && $_POST['nim']!="" && is_numeric($_POST['nim'])) {
			$nimnya = $_POST['nim'];
		} else {
			echo "NIM HARUS 12 ANGKA! <br>";
		}
		
		if (strlen($_POST['nama'])>20|| $_POST['nama']=="") {
			echo "NAMANYA TIDAK BOLEH LEBIH DARI 20 HURUF<br>";
		} else {
			$namanya = $_POST['nama'];
		}

		if (!strpos($_POST['email'], "@") || !strpos($_POST['email'], ".com")) {
			echo "MASUKIN EMAILNYA YANG BENER! <br>";
		} else {
			$email = $_POST['email'];
		}

		$tgllahir = $_POST['tl'];
		$p_studi = $_POST['ps'];
		$fakultas = $_POST['fk'];
		if(isset($_POST['jk'])) {
			$jeniskelamin = $_POST['jk'];
		}

		if ($_POST['komen']>50 || $_POST['komen']=="") {
			echo "SEBELUM KIRIM ISI KOMENTAR DULU";
		} else {
			$komentar = $_POST['komen'];
		}
		$konek = mysqli_connect('localhost', 'root', '', 'ta5');
		$sql = mysqli_query($konek, "INSERT INTO data VALUES ('$nimnya','$namanya', '$email','$tgllahir','$p_studi','$fakultas','$komentar') ");
		mysqli_query($konek,$sql);
		session_start();
		$_SESSION['pk']=$nimnya;
		header("Location: 2.php");
		
	}
?>