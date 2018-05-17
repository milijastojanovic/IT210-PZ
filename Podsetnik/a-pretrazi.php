<html>
	<head>
		<title> Rezultat pretrage - admin </title>
		<link rel="stylesheet" href="stilizovanje.css"/>
	</head>
	<body>
	
		<style>
			body {
				background-color : #d0e4fe;
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
					
					$sql = "SELECT obaveza FROM obaveze WHERE obaveza LIKE '%$kljucnarec%'";
					
					$stmt = $db->prepare($sql);
					
					$stmt->execute([':obaveza' => $kljucnarec]);
					
					$data = $db->query($sql);
						
					foreach($data as $row){
						echo $row['obaveza'] . "</br>";
					}	
				}
			
			?>
			
			<div class="set">
				<a href="admin-pretrazi.php" > Nova pretraga. </a>
			</div>
			
		</div>
	
		<div id="meni">
		
			<div id="naslov">
				<p> Promenite stranicu: </p>
			</div>
				
			<div class="set">
				<a href="admin-pocetna.html" > Vratite se na pocetnu. </a>
			</div>
			<div class="set">
				<a href="admin-obaveze.php"> Pogledajte obaveze iz vaseg podsetnika. </a>
			</div>
			<div class="set">
				<a href="admin-unos.php"> Unesite nove obaveze u podsetnik. </a>
			</div>
			
		</div>
		
		<div id="sadrzaj">
			<p> Ako zelite da pristupite obavezama drugih korisnika, vratite se na pocetnu. </p>
		</div>
	
	</body>
</html>