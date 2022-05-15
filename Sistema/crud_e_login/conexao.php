<?php 
	$mysqli = new mysqli("localhost", "root", "usbw", "db_abura");
	$mysqli->set_charset("utf-8");

	if ($mysqli -> connect_errno) { /* Caso dê algum erro, o sistema avisa */
		echo "Falha: erro número " . $mysqli -> connect_errno;
	}
?>