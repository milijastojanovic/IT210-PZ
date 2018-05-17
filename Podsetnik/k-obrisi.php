<?php

	$db = new PDO('mysql:dbname=podsetnik;host=localhost', 'root', '');
		
	$sql = "DELETE FROM obaveze2 WHERE id = $_GET[id]";
			
	$stmt = $db->prepare($sql);
			
	$stmt->execute();
		
	header('Location: korisnik-obaveze.php');
	
	
?>