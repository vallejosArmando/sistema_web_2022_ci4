"use strict"

function validar() {
    var tipo = document.form_tipo.tipo.
    value;
    var descripcion = document.form_tipo.descripcion.value;


    if ((!v1.test(tipo)) || (tipo == "")) {
        alert("El valor de tipo es incorrecto o el campo esta vacio ");
        document.form_tipo.tipo.focus();
        return;
    }

    if ((!v1.test(descripcion)) || (descripcion == "")) {
        alert("El valor de descripcion  es incorrrectos o el campo esta vacio");
        document.form_tipo.descripcion.focus();
        return;
    }

 
    document.form_tipo.submit();

}