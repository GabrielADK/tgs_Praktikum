<?PHP INCLUDe_ONCE ('template_atas.php'); ?>
<?php
	@session_start();
	if(!isset($_SESSION["user"])){
		echo "sesi sudah habis! <br/>
			<a href='login_form.php'>LOGIN LAGI</a>";
		exit;
	}
	echo "SELAMAT DATANG <br/>";
	echo "USER :".$_SESSION["user"]."<br/>";
	echo "NAMA :".$_SESSION["nama_lengkap"]."<br/>";
?>
<hr/> 
<div id="menu">
	<h2>LINK</h2>
	<a href="pembelian.php">TRANSAKSI</a> <br/>
	<a href="halaman_1.php">halaman 1</a> <br/>
	<a href="halaman_2.php">halaman 2</a> <br/>
	<a href="logout.php">log out</a> <br/>
	</div>
	<?PHP INCLUDe_ONCE ('template_bawah.php'); ?>