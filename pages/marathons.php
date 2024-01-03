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
	<div tarbindex="0" id="bloc_principal">
		<header>
			<img src="./../assets/images/banniere.png" alt="Passion Marathons - Agence spécialisées dans les marathons">
			<h1 tabindex="0">Aller au bout de soi-même</h1>
		</header>
		<nav>
			<a tabindex="0" href="./../index.php">
				<img src="./../assets/images/menu/house.svg" alt="L'accueil" />
				Accueil
			</a>
			<a tabindex="0" href="#">
				<img src="./../assets/images/menu/dest.svg" alt="Les marathons dans le monde">
				Marathons
			</a>
			<a tabindex="0" href="./alimentation.html">
				<img src="./../assets/images/menu/conseils.svg" alt="Conseils pour la préparation d'un marathon">
				Conseils
			</a>
			<a tabindex="0" href="#">
				<img src="./../assets/images/menu/tems.svg" alt="Témoignages de marathoniens">
				Témoignages
			</a>
			<a tabindex="0" href="./auteurs.html">
				<img src="./../assets/images/menu/nous.svg" alt="Equipe de Passion Marathons">
				L'équipe
			</a>

		</nav>
		<div tarbindex="0" id="liste_marathons">
			<h1 class="titre_page_secondaire" tabindex="0">Marathons 2024</h1>
			<table>
				<thead>
					<tr>
						<th tabindex="0">Dates
						<th tabindex="0">Pays
						<th tabindex="0">Ville
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
							<td tabindex="0">
								<?php echo $date ?>
							<td tabindex="0">
								<?php echo $pays ?>
							<td tabindex="0">
								<?php echo $ville ?>
						<tr>

						<?php } ?>
				</tbody>
			</table>
		</div tarbindex="0">
	</div tarbindex="0">
	<section class="accessButtons">

	<button tabindex="0" id="buttonIncrease">A+</button>
    <button tabindex="0" id="buttonDecrease">A-</button>
	<button tabindex="0" id="buttonDys">Dyslexique</button>
	
		<div style="color: white;" class="errorMessage"></div>
	</section>
	<script src="./../assets/js/accessButtons.js"></script>
	<footer>
		<p tabindex="0">Copyright : Passion Marathons 2015/2023 - contac@passionmarathons.com</p>
		<a tabindex="0" href="./../pages/auteurs.html">Les auteurs du site </a>
		<a tabindex="0" href="#bloc_principal">Haut de la page</a>
	</footer>
</body>

</html>