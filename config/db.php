<?php
	define('host', 'localhost');
	define('database', 'expedition');
	define('username', 'name');
	define('password', 'password');
	
	try {
			$pdo = new PDO("mysql:host=" . host . ";dbname=" . database, username, password);
			$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	} catch(PDOException $e) {
			die("ERROR: Could not connect. " . $e->getMessage());
	}
?>
