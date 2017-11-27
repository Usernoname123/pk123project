<?php
	$connect = new mysqli('localhost', 'root', '', 'haranahtours');
	if ($connect->connect_error) {
		die("Connection Failed: " . $connect->connect_error);
	}
?>
