﻿<!DOCTYPE html>
<html lang="fr">

<head>
  <title>Passion marathons</title>
  <meta charset="utf-8" />
  <link rel="stylesheet" href="./assets/css/stylefinal.css" type="text/css" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <script src="https://kit.fontawesome.com/79fc45146d.js" crossorigin="anonymous"></script>
  <link href="https://fonts.googleapis.com/css2?family=Lato&family=Oswald&display=swap" rel="stylesheet" />
</head>

<body>
  <div id="bloc_principal">
    <header>
      <img src="./assets/images/banniere.png" alt="Passion Marathons - Agence spécialisées dans les marathons" />
      <h1 class="texts" tabindex="0">Aller au bout de soi-même</h1>
    </header>
    <nav>
      <a class="texts" tabindex="0" href="./index.php"><img src="./assets/images/menu/house.svg" alt="L'accueil" /> Accueil </a>

      <a class="texts" tabindex="0" href="./pages/marathons.php">
        <img src="./assets/images/menu/dest.svg" alt="Les marathons dans le monde" />
        Marathons
      </a>

      <a class="texts" tabindex="0" href="./pages/alimentation.html">
        <img src="./assets/images/menu/conseils.svg" alt="Conseils pour la préparation d'un marathon" />
        Conseils
      </a>

      <a class="texts" tabindex="0" href="#">
        <img src="./assets/images/menu/tems.svg" alt="Témoignages de marathoniens" />
        Témoignages
      </a>

      <a class="texts" tabindex="0" href="./pages/auteurs.html">
        <img src="./assets/images/menu/nous.svg" alt="Equipe de Passion Marathons" />
        L'équipe
      </a>

    </nav>
    <div id="alaune">
      <img src="./assets/images/home/alaune/new-york.jpg" alt="Ligne d'arrivée du marathon de New York" />
      <div tabindex="0">
        <p class="texts" tabindex="0">By Greg / Juillet 2023</p>
        <p class="texts" tabindex="0">L'aventure d'une vie</p>
        <a class="texts" href="#" tabindex="0">Lire plus</a>
      </div>
    </div>
    <section id="articles">
      <div tabindex="0" class="titre_section">
        <h2 class="texts" tabindex="0">Nos derniers articles</h2>
      </div>
      <div>
        <a tabindex="0" href="#">
          <figure>
            <div>
              <img src="./assets/images/home/articles/medoc.jpg" alt="Marathon du Médoc" />
            </div>
            <figcaption>
              <h2 class="texts" tabindex="0">Le marathon du médoc</h2>
              <p class="texts" tabindex="0">Course - France - Nouvelle aquitaine</p>
            </figcaption>
          </figure>
        </a>
        <a tabindex="0" href="#">
          <figure>
            <div>
              <img src="./assets/images/home/articles/cognac.jpg" alt="Marathon de Cognac" />
            </div>
            <figcaption>
              <h2 class="texts" tabindex="0">Le marathon de cognac</h2>
              <p class="texts" tabindex="0">Course - France - Nouvelle aquitaine</p>
            </figcaption>
          </figure>
        </a>
        <a tabindex="0" href="./pages/alimentation.html">
          <figure>
            <div>
              <img src="./assets/images/home/articles/dietetique.jpg" alt="Préparation marathon" />
            </div>
            <figcaption>
              <h2 class="texts">Alimentation avant la course</h2>
              <p class="texts">Conseils</p>
            </figcaption>
          </figure>
        </a>
      </div>
    </section>
    <section id="temoignage">
      <div tabindex="0" class="titre_section">
        <h2 class="texts">Sur la ligne d'arrivée</h2>
      </div>
      <div>
        <blockquote tabindex="0">
          <em class="texts">Au départ : une adrénaline de ouf, au 32ème : un coup de barre
            XXL</em>
        </blockquote>
        <p class="texts" tabindex="0">
          L’hymne américain retenti, le coup de canon part…la course est
          lancée. A moi New York mais avant il va falloir passer le Verazano
          Brigde. ça grimpe dur mais qu’est ce que c’est beau. Ensuite c’est
          42,190 dans les 5 quartiers de New York avec du monde (beaucoup de
          monde) sur le bord de route. L’ambiance est dingue. Les new yorkais
          sont fous surtout à Brooklyn. Le parcours est compliqué car beaucoup
          de ligne droite en faut plat montant et les ponts sont de vrais col
          ! L’arrivée à central Park est grandiose avec du monde mêlés au
          couleur de l’automne. A noté qu’il y a très peu de nourriture au
          ravitaillement si ce n’est deux points où ils distribuent des gels.
          Il faut mieux prévoir ! Sinon il y a à boire tous les miles (1,6km)
          sauf sur les ponts.
        </p>
        <img src="./assets/images/home/temoignage/new-york-ligne.jpg" alt="temoignages_newyork" />
      </div>
    </section>
    <section id="instagram">
      <div class="titre_section">
        <h2 class="texts" tabindex="0">Passion Marathons sur Instagram</h2>
      </div>

      <div>
        <?php
        $images = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18];
        $del = [];
        for ($i = 1; $i <= 10; $i++) {
          do {
            $num = $images[rand(0, 17)];
          } while (in_array($num, $del));

          $del[] = $num;

          echo
          '<a href="#" style="
            background-image: url(./assets/images/home/instagram/insta' . $num . '.webp);
            background-size: cover;
            background-position: center center;">
          </a>';
        }
        ?>

      </div>
      <div>
        <a class="texts" tabindex="0" href="https://www.instagram.com">
          <i class="fa-brands fa-instagram"></i> Rejoignez-nous sur Insta
        </a>
      </div>
    </section>
  </div>
  <div id="callToAction" tabindex="0">
    <p class="texts" id="titreCTA">Pour une <strong class="texts" id="strongCTA">performance optimale</strong> confiez-nous :</p>
    <a class="texts" href="#" tabindex="0">Votre préparation mentale</a>
    <a class="texts" href="#" tabindex="0">L'organisation de votre prochaine course</a>
    <a class="texts" href="#" tabindex="0">Un coatching personnalisé en nutrition</a>
  </div>
  <section class="accessButtons">

    <button tabindex="0" id="buttonIncrease">A+</button>
    <button tabindex="0" id="buttonDecrease">A-</button>
    <button tabindex="0" id="buttonDys">Dyslexique</button>
    
    <div style="color: white;" class="errorMessage"></div>
  </section>
  <script src="./assets/js/accessButtons.js"></script>
  <footer>
    <p class="texts" tabindex="0">
      Copyright : Passion Marathons 2015/2023 - contac@passionmarathons.com
    </p>
    <a class="texts" tabindex="0" href="./pages/auteurs.html">Les auteurs du site </a>
    <a class="texts" tabindex="0" href="#bloc_principal">Haut de la page</a>
  </footer>

</body>

</html>