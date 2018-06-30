<a href="pembelian.php?menu=pilih">PILIH BARANG</a>
&nbsp;&nbsp;&nbsp;
<a href="pembelian.php?menu=keranjang">KERANJANG BELANJA</a>
&nbsp;&nbsp;&nbsp;
<a href="pembelian.php?menu=beli">PEMBELIAN</a>
&nbsp;&nbsp;&nbsp;
<a href="halaman_awal.php?halaman_awal">BERANDA</a>
<hr/>
<?php
$menu= isset($_GET["menu"]) ? $_GET["menu"] : "pilih";
if($menu == "pilih") {
	include("barang_tersedia.php");
	}elseif($menu == "keranjang") {
	include("barang_keranjang.php");
	}elseif($menu == "beli") {
	include("beli.php");
  }
?>
<a href="barang_isi.php?barang_isi">BERANG ISI</a>