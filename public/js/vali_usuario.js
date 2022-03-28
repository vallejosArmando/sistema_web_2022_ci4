"use strict"

function validar() {
    var nom_usuario = document.form_usuario.nom_usuario.
    value;
    var clave = document.form_usuario.clave.value;
    var id_persona = document.form_usuario.id_persona.value;


    if ((!v1.test(nom_usuario)) || (nom_usuario == "")) {
        alert("El valor de nom_usuario es incorrecto o el campo esta vacio ");
        document.form_usuario.nom_usuario.focus();
        return;
    }
    if  (clave == "") {
        alert("El valor de clave es incorrecto o el campo esta vacio ");
        document.form_usuario.clave.focus();
        return;
    }

    if (id_persona == "") {
        alert("El id es incorrrectos o el campo esta vacio");
        document.form_usuario.id_persona.focus();
        return;
    }
    document.form_usuario.submit();

}