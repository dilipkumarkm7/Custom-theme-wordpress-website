document.addEventListener('DOMContentLoaded', function () {
     const dropdownToggle = document.querySelector('.dropdown-toggle');
     const dropdown = document.querySelector('.dropdown');

     dropdownToggle.addEventListener('click', function (e) {
          e.preventDefault();
          dropdown.classList.toggle('show');
     });
     document.addEventListener('click', function (e) {
          if (!dropdown.contains(e.target)) {
               dropdown.classList.remove('show');
          }
     });
});
function toggleMenu() {
     document.getElementById("navbarMenu").classList.toggle("active");
}
function toggleDropdown(e) {
     e.preventDefault();
     document.getElementById("dropdownContent").classList.toggle("show");
}
document.addEventListener("DOMContentLoaded", function () {
     const menu = document.getElementById("navbarMenu");
     const links = menu.querySelectorAll("a:not(.dropdown-toggle)");

     links.forEach(link => {
          link.addEventListener("click", () => {
               if (menu.classList.contains("active")) {
                    menu.classList.remove("active");
                    document.getElementById("dropdownContent").classList.remove("show");
               }
          });
     });
});  