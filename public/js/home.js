//Ayuda
var botonMostrar = document.getElementById("mostrarFormulario");
var ventanaEmergente = document.getElementById("ventanaEmergente");

botonMostrar.addEventListener("click", () => {
  ventanaEmergente.style.display = "flex"; // Mostrar la ventana emergente
});

ventanaEmergente.addEventListener("click", (event) => {
  if (event.target === ventanaEmergente) {
    ventanaEmergente.style.display = "none"; // Ocultar la ventana emergente al hacer clic fuera de ella
  }
});



// carrusel  mision-vision
document.addEventListener("DOMContentLoaded", function () {
  var btnRight = document.querySelector(".btn-right"),
      btnLeft = document.querySelector(".btn-left"),
      slider = document.querySelector("#slider"),
      sliderSection = document.querySelectorAll(".slider-section");

  let operacion = 0,
      counter = 0,
      widthImg = 20 / sliderSection.length;

  btnLeft.addEventListener("click", e => moveToLeft());
  btnRight.addEventListener("click", e => moveToRight());

  setInterval(() => {
      moveToRight();
  }, 40000);

  function moveToRight() {
      if (counter >= sliderSection.length - 1) {
          counter = 0;
          operacion = 0;
          slider.style.transform = `translate(-${operacion}%)`;
          slider.style.transition = "none";
          return;
      }
      counter++;
      operacion = operacion + widthImg;
      slider.style.transform = `translate(-${operacion}%)`;
      slider.style.transition = "all ease .6s";
  }

  function moveToLeft() {
      counter--;
      if (counter < 0) {
          counter = sliderSection.length - 1;
          operacion = widthImg * (sliderSection.length - 1);
          slider.style.transform = `translate(-${operacion}%)`;
          slider.style.transition = "none";
          return;
      }
      operacion = operacion - widthImg;
      slider.style.transform = `translate(-${operacion}%)`;
      slider.style.transition = "all ease .6s";
  }
});

