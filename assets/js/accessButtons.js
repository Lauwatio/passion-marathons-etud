document.addEventListener("DOMContentLoaded", function () {
  const buttonDys = document.getElementById("buttonDys");
  const buttonIncrease = document.getElementById("buttonIncrease");

  buttonDys.addEventListener("click", function () {
    document.body.classList.toggle("dys");
  });
  buttonIncrease.addEventListener("click", function () {
    // Obtenez la taille de police actuelle (en pixels)
    const currentSize = window.getComputedStyle(document.body).fontSize;

    // Convertissez la taille actuelle en nombre
    const currentSizeNumeric = parseFloat(currentSize);

    // Augmentez la taille de 5 pixels (ajustez selon vos préférences)
    const newSize = currentSizeNumeric + 5;

    // Appliquez la nouvelle taille de police au corps du document
    document.body.style.fontSize = newSize + "px";
  });
});
