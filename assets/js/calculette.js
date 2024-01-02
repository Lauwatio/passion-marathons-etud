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
    return m;
  }
  function nombreMac(a) {
    let n = a / 100;
    n = Math.floor(n);
    return n;
  }

  btncalc.addEventListener("click", function () {
    let vitVal = Number(vit.value);
    let tempsVal = Number(temps.value);
    let poidsVal = Number(poids.value);

    let kalVal = calculKal(vitVal, tempsVal, poidsVal);
    let nbMac = nombreMac(kalVal);
    if (kalVal <= 100) {
      com.innerHTML = "Accrochez-vous!!";
    }
    if (kalVal > 100 || calories <= 500) {
      com.innerHTML = "Continuez comme ça !!";
    }
    if (kalVal > 500) {
      com.innerHTML = "Quelle performance !!";
    }
    localStorage.setItem(
      "derniereInfoKal",
      JSON.stringify({
        calories: kalVal,
        temps: tempsVal,
      })
    );

    const url =
      "http://localhost/passion-marathons-etud/pages/calculette.php?nbMac=" +
      encodeURIComponent(nbMac);
    window.location.href = url;
  });

  const derniereInfoKal = localStorage.getItem("derniereInfoKal");
  if (derniereInfoKal) {
    const { calories, temps } = JSON.parse(derniereInfoKal);
    kal.innerHTML = `Vous allez dépenser ${calories} kal en ${temps} minutes.`;
  }
});
