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
    console.log("Current text size:", textSize);
    if (textSize < 50) {
      errorMessage.textContent = "";
      texts.style.fontSize = textSize + 5 + "px";
    } else {
      errorMessage.textContent = "Taille maximale";
    }
  });
  buttonDecrease.addEventListener("click", () => {
    let textSize = window.getComputedStyle(texts).fontSize;
    textSize = parseInt(textSize);
    if (12 < textSize) {
      errorMessage.textContent = "";
      texts.style.fontSize = textSize - 5 + "px";
    } else {
      errorMessage.textContent = "Taille minimale";
    }
  });
});
