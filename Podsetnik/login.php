<?php
	
	session_start();
	
	$db = new PDO('mysql:dbname=podsetnik;host=localhost', 'root', '');
	
	$user = $_POST['user'];
	$pass = $_POST['pass'];

	$stmt = $db->prepare("SELECT * FROM korisnici WHERE user = :user AND pass = :pass");

	$stmt->execute([':user' => $user, ':pass' => $pass]);
		
	$user = $stmt->fetch();
	
	if($stmt->rowCount() > 0) {
		
		session_start();
		$_SESSION['admin'] = $user['admin'];
	
		if($user['admin'])
			header('Location: admin-pocetna.html');
		else	
			header('Location: korisnik-pocetna.html');	
	}
	else{
		header('Location: login.html');	
	}	
	
?>