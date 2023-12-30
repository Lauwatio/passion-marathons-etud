window.addEventListener("DOMContentLoaded", function () {
  // mise en cache de tous les objets de la page HTML : Variables globales
  const lauwamail = document.getElementById("lauwamail");
  const lauwadiscord = document.getElementById("lauwadiscord");
  const quentinmail = document.getElementById("quentinmail");
  const lauwam = document.getElementById("lauwam");
  const lauwadisc = document.getElementById("lauwadisc");
  const quentinm = document.getElementById("quentinm");

  lauwam.addEventListener("click", function () {
    lauwamail.style.display = "block";
    if ((lauwadiscord.style.display = "block")) {
      lauwadiscord.style.display = "none";
    }
  });
  lauwadisc.addEventListener("click", function () {
    lauwadiscord.style.display = "block";
    if ((lauwamail.style.display = "block")) {
      lauwamail.style.display = "none";
    }
  });
  quentinm.addEventListener("click", function () {
    if ((quentinmail.style.display = "none")) {
      quentinmail.style.display = "block";
    } else {
      quentinmail.style.display = "none";
    }
  });
});
