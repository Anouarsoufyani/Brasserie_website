<!DOCTYPE html>

<html lang="fr">

	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="La Brasserie des Evêques à Villeneuve-lès-Maguelone">
		<meta name="author" content="Anouar Soufyani, Mattéo Legagneux">
		<meta name="copyright" content="© 2021 La Brasserie des Evêques. Tous droits réservés.">
		<link rel="icon" type="image/png" href="img/favicon.png">
		<link rel="stylesheet" type="text/css" href="fonts/fonts.css">
		<link rel="stylesheet" type="text/css" href="css/contact.css">
		<link rel="stylesheet" type="text/css" href="css/footer.css">
		<link rel="stylesheet" type="text/css" href="css/header.css">
		<link rel="stylesheet" type="text/css" href="css/main.css">
		<script type="text/javascript" src="js/animate_header.js"></script>
		<script type="text/javascript" src="js/toggle_menu.js"></script>
		<script type="text/javascript">
			function close_error(btn) {
				var parent = btn.parentNode;
				parent.style.animationName = "fade_out";
				parent.style.opacity = 0;
				setTimeout(function() {parent.style.display = "none"}, 200)
			}

			function initMap() {
				const loc = {lat: 0, lng: 0},
					map = new google.maps.Map(document.getElementById("map"), {zoom: 4, center: loc}),
					marker = new google.maps.Marker({position: loc, map: map})
			}

			window.onload = function() {
				animate_header();
				this.onscroll = animate_header
			}
		</script>
		<title>Nous contacter • La Brasserie des Evêques • Villeneuve-lès-Maguelone</title>
	</head>

	<body>
		<header>
			<a href="index.html" class="logo extended" title="La Brasserie des Evêques"></a>
			<a href="javascript:void(0)" class="menu" onclick="toggle_menu(this)" title="Menu"></a>
			<nav>
				<a href="produits.html" title="Nos produits"><span>NOS PRODUITS</span></a>
				<a href="atelier.html" title="Notre atelier"><span>FAITES VOTRE BIERE</span></a>
				<a href="" class="active" title="Nous contacter"><span>NOUS CONTACTER</span></a>
			</nav>
		</header>

		<main>
			<span class="title">Nous contacter</span>
			<section class="contact" style="border-top: none">
				<span class="subtitle">Coordonnées</span>
				<a href="mailto:yannick.bonnet@free.fr" class="mail" title="Envoyer un mail via Gmail">yannick.bonnet@free.fr</a><br>
				<a href="tel:0668922080" class="phone" title="Appeler">06 68 92 20 80</a>
			</section>
			<section class="form">
				<form method="POST">
					<span class="subtitle">Une question ?</span>
					<input type="text" name="first_name" placeholder="Prénom (requis)" required>
					<input type="text" name="last_name" placeholder="Nom (requis)" required><br>
					<input type="email" name="email" placeholder="E-mail (requis)" required>
					<input type="tel" name="tel" placeholder="Téléphone (facultatif)"><br>
					<textarea name="message" placeholder="Message (requis)" required></textarea><br>
					<input type="submit" name="submit" value="Envoyer" title="Envoyer">
				</form>
				<?php
					if (!empty($_POST["submit"])) {
						$send = mail("matteoo34@icloud.com", "La Brasserie des Evêques", $_POST["message"], "From: " . $_POST["email"]);
						if ($send) echo "<div class='error valid'><div class='content'>Votre message a bien été envoyé.</div><button class='close' onclick='close_error(this)' title='Fermer'></button></div>";
						else echo "<div class='error invalid'><div class='content'>Votre message n'a pas pu être envoyé.</div><button class='close' onclick='close_error(this)' title='Fermer'></button></div>";
					}
				?>
			</section>
			<section class="maps" style="margin-bottom: 0">
				<span class="subtitle">Nous trouver</span>
				<span class="address">
					3 rue des Colibris<br>
					Villeneuve-lès-Maguelone<br>
					34750
				</span>
				<div id="map"></div>
				<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAqgG7ZhqEnLmF59diS7RLhu2wrxbTFLhM&callback=initMap&libraries=&v=weekly" async></script>
			</section>
		</main>

		<footer>
			<div class="links">
				<a href="mailto:yannick.bonnet@free.fr" class="mail" title="Envoyer un mail via Gmail">yannick.bonnet@free.fr</a>
				<a href="tel:0668922080" class="phone" title="Appeler">06 68 92 20 80</a>
				<a href="https://www.facebook.com/BrasseriedesEveques" target="_blank" rel="noopener norefferer" class="fb" title="Facebook"></a>
			</div>
			<span class="copyright">© 2021 La Brasserie des Evêques. Tous droits réservés.</span>
			<span class="creators">Conception du site : Anouar Soufyani et Mattéo Legagneux</span>
		</footer>
	</body>

</html>