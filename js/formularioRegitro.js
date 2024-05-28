
//Convierte el valor del campo de entrada a mayúsculas y elimina cualquier carácter que no sea una letra mayúscula
function convertirMayusculasSoloLetras(input) {
    var value = input.value.toUpperCase();
    input.value = value.replace(/[^A-Z]/g, '');
    
  }
  
  //Elimina cualquier carácter que no sea un dígito del campo de entrada
  function soloNumeros(input) {
    var value = input.value.replace(/\D/g, '');
    input.value = value;
    
  }
  
  //Muestra u oculta elementos específicos en la página en función de la opción seleccionada en un menú desplegable
    function aparecer()
    {
      let select = document.getElementById("camisas");
      let tr = document.querySelectorAll("tr:nth-child(7)");
      let form = document.getElementById("formulario");
  
      if (select.selectedIndex == 0) {
        tr[0].classList.remove("talla");
        tr[1].classList.remove("talla");
        form.style.height = "500px";
      }
      else{
        tr[0].classList.add("talla");
        tr[1].classList.add("talla");
        form.style.height = "450px";
      }
    }
  