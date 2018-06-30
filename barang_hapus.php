<?php

	$idbarang =$_GET['idbarang'];
	include "koneksi.php";
	$sql ="select * from barang where idbarang = '$idbarang'";
	$hasil = mysqli_query($kon, $sql);
	if (!$hasil) die ('Gagal query..');
	
	$data = mysqli_fetch_array($hasil);
	$nama = $data['nama'];
	$harga = $data['harga'];
	$stok = $data['stok'];
	$foto = $data['foto'];
	
	echo "<h2> Konfirmasi Hapus</h2>" ;
	echo "NAMA BARANG : ".$nama."<br/>";
	echo "HARGA BARANG: ".$harga."<br/>";
	echo "Stok : ".$stok."<br/>" ;
	echo "FOTO : <img src='thumb/t_".$foto."' /><br/><br/>";
	echo " APAKAH DATA INI AKAN DI HAPUS? <br/>";
	echo "<a href ='barang_hapus.php?idbarang=$idbarang&hapus=1'> YA </a>";
	echo "&nbsp;&nbsp;";
	echo "<a href ='barang_tampil.php'> TIDAK</a><br/><br/>";
	
	IF (ISSET($_GET['hapus'])) {
		$sql ="delete from barang where idbarang ='$idbarang'";
		$hasil =mysqli_query ($kon,$sql);
		if (!$hasil) {
			echo " GAGAL HAPUS BARANG : $nama ..<br/> ";
			echo "<a href='barang_tampil.php'> Kembali ke Daftar Barang</a>";
			} else {
			$gbr = "pict/$foto";
			if (file_exists ($gbr)) Unlink ($gbr);
			$gbr ="thumb/t_$foto";
			if (file_exists ($gbr)) Unlink ($gbr);
			header('location:barang_tampil.php');
		}
	}
?>