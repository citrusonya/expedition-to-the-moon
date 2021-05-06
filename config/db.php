<?php
	define('host', 'localhost');
	define('database', 'expedition');
	define('username', 'ananasjojo');
	define('password', 'PzztcYzM1sXi8a5V');
	
	try {
			$pdo = new PDO("mysql:host=" . host . ";dbname=" . database, username, password);
			$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	} catch(PDOException $e) {
			die("ERROR: Could not connect. " . $e->getMessage());
	}
?>