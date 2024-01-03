window.addEventListener("DOMContentLoaded", function () {
  const vit = document.getElementById("vit");
  const temps = document.getElementById("temps");
  const poids = document.getElementById("poids");
  const btncalc = document.getElementById("btncalc");
  const kal = document.getElementById("kal");
  const com = document.getElementById("com");

  function calculKal(a, b, c) {
    let m = (a * 3.5 * c) / 200;
    m = m * b;
    let com = "";
    if (m <= 100) {
      com = "Accrochez-vous!!";
    }
    if (m > 100 && m <= 500) {
      com = "Continuez comme ça !!";
    }
    if (m > 500) {
      com = "Quelle performance !!";
    }
    localStorage.setItem(
      "dernierCom",
      JSON.stringify({
        message: com,
      })
    );
    return m;
  }
  function nombreMac(a) {
    let n = a / 100;
    n = Math.floor(n);
    localStorage.setItem(
      "affichageMacaron",
      JSON.stringify({
        nbMacaron: n,
      })
    );
    return n;
  }

  btncalc.addEventListener("click", function () {
    let vitVal = Number(vit.value);
    let tempsVal = Number(temps.value);
    let poidsVal = Number(poids.value);

    let kalVal = calculKal(vitVal, tempsVal, poidsVal);
    let nbMac = nombreMac(kalVal);

    localStorage.setItem(
      "derniereInfoKal",
      JSON.stringify({
        calories: kalVal,
        temps: tempsVal,
      })
    );

    const url =
      "http://lnoel.alwaysdata.net/PHP/passion-marathons-etud/pages/calculette.php?nbMac=" +
      encodeURIComponent(nbMac);
    window.location.href = url;
  });

  const derniereInfoKal = localStorage.getItem("derniereInfoKal");
  if (derniereInfoKal) {
    const { calories, temps } = JSON.parse(derniereInfoKal);
    kal.innerHTML = `Vous avez dépensé ${calories} kal en ${temps} minutes.`;
  }
  const dernierCom = localStorage.getItem("dernierCom");
  if (dernierCom) {
    const { message, nbMacaron } = JSON.parse(dernierCom);
    com.innerHTML = `${message}`;
  }
  const affichageMacaron = localStorage.getItem("affichageMacaron");
  if (affichageMacaron) {
    const { nbMacaron } = JSON.parse(affichageMacaron);
    com.innerHTML = `Cela équivaut à ${nbMacaron} macarons !`;
  }
});
