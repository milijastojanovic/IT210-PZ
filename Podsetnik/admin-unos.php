<html>
	<head>
		<title> Unos - admin </title>
		<link rel="stylesheet" href="stilizovanje.css"/>
	</head>
	<body>
	
		<style>
			body {
				background-color : #d0e4fe;
			}	
		</style>
	
		<div id="zaglavlje">
			Unos obaveza
		</div>
		
		<div id="sadrzaj">
				
			<form method="POST" action="a-unos.php">
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
				<a href="admin-pocetna.html" > Vratite se na pocetnu. </a>
			</div>
			<div class="set">
				<a href="admin-obaveze.php"> Pogledajte obaveze iz vaseg podsetnika. </a>
			</div>
			<div class="set">
				<a href="admin-pretrazi.php"> Pretrazite svoje obaveze u podsetniku. </a>
			</div>
			
		</div>
		
		<div id="sadrzaj">
			<p> Ako zelite da pristupite obavezama drugih korisnika, vratite se na pocetnu. </p>
		</div>
		
	</body>
</html>