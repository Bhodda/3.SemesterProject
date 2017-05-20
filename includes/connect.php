<?php
// Connect to database and save connection in $dbh
try {
	$dbh = new PDO('mysql:host=localhost;dbname=fliptheburger;charset=utf8', 'root', '');
	$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$dbh->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
}
catch(PDOException $e) {
	echo "Connection failed: " . $e->getMessage();die();
}
?>