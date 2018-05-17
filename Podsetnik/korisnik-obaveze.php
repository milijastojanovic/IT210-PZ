<html>
	<head>
		<title> Obaveze </title>
		<link rel="stylesheet" href="stilizovanje.css"/>
	</head>
	<body>
	
		<style>
			body {
				background-color : #FAF0E6;
			}	
		</style>
		
		<div id="zaglavlje">
			Vase obaveze iz podsetnika
		</div>
		
		<div id="sadrzaj">
			<p> Mozete pogledati koje obaveze treba da ispunite, takodje ih mozete i obrisati ako ste ih zavrsili. </p>
		</div>
	
		<div id="sadrzaj">
		<?php
				
			$db = new PDO('mysql:dbname=podsetnik;host=localhost', 'root', '');
				
			$sql = "SELECT * FROM obaveze2";
			
			$data = $db->query($sql);
			
			foreach($data as $row){
				echo $row["id"] . ". " . $row["obaveza"] . " " . "<a href=http://localhost/k-obrisi.php?id='" . $row['id'] . "'>" . "Obrisi stavku" . "</a>" . "</br>";
			}
			
		?>
		</div>
		
		<div id="meni">
		
			<div id="naslov">
				<p> Promenite stranicu: </p>
			</div>
				
			<div class="set">
				<a href="korisnik-pocetna.html" > Vratite se na pocetnu. </a>
			</div>
			<div class="set">
				<a href="korisnik-unos.php"> Unesite nove obaveze u podsetnik. </a>
			</div>
			<div class="set">
				<a href="korisnik-pretrazi.php"> Pretrazite svoje obaveze u podsetniku. </a>
			</div>
			
		</div>
		
	</body>
</html>