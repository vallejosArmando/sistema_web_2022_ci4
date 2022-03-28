"use strict"
function validar() {
 var grupo = document.form_grupo.grupo.value;
 var icono = document.form_grupo.icono.value;

 if ((!v1.test(grupo)) || (grupo == "")) {
  alert("El nombre del grupo es incorrecto o el campo esta vacio");
  document.form_grupo.grupo.focus();
  return;
 }
 if (icono == "") {
  alert("El icono es incorrecto o el campo esta vacio");
  document.form_grupo.icono.focus();
  return;
 }

 document.form_grupo.submit();
}