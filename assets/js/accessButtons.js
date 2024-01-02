document.addEventListener("DOMContentLoaded", function () {
  const buttonDys = document.getElementById("buttonDys");
  const buttonIncrease = document.getElementById("buttonIncrease");
  const buttonDecrease = document.getElementById("buttonDecrease");
  const texts = document.querySelector(".texts");
  const errorMessage = document.querySelector(".errorMessage");

  buttonDys.addEventListener("click", function () {
    document.body.classList.toggle("dys");
  });
  buttonIncrease.addEventListener("click", () => {
    let textSize = window.getComputedStyle(texts).fontSize;
    textSize = parseInt(textSize);
    errorMessage.textContent = "";
    if (textSize < 50) {
      texts.style.fontSize = textSize + 5 + "px";
    } else {
      errorMessage.textContent = "Vous êtes à la taille maximale";
    }
  });
  buttonDecrease.addEventListener("click", () => {
    let textSize = window.getComputedStyle(texts).fontSize;
    textSize = parseInt(textSize);
    errorMessage.textContent = "";
    if (12 < textSize) {
      texts.style.fontSize = textSize - 5 + "px";
    } else {
      errorMessage.textContent = "Vous êtes à la taille minimale";
    }
  });
});
