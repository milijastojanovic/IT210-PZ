<?php

	$db = new PDO('mysql:dbname=podsetnik;host=localhost', 'root', '');
		
	if(isset($_POST['obaveza'])){
			
		$obaveza = $_POST['obaveza'];
			
		$sql = "INSERT INTO obaveze2(obaveza) VALUES(:obaveza)";
			
		$stmt = $db->prepare($sql);
			
		$stmt->execute([':obaveza' => $obaveza]);
		
		header('Location: korisnik-unos.php');
	}
	
?>