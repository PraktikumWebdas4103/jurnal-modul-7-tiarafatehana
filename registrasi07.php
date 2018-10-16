<!DOCTYPE html>
<html>
<head>
	<title>Pendaftaran</title>
</head>
<body style="font-family: mimich">
	<center>
		<h2><p>FORM REGISTRASI MAHASISWA</p></h2>
	<form action="" method="POST">
		<table>
			<tr>
				<td>Nama</td>
				<td><input type="text" name="nama" maxlength="35"></td>
			</tr>
			<tr>
				<td>NIM</td>
				<td><input type="text" name="nim" maxlength="10"></td>
			</tr>
			<tr>
				<td>Jenis Kelamin</td>
				<td><input type="radio" name="jk" value="Male" required="">Male<br>
				<input type="radio" name="jk" value="Female">Female<br></td>
			</tr>
			<tr>
				<td>Program Studi</td>
				<td>
				<select name="progstud" required="">
    				<option value="MI">Manajemen Informatika</option>
    				<option value="KA">Komputerisasi Akuntansi</option>
    				<option value="Tektel">Teknik Telekomunikasi</option>
    				<option value="IF">Teknik Informatika</option>
    				<option value="Perhotelan">Perhotelan</option>
    				<option value="Sismed">Sistem Multimedia</option>
    				<option value="MP">Manajemen Pemasaran</option>
    				<option value="MBTI">Manajemen Bisnis Teknologi Informasi</option>
    				<option value="Tekdus">Teknik Industri</option>
    			</select>
    			</td>
			<tr>
				<td>Fakultas</td>
				<td>
				<select name="fakultas" required="">
    				<option value="FIT">Fakultas Ilmu Terapan</option>
    				<option value="FKB">Fakultas Komunikasi dan Bisnis</option>
    				<option value="FEB">Fakultas Ekonomi dan Bisnis</option>
    				<option value="FIK">Fakultas Industri Kreatif</option>
    				<option value="FRI">Fakultas Rekayasa Industri</option>
    				<option value="FIF">Fakultas Informatika</option>
    				<option value="FTE">Fakultas Teknik Elektro</option>
    			</select>
    			</td>
    		</tr>
		<tr>
			<td>Asal</td>
			<td> <input type="text" name="asal" style="height: 100px;width: 150px"></td>
		</tr>
		<tr>
			<td>Moto Hidup</td>
			<td><input type="textarea" name="moto">
			<tr>
				<td></td>
				<td><input type="submit" name="submit" value="Send" style="color: black; width: 100px;height: 40px;border-radius: 10px"></td>
			</tr>
		</table>
	</form>
</center>
</body>
</html>
<?php
	$con     = new mysqli('localhost', 'root', '', 'db_mahasiswa');

	if($con==false){
		die("koneksi gagal". $con->connect_error);
	}
	if (isset($_POST['submit'])) {
		$nama=$_POST['nama'];
		$nim=$_POST['nim'];
		$jenisk=$_POST['jk'];
		$progstud=$_POST['progstud'];
		$fakultas=$_POST['fakultas'];
		$asal=$_POST['asal'];	
		$motto=$_POST['moto'];
	
	$sql="INSERT INTO data(nama,nim,jeniskelamin,programstudi,fakultas,asal,mottohidup) VALUEs ('$nama','$nim','$jenisk','$progstud','$fakultas','$asal','$motto')";
			if(mysqli_query($con,$sql)){
				echo "Database masuk";
				header("location : index07.php");
			}else{
				die(mysqli_error($con));
				echo "error";
			}
}
	?>
