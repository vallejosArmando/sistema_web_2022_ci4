"use strict"

function validar() {

    var nombre = document.formulario_sistema.nombre.value;
    var nombre_creador = document.formulario_sistema.nombre_creador.value;
    var icono = document.formulario_sistema.icono.value;





    if ((!v1.test(nombre)) || (nombre == "")) {
        alert("El nombre del sistema es incorrecto o el campo esta vacio");
        document.formulario_sistema.nombre.focus();
        return;
    }
    if ((!v1.test(nombre_creador)) || (nombre_creador == "")) {
        alert("El nombre del creador del sistema es incorrecto o el campo esta vacio");
        document.formulario_sistema.nombre_creador.focus();
        return;
    } if ( icono == "") {
        alert("El icono del sistema es incorrecto o el campo esta vacio");
        document.formulario_sistema.icono.focus();
        return;
    }
   
    document.formulario_sistema.submit();
}