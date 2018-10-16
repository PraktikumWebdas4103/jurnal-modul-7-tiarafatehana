<html> 
<head> 
<title>Menampilkan Data</title> 
</head> 
<body> 
<?php 
$conn = mysqli_connect("localhost", "root", "","db_mahasiswa") or die("Gagal konek ke server."); 
?> 

<p><a href="registrasi07.php">Tambah data</a></p></br> 
<input type="search" name="carri">

<?php

$buff = "SELECT * from data";
$a=mysqli_query($conn,$buff);
if($a){
		echo "Database masuk";
			}else{
				die(mysqli_error($conn));
				echo "error";
			}
foreach($a as $row){
	?>

<table border="1">
<tr align="center">
<td>Nama</td>
<td>NIM</td>
<td>Jenis Kelamin</td>
<td>Program Studi</td>
<td>Fakultas</td>
<td>Asal</td>
<td>Motto Hidup</td>
</tr>
<tr>
<td><?php echo $row['nama']; ?></td>
<td><?php echo $row['nim']; ?></td>
<td><?php echo $row['jeniskelamin']; ?></td>
<td><?php echo $row['programstudi']; ?></td>
<td><?php echo $row['fakultas']; ?></td>
<td><?php echo $row['asal']; ?></td>
<td><?php echo $row['mottohidup']; ?></td>
</tr>
</table>
<?php
}
?>


