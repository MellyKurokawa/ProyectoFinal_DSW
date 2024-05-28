
//primer div de estancias 


//Almacena todos los elementos <img> dentro del contenedor con id #slideshow
//El currentIndex guarda el índice de la imagen actualmente visible
var images = document.querySelectorAll('#slideshow img');
var currentIndex = 0;

// Quita la clase active de la imagen actualmente visible
//Actualiza currentIndex al nuevo índice proporcionado (index)
//Añade la clase active a la nueva imagen que se debe mostrar
function showImage(index) {
  images[currentIndex].classList.remove('active');
  currentIndex = index;
  images[currentIndex].classList.add('active');
}

//Calcula el índice de la siguiente imagen, asegurándose de que si se supera el número de imágenes, se vuelve al principio 
function showNextImage() {
  var nextIndex = (currentIndex +1) % images.length;
  showImage(nextIndex);
}

//Calcula el índice de la imagen anterior, asegurándose de que si se llega al principio, se vuelve al final de la lista de imágenes
function showPrevImage() {
  var prevIndex = (currentIndex + images.length -1) % images.length;
  showImage(prevIndex);
}

//segundooooo diiiivv de las estancias


//Similar al primer div, pero para el contenedor con id #slides
var images2 = document.querySelectorAll('#slides img');
var currentIndex2 = 0;

//Similar a showImage pero para el segundo div y utiliza la clase active2
function showImage2(index2) {
  images2[currentIndex2].classList.remove('active2');
  currentIndex2 = index2;
  images2[currentIndex2].classList.add('active2');
}

//Similar a showNextImage pero para el segundo div
function estanciaDIV2() {
  var nextIndex2 = (currentIndex2 +1) % images2.length;
  showImage2(nextIndex2);
}

//Similar a showPrevImage pero para el segundo div
function estanciaDIVdos() {
  var prevIndex2 = (currentIndex2 + images2.length -1) % images2.length;
  showImage2(prevIndex2);
}


//Tercer DIIIIV de las estancias

//Similar al primer div, pero para el contenedor con id #slides
var images3 = document.querySelectorAll('#slide img');
var currentIndex3 = 0;

//Similar a showImage pero para el tercer div y utiliza la clase active3
function showImage3(index3) {
  images3[currentIndex3].classList.remove('active3');
  currentIndex3 = index3;
  images3[currentIndex3].classList.add('active3');
}

//Similar a showNextImage pero para el tercer div
function estanciaDIV3() {
  var nextIndex3 = (currentIndex3 +1) % images3.length;
  showImage3(nextIndex3);
}

//Similar a showPrevImage pero para el tercer div
function estanciaDIVtres() {
  var prevIndex3 = (currentIndex3 + images3.length -1) % images3.length;
  showImage3(prevIndex3);
}





