<!DOCTYPE html>
<html lang="fr">

<head>
	<title>Passion Marathons</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="./../assets/css/style.css" type="text/css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Lato&family=Oswald&display=swap" rel="stylesheet">
</head>

<body>
	<div id="bloc_principal">
		<header>
			<img src="./../assets/images/banniere.png" alt="Passion Marathons - Agence spécialisées dans les marathons">
			<p>Aller au bout de soi-même</p>
		</header>
		<nav>
			<a href="./../index.html">
				Accueil
			</a>
			<a href="#">
				<img src="./../assets/images/menu/dest.svg" alt="Les marathons dans le monde">
				Marathons
			</a>
			<a href="./alimentation.html">
				<img src="./../assets/images/menu/conseils.svg" alt="Conseils pour la préparation d'un marathon">
				conseils
			</a>
			<a href="#">
				<img src="./../assets/images/menu/tems.svg" alt="Témoignages de marathoniens">
				Témoignages
			</a>
			<a href="./auteurs.html">
				<img src="./../assets/images/menu/nous.svg" alt="Equipe de Passion Marathons">
				L'équipe
			</a>

		</nav>
		<div id="liste_marathons">
			<h1 class="titre_page_secondaire">Marathons 2024</h1>
			<table>
				<thead>
					<tr>
						<th>Dates
						<th>Pays
						<th>Ville
				</thead>
				<tbody>
					<?php
					$marathons = file("./../assets/datas/marathons.txt");
					foreach ($marathons as $marathon) {
						$marathon_info = explode(";", $marathon);
						$date = $marathon_info[0];
						$ville = $marathon_info[1];
						$pays = $marathon_info[2];

						?>
						<tr>
							<td>
								<?= $date ?>
							<td>
								<?= $pays ?>
							<td>
								<?= $ville ?>
						<tr>

						<?php } ?>
				</tbody>
			</table>
		</div>
	</div>
	<footer>
		<p>Copyright : Passion Marathons 2015/2023 - contac@passionmarathons.com</p>
		<a href="#">Les auteurs du site </a>
		<a href="#bloc_principal">Haut de la page</a>
	</footer>
</body>

</html>