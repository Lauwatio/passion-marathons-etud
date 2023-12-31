<!DOCTYPE html>
<html id="calculettehtml">

<head>
  <title>Passion Marathons | Calculette</title>
  <meta charset="utf-8" />
  <link rel="stylesheet" href="./../assets/css/stylefinal.css" type="text/css" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Lato&family=Oswald&display=swap" rel="stylesheet" />
</head>

<body>
  <div id="cadre">
    <div id="bloc_principalcalc">
      <header>
        <img src="./../assets/images/bannierecalculatrice.png" alt="Passion Marathons - Agence spécialisées dans les marathons" />
      </header>
    </div>

    <div id="calculette">
      <h2 id="consTitle" class="texts" tabindex="0">Consommation en Kcal par minute</h2>

      <label for="vit" class="texts" tabindex="0">Vitesse de course :</label>
      <div>
        <input type="text" id="vit" />
        <p class="texts" tabindex="0">km/h</p>
      </div>

      <label for="temps" class="texts" tabindex="0">Temps de course :</label>
      <div>
        <input type="text" id="temps" />
        <p class="texts" tabindex="0">min</p>
      </div>

      <label for="poids" class="texts" tabindex="0">Poids :</label>
      <div>
        <input type="text" id="poids" />
        <p class="texts" tabindex="0">kg</p>
      </div>
    </div>
    <button id="btncalc" class="texts" tabindex="0">Calculer</button>
    <div id="kal"></div>
    <div id="com"></div>
    <script src="./../assets/js/calculette.js"></script>

    <?php
    $nbMac = isset($_GET['nbMac']) ? $_GET['nbMac'] : null;
    for ($i = 1; $i <= $nbMac; $i = $i + 1) {
      echo '<img id="macaronimg"src="./../assets/images/macarons/macaron.png" alt="Macaron">';
    }
    ?>
  </div>
  <div>
    <nav id="retourcalc">
      <a id="retoursconseils" href="./../pages/alimentation.html" class="texts" tabindex="0">
        Retour aux Conseils
      </a>
    </nav>
  </div>
</body>
<section class="accessButtons">
  <button tabindex="0" id="buttonIncrease">A+</button>
  <button tabindex="0" id="buttonDecrease">A-</button>
  <button tabindex="0" id="buttonDys">Dyslexique</button>
  <div style="color: white;" class="errorMessage"></div>
</section>
<script src="./../assets/js/accessButtons.js"></script>

</html>