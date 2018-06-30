<?PHP INCLUDe_ONCE ('template_atas.php'); ?>
<center><h2>.::DATA PEMBELI BARANG::.</h2></center>
<form action="simpan_beli.php" method="post" enctype="multipart/form-data">
<table border="0" align='center'>
	<tr>
		<td>Nama</td>
		<td><input type="text" name="namacust"/></td>
	</tr>
	<tr>
		<td>Email</td>
		<td><input type="email" name="email"/></td>
	</tr>
	<tr>
		<td>No. Telp</td>
		<td><input type="text" name="notelp"/></td>
	</tr>
	<tr>
		<td colspan="2" align="center">
		<input type="submit" value="Simpan"/>
		</td>
	</tr>
</table>
</form>
<?php
include_once("keranjang_belanja.php") ;
?>
<?PHP INCLUDe_ONCE ('template_bawah.php'); ?>