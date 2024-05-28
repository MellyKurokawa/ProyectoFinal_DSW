
//Variable que almacena el índice de la diapositiva actualmente visible en el carrusel. Se inicializa en 0, indicando que la primera diapositiva es la que se muestra al inicio
let currentSlide = 0;

// HEEEEEEEEAAAAAADDDDDEEEEEERRR//

//Actualiza la posición del contenedor del carrusel para mostrar la diapositiva correspondiente, creando el efecto de desplazamiento entre diapositivas
function moveSlide(direction) {
  const slides = document.querySelectorAll('.carousel-slide');
  const totalSlides = slides.length;
  
  currentSlide = (currentSlide + direction + totalSlides) % totalSlides;
  
  const container = document.querySelector('.carousel-container');
  container.style.transform = `translateX(-${currentSlide * 100}%)`;
}


