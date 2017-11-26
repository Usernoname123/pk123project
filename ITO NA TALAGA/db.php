<?php
	$haranahtours = new mysqli('localhost', 'root', '', 'haranahtours');
	if ($haranahtours->connect_error) {
		die("Connection Failed: " . $haranahtours->connect_error);
	}
?>
