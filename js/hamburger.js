/* ----------------  Menu Toggle   ---------------------------------*/

var toggleBtn = document.querySelector('#menu-icon');
var sidebar = document.querySelector('#sidebar');

toggleBtn.addEventListener('click', function() {
  toggleBtn.classList.toggle('active');
  sidebar.classList.toggle('active');
})

/* ------------------- Dropdown menu -------------- */

var dropdown = document.getElementsByClassName("dropdown-btn");
var i;

for (i = 0; i < dropdown.length; i++) {
  dropdown[i].addEventListener("click", function() {
    this.classList.toggle("visible");
    var dropdownContent = this.nextElementSibling;
    if (dropdownContent.style.display === "block") {
      dropdownContent.style.display = "none";
    } else {
      dropdownContent.style.display = "block";
    }
  });
}

