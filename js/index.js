const nav = document.getElementById("auth");
const button = document.getElementById("register");

let bars = document.querySelector(".bars");
let navMenu = document.querySelector(".nav-menu");

if(!sessionStorage.getItem("auth")){
  nav.innerHTML = "Register";
  nav.href = "register.html";

  button.innerHTML = "Register";
  button.href = "register.html";
} else {
  nav.innerHTML = "TODO";
  nav.href = "todo.html";

  button.innerHTML = "Get started!";
  button.href = "todo.html";
}


bars.addEventListener("click", (e) => {
  e.preventDefault();

  navMenu.classList.toggle("active");
  bars.classList.toggle("active");
});