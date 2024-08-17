const toggle_menu = document.getElementById("toogleMenu");
const container_menu = document.getElementById("container-menu");
const slider = document.getElementById("carouselExampleAutoplaying");

toggle_menu.addEventListener("click", toggleMenu);
function toggleMenu() {
if (container_menu.style.display === 'block') {
  container_menu.style.display = 'none';
  slider.style.display = 'block';
        } else {
          container_menu.style.display = 'block';
          slider.style.display = 'none';
        }
}