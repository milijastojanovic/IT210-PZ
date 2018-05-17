<html>
	<head>
		<title> Pretrazi </title>
		<link rel="stylesheet" href="stilizovanje.css"/>
	</head>
	<body>
	
		<style>
			body {
				background-color : #FAF0E6;
			}	
		</style>
	
		<div id="zaglavlje">
			Pretraga obaveza u podsetniku
		</div>
		
		<div id="sadrzaj">
			<p> Pretrazite vase obaveze ako postoje. </p>
		</div>
		
		<div id="sadrzaj">
	
			<form method="POST" action="k-pretrazi.php">
				Upisite kljucne reci koje zelite da pretrazite: <input type="text" name="kljucnarec"/>
				<br/>
				<input type="submit" value="Pretrazi"/>
			</form>
		
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