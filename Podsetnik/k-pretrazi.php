<html>
	<head>
		<title> Rezultat pretrage </title>
		<link rel="stylesheet" href="stilizovanje.css"/>
	</head>
	<body>
	
		<style>
			body {
				background-color : #FAF0E6;
			}	
		</style>
	
		<div id="sadrzaj">
		
			<div id="naslov">
				<p> Ako postoje rezultati pretrage, oni glase: </p>
			</div>
		
			<?php

				$db = new PDO('mysql:dbname=podsetnik;host=localhost', 'root', '');
				
				if(isset($_POST['kljucnarec'])){
					
					$kljucnarec = $_POST['kljucnarec'];
					
					$sql = "SELECT obaveza FROM obaveze2 WHERE obaveza LIKE '%$kljucnarec%'";
					
					$stmt = $db->prepare($sql);
					
					$stmt->execute([':obaveza' => $kljucnarec]);
					
					$data = $db->query($sql);
						
					foreach($data as $row){
						echo $row['obaveza'] . "</br>";
					}	
				}
			
			?>
			
			<div class="set">
				<a href="korisnik-pretrazi.php" > Nova pretraga. </a>
			</div>
			
		</div>
	
		<div id="meni">
		
			<div id="naslov">
				<p> Promenite stranicu: </p>
			</div>
				
			<div class="set">
				<a href="korisnik-pocetna.html" > Vratite se na pocetnu. </a>
			</div>
			<div class="set">
				<a href="korisnik-obaveze.php"> Pogledajte obaveze iz vaseg podsetnika. </a>
			</div>
			<div class="set">
				<a href="korisnik-unos.php"> Unesite nove obaveze u podsetnik. </a>
			</div>
			
		</div>
		
	</body>
</html>