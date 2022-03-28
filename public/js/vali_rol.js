"use strict"
function validar() {
 var rol = document.form_rol.rol.value;

 if ((!v1.test(rol)) || (rol == "")) {
  alert("El rol del area es incorrecto o el campo esta vacio");
  document.form_rol.rol.focus();
  return;
 }

 document.form_rol.submit();
}