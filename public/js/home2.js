//carrusel empresas
const btnLeft = document.querySelector(".btn-left2"),
      btnRight = document.querySelector(".btn-right2"),
      slider = document.querySelector("#slider2"),
      sliderSection = document.querySelectorAll(".slider-section2");


btnLeft.addEventListener("click", e => moveToLeft())
btnRight.addEventListener("click", e => moveToRight())

setInterval(() => {
    moveToRight()
}, 8000);

 
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

// carteles
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

//fotos de las rutas rutas
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