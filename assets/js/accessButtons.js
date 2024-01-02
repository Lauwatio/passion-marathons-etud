document.addEventListener("DOMContentLoaded", function () {
  const buttonDys = document.getElementById("buttonDys");

  buttonDys.addEventListener("click", function () {
    document.body.classList.toggle("dys");
  });
});
