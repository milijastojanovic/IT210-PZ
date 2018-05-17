<html>
	<head>
		<title> Unos </title>
		<link rel="stylesheet" href="stilizovanje.css"/>
	</head>
	<body>
	
		<style>
			body {
				background-color : #FAF0E6;
			}	
		</style>
	
		<div id="zaglavlje">
			Unos obaveza
		</div>
		
		<div id="sadrzaj">
				
			<form method="POST" action="k-unos.php">
				Obaveza: <input type="text" name="obaveza"/>
				</br>
				</br>
				<input type="submit" value="Unesi obavezu"/>
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
				<a href="korisnik-pretrazi.php"> Pretrazite svoje obaveze u podsetniku. </a>
			</div>
			
		</div>
		
	</body>
</html>