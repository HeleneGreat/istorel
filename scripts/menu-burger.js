const burger = document.getElementById("burger");

function toggleIcon() {
  burger.classList.contains('actif')
    ? burger.textContent = "⛌"
    : burger.textContent = "☰"
}
toggleIcon();

burger.addEventListener("click", function() {
  burger.classList.toggle('actif');
  toggleIcon()
});

burger.addEventListener("click", function() {
  menu.classList.toggle('active');
  toggleIcon()
});