<?PHP INCLUDe_ONCE ('template_atas.php'); ?>
<center><h2>FORM DATA PELANGGAN</h2></center>
<form method="post" action="data_pelanggan.php">
<table border="1" align="center">
	<tr>
		<td>Nama</td>
		<td><input type="text" name="pelanggan" /></td>
	</tr>
	<tr>
		<td>Seks</td>
		<td><select name="seks">
			<option value="">-Seks-</option>
			<option value="Pria">Pria</option>
			<option value="Wanita">Wanita</option>
			</select>
		</td>
	</tr>
	<tr>
		<td>Alamat</td>
		<td><input type="text" name="alamat" /></td>
	</tr>
	<tr>
		<td>Pekerjaan</td>
		<td><select name="pekerjaan">
			<option value="">-Pekerjaan-</option>
			<option value="pelajar">Pelajar</option>
			<option value="mahasiswa">Mahasiswa</option>
			<option value="Kantoran">Kantoran</option>
			<option value="pns">PNS</option>
			<option value="pengangguran">Pengangguran</option>
			</select>
		</td>
	</tr>
	<tr>
		<td>Pekerjaan</td>
		<td><select name="pekerjaan">
			<option value="">-Pekerjaan-</option>
			<option value="pelajar">Pelajar</option>
			<option value="mahasiswa">Mahasiswa</option>
			<option value="kantoran">Kantoran</option>
			<option value="pns">PNS</option>
			<option value="pengangguran">Pengangguran</option>
			</select>
		</td>
	</tr>
	<tr>
	<td><input type="submit" name="simpan" value="Simpan"></td>
	<td><input type="submit" name="batal" value="Batal"></td>
	</tr>
</table>
</form>
<?PHP INCLUDE_ONCE ('template_bawah.php'); ?>