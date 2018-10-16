<?php
	echo "<H3>HASIL PENCARIAN</H3";
	mysqli_connect("localhost","root","","db_mahasiswa");

	$perintah="SELECT * FROM data WHERE nim like '%cari%'"
	$hasil=mysqli_query($perintah);
	$jumlah=mysqli_num_rows[$hasil];
	if($jumlah>0){
		echo "Data yang ditemukan : $jumlah <br>";
		while ($data=mysqli_fetch_row($hasil)) {
			echo "Nama : $data[1]<br>";
			echo "NIM : $data[2]<br>";
		}
	}else{
		echo "maaf data tidak ditemukan";
	}
	}