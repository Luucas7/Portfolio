// Déclaration de la variable hamburgerButton et récupération de l'élément HTML avec la classe "nav-toggler"
const hamburgerButton = document.querySelector(".nav-toggler");

// Déclaration de la variable navigation et récupération de l'élément HTML <nav>
const navigation = document.querySelector("nav");

// Ajout d'un écouteur d'événement "click" sur l'élément hamburgerButton qui appellera la fonction toggleNav
hamburgerButton.addEventListener("click", toggleNav);

// Ajout d'un écouteur d'événement "click" sur l'élément navigation qui appellera la fonction toggleNav
navigation.addEventListener("click", toggleNav);

// Définition de la fonction toggleNav qui sera appelée lors du clic sur les éléments hamburgerButton ou navigation
function toggleNav() {
  // Ajout ou suppression de la classe "active" sur l'élément hamburgerButton pour afficher ou masquer le bouton hamburger
  hamburgerButton.classList.toggle("active");
  // Ajout ou suppression de la classe "active" sur l'élément navigation pour afficher ou masquer le menu de navigation
  navigation.classList.toggle("active");
}