const navToggle = document.querySelector(".nav-toggle")
const navMenu = document.querySelector(".nav-menu")
const scroll_1= document.getElementById("scroll_1")
const scroll_2= document.getElementById("scroll_2")

navToggle.addEventListener("click",() => {
    navMenu.classList.toggle("nav-menu-visible");
})
window.addEventListener("scroll",()=>{
    scroll_1.style.opacity="1";
    scroll_2.style.opacity="1";
})
