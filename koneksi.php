                                                                                                                                                                                                                    <?php
error_reporting(E_ALL ^ E_DEPRECATED);
$host = "localhost";
$user = "root";
$pass = "";
$dbname = "toko_ol";

$kon = mysqli_connect($host, $user, $pass);
if (!$kon) 
die("GagalKoneksi...!!!"); 

$hasil = mysqli_select_db($kon,$dbname);
if(!$hasil){
	$hasil = mysqli_query($kon, "Create Database $dbname");
	if (!$hasil) 
	die ("Gagal Membuat Databese");
else
$hasil = mysqli_select_db($kon, $dbname);
if(!$hasil) die ("GagalKonek Database...!!");
}

$sqlTableBarang = "create table if not exists barang (
					idbarang int auto_increment not null primary key,
					nama varchar(40) not null,
					harga int not null default 0,
					stok int not null default 0,
					foto varchar(70) not null default '',
					KEY(nama))";

$sqlTabelHjual = "create table if not exists hjual (
					idhjual int auto_increment not null primary key,
					tanggal date not null,
					namacust varchar(40) not null,
					email varchar(50) not null,
					notelp varchar(20) not null default ''
					)";

$sqlTabelDjual = "create table if not exists djual (
					iddjual int auto_increment not null primary key,
					idhjual int not null,
					idbarang int not null,
					qty int not null,
					harga int not null
					)";		

$sqlTabelUser = "create table if not exists pengguna (
					idpengguna int auto_increment not null primary key,
					user varchar(25) not null,
					password varchar(50) not null,
					nama_lengkap varchar(50) not null,
					akses varchar(10) not null
					)";

mysqli_query ($kon, $sqlTableBarang) or die("Gagal Buat Tabel Barang");
mysqli_query ($kon, $sqlTabelHjual) or die("Gagal Buat Tabel Header Jual");
mysqli_query ($kon, $sqlTabelDjual) or die("Gagal Buat Tabel Detail Jual ");				
mysqli_query ($kon, $sqlTabelUser) or die("Gagal Buat Tabel pengguna ");

$sql ="select * from pengguna ";
$hasil = mysqli_query($kon, $sql);
$jumlah =mysqli_num_rows($hasil);
if ($jumlah==0){
	$sql ="insert into pengguna (user, password, nama_lengkap, akses)
	values ('admin',md5('admin'),'administrator','toko'),
	('cust',md5('cust'),'pelanggan','beli')";

mysqli_query($kon, $sql); }
?>