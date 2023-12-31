window.addEventListener("DOMContentLoaded", function () {
  const vit = document.getElementById("vit");
  const temps = document.getElementById("temps");
  const poids = document.getElementById("poids");
  const btn = document.getElementById("btn");
  const kal = document.getElementById("kal");

  function calculKal(a, b, c) {
    let m = (a * 3.5 * c) / 200;
    m = m * b;
    return m;
  }
  function nombreMac(a) {
    let n = a / 100;
    n = Math.floor(n);
    return n;
  }

  btn.addEventListener("click", function () {
    let vitVal = Number(vit.value);
    let tempsVal = Number(temps.value);
    let poidsVal = Number(poids.value);

    let kalVal = calculKal(vitVal, tempsVal, poidsVal);
    let nbMac = nombreMac(kalVal);

    // Stockage local pour conserver les informations
    localStorage.setItem(
      "derniereInfoKal",
      JSON.stringify({
        calories: kalVal,
        temps: tempsVal,
      })
    );

    // Redirection avec le paramètre nbMac
    const url =
      "http://localhost/marathons/passion-marathons-etud/pages/calculette.php?nbMac=" +
      encodeURIComponent(nbMac);
    window.location.href = url;
  });

  // Récupération des informations du stockage local au chargement de la page
  const derniereInfoKal = localStorage.getItem("derniereInfoKal");
  if (derniereInfoKal) {
    const { calories, temps } = JSON.parse(derniereInfoKal);
    kal.innerHTML = `Vous allez dépenser ${calories} kal en ${temps} minutes.`;
  }
});
