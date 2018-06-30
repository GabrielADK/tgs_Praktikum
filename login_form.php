<?PHP INCLUDe_ONCE ('template_atas.php'); ?>
<h2 align='center'>LOGIN</h2>
<form method="post" action="login_proses.php">
	<table border="0" align='center'>
		<tr>
			<td>USER</td>
			<td><input type="text" name="pengguna"/></td>
		</tr>
		<tr>
			<td>PASWORD</td>
			<td><input type="password" name="kata_kunci"/></td>
		</tr>
		<tr>
			<td colspan="2"><input type="submit" value="LOGIN"/></td>
		</tr>
	</table>
</form>
<?PHP INCLUDe_ONCE ('template_bawah.php'); ?>