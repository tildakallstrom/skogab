function hamburgermenu(m) {
     m.classList.toggle("change");
   }

   /* annan meny */
   // variabler för navbar/hamburgarmeny
   let navbar = document.querySelector(".navbar")
   let ham = document.querySelector(".ham")

   // funktion för att klicka i och klicka ur meny
   function toggleHamburger() {
     // öppna
     navbar.classList.toggle("showNav")
     // stäng
     ham.classList.toggle("showClose")
   }
   // eventlyssnare till click
   ham.addEventListener("click", toggleHamburger)

   // sätter styling på den länk man befinner sig på
   let navElement = document.getElementById("menu-menu-1");

   for (let i = 0; i < navElement.childElementCount; i++) {
     if (window.location.href.split("?")[0] === navElement.children[i].children[0].href.split("?")[0]) {
       navElement.children[i].children[0].classList.add("menyhere");
     }
   }
