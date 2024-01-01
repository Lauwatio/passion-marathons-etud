<!DOCTYPE html>
<html>

<head>
  <title>Passion Marathons | Calculette</title>
  <meta charset="utf-8" />
  <link rel="stylesheet" href="./../assets/css/calculette.css" type="text/css" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Lato&family=Oswald&display=swap" rel="stylesheet" />
</head>

<body>
  <div id="bloc_principal">
    <header>
      <img src="./../assets/images/bannierecalculatrice.png" alt="Passion Marathons - Agence spécialisées dans les marathons" />
    </header>

  </div>
  <div id="calculette">
    <h2 id="consTitle">Consommation en Kcal par minute</h2>

    <label for="vit">Vitesse de course :</label>
    <div>
      <input type="text" id="vit" />
      <p>km/h</p>
    </div>

    <label for="temps">Temps de course :</label>
    <div>
      <input type="text" id="temps" />
      <p>min</p>
    </div>

    <label for="poids">Poids :</label>
    <div>
      <input type="text" id="poids" />
      <p>kg</p>
    </div>
  </div>
  <button id="btn">Calculer</button>
  <div id="kal"></div>

  <script src="./../assets/js/calculette.js"></script>

  <?php
  $nbMac = isset($_GET['nbMac']) ? $_GET['nbMac'] : null;
  for ($i = 1; $i <= $nbMac; $i = $i + 1) {
    echo '<img src="./../assets/images/macarons/macaron.png" alt="Macaron">';
  }
  ?>
  <footer>
    <nav>
      <a href="./../pages/alimentation.html">
        Retour aux Conseils
      </a>
    </nav>
  </footer>
</body>

</html>