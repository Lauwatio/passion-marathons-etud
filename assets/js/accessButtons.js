document.addEventListener("DOMContentLoaded", function () {
  const buttonDys = document.getElementById("buttonDys");
  const buttonIncrease = document.getElementById("buttonIncrease");
  const buttonDecrease = document.getElementById("buttonDecrease");
  const texts = document.querySelectorAll(".texts");
  const errorMessage = document.querySelector(".errorMessage");

  buttonDys.addEventListener("click", function () {
    document.body.classList.toggle("dys");
  });
  buttonIncrease.addEventListener("click", () => {
    texts.forEach(function (text) {
      let textSize = window.getComputedStyle(text).fontSize;
      textSize = parseInt(textSize);
      console.log("Current text size:", textSize);
      if (textSize < 50) {
        errorMessage.textContent = "";
        text.style.fontSize = textSize + 5 + "px";
      } else {
        errorMessage.textContent = "Taille maximale";
      }
    });
  });
  buttonDecrease.addEventListener("click", () => {
    texts.forEach(function (text) {
      let textSize = window.getComputedStyle(text).fontSize;
      textSize = parseInt(textSize);
      if (12 < textSize) {
        errorMessage.textContent = "";
        text.style.fontSize = textSize - 5 + "px";
      } else {
        errorMessage.textContent = "Taille minimale";
      }
    });
  });
});
