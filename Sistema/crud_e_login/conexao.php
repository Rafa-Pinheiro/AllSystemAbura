<?php 
	$con = new mysqli("localhost", "root", "usbw", "db_abura");
	$con->set_charset("utf-8");

	if ($con -> connect_errno) { /* Caso dê algum erro, o sistema avisa */
		echo "Falha: erro número " . $con -> connect_errno;
	}
?>