const mobMenu = document.querySelector("#mobMenu");
const closeBtn = document.querySelector("#closeBtn");

if (mobMenu) {
  mobMenu.addEventListener("click", function() {
    openNav();
  })

  closeBtn.addEventListener("click", function() {
    closeNav();
  })
}

function openNav() {
  document.getElementById("mobNavLinks").style.width = "100%";
}

function closeNav() {
  document.getElementById("mobNavLinks").style.width = "0";
}
