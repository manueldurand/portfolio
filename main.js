let sidenav = document.getElementById("side_nav");
let openBtn = document.getElementById("openBtn");
let closeBtn = document.getElementById("closeBtn");

openBtn.onclick = openNav;
closeBtn.onclick = closeNav;

/* Set the width of the side navigation to 150px */
function openNav() {
  sidenav.classList.add("active");
  openBtn.classList.add("invisible");
}

/* Set the width of the side navigation to 0 */
function closeNav() {
  sidenav.classList.remove("active");
  openBtn.classList.remove("invisible");
}