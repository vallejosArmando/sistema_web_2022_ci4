"use strict"
function validar() {
 var nombre = document.form_area.nombre.value;
 var descripcion = document.form_area.descripcion.value;

 if ((!v1.test(nombre)) || (nombre == "")) {
  alert("El nombre del area es incorrecto o el campo esta vacio");
  document.form_area.nombre.focus();
  return;
 }
 if ((!v1.test(descripcion)) || (descripcion == "")) {
  alert("La descripcion del area es incorrecto o el campo esta vacio");
  document.form_area.descripcion.focus();
  return;
 }
 document.form_area.submit();
}