<?php
	session_start();
	session_destroy();
	echo "Anda Sudah Logout <br/>";
?>
<a href="login_form.php"/> Login Lagi </a>