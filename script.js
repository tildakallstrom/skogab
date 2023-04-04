function hamburgermenu(m) {
     m.classList.toggle("change");
   }

   let navbar = document.querySelector(".navbar")
   let ham = document.querySelector(".ham")

   function toggleHamburger() {
     navbar.classList.toggle("showNav")
     ham.classList.toggle("showClose")
   }
   ham.addEventListener("click", toggleHamburger)

   let navElement = document.getElementById("menu-menu-1");

   for (let i = 0; i < navElement.childElementCount; i++) {
     if (window.location.href.split("?")[0] === navElement.children[i].children[0].href.split("?")[0]) {
       navElement.children[i].children[0].classList.add("menyhere");
     }
   }