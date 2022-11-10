/*let btnContainer = document.getElementById("lista");
let btns = btnContainer.getElementsByClassName("nav-link");

for(let i = 0; i < btns.length; i++){
    btns[i].addEventListener('click', function(){
        let current = document.getElementsByClassName("active");
        current[0].className = current[0].className.replace(" active");
        this.className += " active";
    })
}*/

//Animation Scroll reveal
ScrollReveal().reveal('.navbar', { delay: 500 });
ScrollReveal().reveal('.hero', { delay: 500 });
ScrollReveal().reveal('.nosotros', { delay: 500 });
ScrollReveal().reveal('.quienes-somos', { delay: 500 });
ScrollReveal().reveal('.text-mv', { delay: 500 });
ScrollReveal().reveal('.mv-style', { delay: 500 });
ScrollReveal().reveal('.principios', { delay: 500 });
ScrollReveal().reveal('.fundadores', { delay: 500 });
ScrollReveal().reveal('.servicios', { delay: 500 });
ScrollReveal().reveal('.location', { delay: 500 });
ScrollReveal().reveal('.questions', { delay: 500 });
ScrollReveal().reveal('.contacto', { delay: 500 });
ScrollReveal().reveal('.footer', { delay: 500 });

//primer link activo
let firstLink = document.getElementById("first-link");

window.addEventListener('scroll', () => {
    if (window.scrollY >= 0 && window.scrollY <= 500){
        firstLink.classList.add('nav-link-active');
    }else{
        firstLink.classList.remove('nav-link-active');
    }
})

//segundo link activo
let secondLink = document.getElementById("second-link");

window.addEventListener('scroll', () => {
    if (window.scrollY > 500 && window.scrollY <= 3200){
        secondLink.classList.add('nav-link-active');
    }else{
        secondLink.classList.remove('nav-link-active');
    }
})

//tercer link activo
let thirdLink = document.getElementById("third-link");

window.addEventListener('scroll', () => {
    if (window.scrollY >3200 && window.scrollY <= 4600){
        thirdLink.classList.add('nav-link-active');
    }else{
        thirdLink.classList.remove('nav-link-active');
    }
})

//cuarto link activo
let fourthLink = document.getElementById("fourth-link");

window.addEventListener('scroll', () => {
    if (window.scrollY >4600 && window.scrollY <= 5221){
        fourthLink.classList.add('nav-link-active');
    }else{
        fourthLink.classList.remove('nav-link-active');
    }
})

//quinto link activo
let fivethLink = document.getElementById("fiveth-link");

window.addEventListener('scroll', () => {
    if (window.scrollY >5221 && window.scrollY <= 5600){
        fivethLink.classList.add('nav-link-active');
    }else{
        fivethLink.classList.remove('nav-link-active');
    }
})

//sexto link activo
let sixthLink = document.getElementById("sixth-link");

window.addEventListener('scroll', () => {
    if (window.scrollY >5600 && window.scrollY <= 6000){
        sixthLink.classList.add('nav-link-active');
    }else{
        sixthLink.classList.remove('nav-link-active');
    }
})

//cambio de color del menu de navegación
let navColor = document.getElementById("navbar");

window.addEventListener('scroll', () => {
    if (window.scrollY >= 50){
        navColor.classList.add('bg-dark');
    }else{
        navColor.classList.remove('bg-dark');
    }
})

