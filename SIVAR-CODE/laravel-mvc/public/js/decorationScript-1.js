// SLIDER AAAAAAA
const slider = document.getElementById("slider");
let sliderSection = document.querySelectorAll(".slider__section");
let sliderSectionLast = sliderSection[sliderSection.length -1];

const btnRight = document.getElementById("btn-right");
const btnLeft = document.getElementById("btn-left");

slider.insertAdjacentElement('afterbegin', sliderSectionLast);

let next = ()=>{
    let sliderSectionFirst = document.querySelectorAll(".slider__section")[0];
    slider.style.marginLeft = "-200%";
    slider.style.transition = "all 250ms ease 0s";
    setTimeout(function(){
        slider.style.transition = "none";
        slider.insertAdjacentElement('beforeend', sliderSectionFirst);
        slider.style.marginLeft = "-100%";
    }, 250);
}

let prev = ()=>{
    let sliderSection = document.querySelectorAll(".slider__section");
    let sliderSectionLast = sliderSection[sliderSection.length -1];
    slider.style.marginLeft = "0";
    slider.style.transition = "all 250ms ease 0s";
    setTimeout(function(){
        slider.style.transition = "none";
        slider.insertAdjacentElement('afterbegin', sliderSectionLast);
        slider.style.marginLeft = "-100%";
    }, 250);
}

btnRight.addEventListener("click", function(){next()});
btnLeft.addEventListener("click", function(){prev()});

setInterval(() => {
        next();
}, 7000);

// MENU RESPONSIVE AAAAAAAAAAAAA

let menuToggle = document.querySelector(".menu-toggle");
let menuToggleIcon = document.querySelector(".menu-toggle i");
let menu = document.getElementById("nav-menu");

menuToggle.addEventListener("click", e=>{
    menu.classList.toggle("show");

    if(menu.classList.contains("show")){
        menuToggleIcon.setAttribute("class", "fa fa-times");
        menuToggleIcon.classList.toggle("x-icon");
    }
    else{
        menuToggleIcon.setAttribute("class", "fa fa-bars");
    };
});

// nav AAAAA

window.addEventListener("scroll", function(){
    let header = document.querySelector("header");
    let carrito = document.querySelector(".carrito-nav");
    let menuNav = document.querySelector(".menu-nav");
    let dollar = document.querySelector(".dollar-nav");
    let Lista = document.querySelector(".Lista-nav");
    header.classList.toggle("sticky", window.scrollY > 0);
    header.classList.toggle("pegao", window.scrollY == 0);
    if(window.scrollY > 0){
        Lista.src = "../resource/icons/bolsa-black.png";
        carrito.src = "../resource/icons/cart-solid-black.png";
        menuNav.src = "../resource/icons/menu-alt-left-regular-black.png";
        dollar.src = "../resource/icons/dollar-circle-solid-black.png";
        let carritoHover = document.getElementById("carrito-div");
        let menuDiv = document.getElementById("the-menu-div");
        let dolarDiv = document.getElementById("dolar-div");
        let listaDiv = document.getElementById("Lista-div");
        listaDiv.addEventListener("mouseover", function(){
            Lista.src = "../resource/icons/bolsa-red.png";
        })
        carritoHover.addEventListener("mouseover", function(){
            carrito.src = "../resource/icons/cart-solid-red.png";
        })
        carritoHover.addEventListener("mouseout", function(){
            carrito.src = "../resource/icons/cart-solid-black.png";
        })
        menuDiv.addEventListener("mouseover", function(){
            menuNav.src = "../resource/icons/menu-alt-left-regular-red.png";
        })
        menuDiv.addEventListener("mouseout", function(){
            menuNav.src = "../resource/icons/menu-alt-left-regular-black.png";
        })
        dolarDiv.addEventListener("mouseover",function(){
            dollar.src = "../resource/icons/dollar-circle-solid-red.png";
        })
        dolarDiv.addEventListener("mouseout",function(){
            dollar.src = "../resource/icons/dollar-circle-solid-black.png";
        })
    }
    if(window.scrollY == 0){
        Lista.src = "../resource/icons/bolsa-white.png";
        carrito.src = "../resource/icons/cart-solid-white.png";
        menuNav.src = "../resource/icons/menu-alt-left-regular-white.png";
        dollar.src = "../resource/icons/dollar-circle-solid-white.png";
        let carritoHover = document.getElementById("carrito-div");
        let menuDiv = document.getElementById("the-menu-div");
        let dolarDiv = document.getElementById("dolar-div");
        let listaDiv = document.getElementById("Lista-div");
        listaDiv.addEventListener("mouseover", function(){
            Lista.src = "../resource/icons/bolsa-red.png";
        })
        carritoHover.addEventListener("mouseover", function(){
            carrito.src = "../resource/icons/cart-solid-red.png";
        })
        carritoHover.addEventListener("mouseout", function(){
            carrito.src = "../resource/icons/cart-solid-white.png";
        })
        menuDiv.addEventListener("mouseout", function(){
            menuNav.src = "../resource/icons/menu-alt-left-regular-white.png";
        })
        dolarDiv.addEventListener("mouseover",function(){
            dollar.src = "../resource/icons/dollar-circle-solid-red.png";
        })
        dolarDiv.addEventListener("mouseout",function(){
            dollar.src = "../resource/icons/dollar-circle-solid-white.png";
        })
    }
})