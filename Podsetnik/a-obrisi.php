<?php

	$db = new PDO('mysql:dbname=podsetnik;host=localhost', 'root', '');
		
	$sql = "DELETE FROM obaveze WHERE id = $_GET[id]";
			
	$stmt = $db->prepare($sql);
			
	$stmt->execute();
		
	header('Location: admin-obaveze.php');
	
	
?>