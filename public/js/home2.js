//carrusel empresas
const btnLeft = document.querySelector(".btn-left2"),
      btnRight = document.querySelector(".btn-right2"),
      slider = document.querySelector("#slider2"),
      sliderSection = document.querySelectorAll(".slider-section2");


btnLeft.addEventListener("click", e => moveToLeft())
btnRight.addEventListener("click", e => moveToRight())

setInterval(() => {
    moveToRight()
}, 15000);

 
let operacion = 0,
    counter = 0,
    widthImg = 40 / sliderSection.length;

function moveToRight() {
    if (counter >= sliderSection.length-1) {
        counter = 0;
        operacion = 0;
        slider.style.transform = `translate(-${operacion}%)`;
        slider.style.transition = "none";
        return;
    } 
    counter++;
    operacion = operacion + widthImg;
    slider.style.transform = `translate(-${operacion}%)`;
    slider.style.transition = "all ease .6s"
    
}  

function moveToLeft() {
    counter--;
    if (counter < 0 ) {
        counter = sliderSection.length-1;
        operacion = widthImg * (sliderSection.length-1)
        slider.style.transform = `translate(-${operacion}%)`;
        slider.style.transition = "none";
        return;
    } 
    operacion = operacion - widthImg;
    slider.style.transform = `translate(-${operacion}%)`;
    slider.style.transition = "all ease .6s"
    
    
}   

// carteles transpubenza
var botonMostrar3 = document.getElementById("mostrarFormulario3");
var ventanaEmergente3 = document.getElementById("ventanaEmergente3");

botonMostrar3.addEventListener("click", () => { 
  ventanaEmergente3.style.display = "flex"; // Mostrar la ventana emergente
});

ventanaEmergente3.addEventListener("click", (event) => {
  if (event.target === ventanaEmergente3) {
    ventanaEmergente3.style.display = "none"; // Ocultar la ventana emergente al hacer clic fuera de ella
  }
});

//mapa pubenza
var botonMostrar4 = document.getElementById("mostrarFormulario4");
var ventanaEmergente4 = document.getElementById("ventanaEmergente4");

botonMostrar4.addEventListener("click", () => { 
  ventanaEmergente4.style.display = "flex"; // Mostrar la ventana emergente
});

ventanaEmergente4.addEventListener("click", (event) => {
  if (event.target === ventanaEmergente4) {
    ventanaEmergente4.style.display = "none"; // Ocultar la ventana emergente al hacer clic fuera de ella
  }
});

// carteles libertad
var botonMostrar5 = document.getElementById("mostrarFormulario5");
var ventanaEmergente5 = document.getElementById("ventanaEmergente5");

botonMostrar5.addEventListener("click", () => { 
  ventanaEmergente5.style.display = "flex"; // Mostrar la ventana emergente
});

ventanaEmergente5.addEventListener("click", (event) => {
  if (event.target === ventanaEmergente5) {
    ventanaEmergente5.style.display = "none"; // Ocultar la ventana emergente al hacer clic fuera de ella
  }
});

//mapa libertad
var botonMostrar6 = document.getElementById("mostrarFormulario6");
var ventanaEmergente6 = document.getElementById("ventanaEmergente6");

botonMostrar6.addEventListener("click", () => { 
  ventanaEmergente6.style.display = "flex"; // Mostrar la ventana emergente
});

ventanaEmergente6.addEventListener("click", (event) => {
  if (event.target === ventanaEmergente6) {
    ventanaEmergente6.style.display = "none"; // Ocultar la ventana emergente al hacer clic fuera de ella
  }
});

// carteles metro
var botonMostrar7 = document.getElementById("mostrarFormulario7");
var ventanaEmergente7 = document.getElementById("ventanaEmergente7");

botonMostrar7.addEventListener("click", () => { 
  ventanaEmergente7.style.display = "flex"; // Mostrar la ventana emergente
});

ventanaEmergente7.addEventListener("click", (event) => {
  if (event.target === ventanaEmergente7) {
    ventanaEmergente7.style.display = "none"; // Ocultar la ventana emergente al hacer clic fuera de ella
  }
});

//metro mapa
var botonMostrar8 = document.getElementById("mostrarFormulario8");
var ventanaEmergente8 = document.getElementById("ventanaEmergente8");

botonMostrar8.addEventListener("click", () => { 
  ventanaEmergente8.style.display = "flex"; // Mostrar la ventana emergente
});

ventanaEmergente8.addEventListener("click", (event) => {
  if (event.target === ventanaEmergente8) {
    ventanaEmergente8.style.display = "none"; // Ocultar la ventana emergente al hacer clic fuera de ella
  }
});

// carteles tambo
var botonMostrar9 = document.getElementById("mostrarFormulario9");
var ventanaEmergente9 = document.getElementById("ventanaEmergente9");

botonMostrar9.addEventListener("click", () => { 
  ventanaEmergente9.style.display = "flex"; // Mostrar la ventana emergente
});

ventanaEmergente9.addEventListener("click", (event) => {
  if (event.target === ventanaEmergente9) {
    ventanaEmergente9.style.display = "none"; // Ocultar la ventana emergente al hacer clic fuera de ella
  }
});

//metro tambo
var botonMostrar10 = document.getElementById("mostrarFormulario10");
var ventanaEmergente10 = document.getElementById("ventanaEmergente10");

botonMostrar10.addEventListener("click", () => { 
  ventanaEmergente10.style.display = "flex"; // Mostrar la ventana emergente
});

ventanaEmergente10.addEventListener("click", (event) => {
  if (event.target === ventanaEmergente10) {
    ventanaEmergente10.style.display = "none"; // Ocultar la ventana emergente al hacer clic fuera de ella
  }
});