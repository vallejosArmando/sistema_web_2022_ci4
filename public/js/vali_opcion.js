"use strict"

function validar() {
    var nombre = document.form_opcion.nombre.
    value;
    var id_grupo = document.form_opcion.id_grupo.value;
    var id_rol = document.form_opcion.id_rol.value;
    var op_url = document.form_opcion.op_url.value;
    var mostrar = document.form_opcion.mostrar.value;
    var orden = document.form_opcion.orden.value;


    if ((!v1.test(nombre)) || (nombre == "")) {
        alert("El valor de nombre es incorrecto o el campo esta vacio ");
        document.form_opcion.nombre.focus();
        return;
    }
    if ((!v1.test(mostrar)) || (mostrar == "")) {
        alert("El valor de mostrar  es incorrectos o el campo esta vacio");
        document.form_opcion.mostrar.focus();
        return;
    }
    if ((!v1.test(op_url)) || (op_url == "")) {
        alert("El valor de op_url  es incorrectos o el campo esta vacio");
        document.form_opcion.op_url.focus();
        return;
    }


    if ((!v2.test(id_rol)) || (id_rol == "")) {
        alert("El id_rol es incorrectos o el campo esta vacio");
        document.form_opcion.id_rol.focus();
        return;
    }
    if (orden == "") {
        alert("El valor de fecha de inicio  es incorrectos o el campo esta vacio");
        document.form_opcion.orden.focus();
        return;
    }
    if ((!v2.test(id_grupo)) || (id_grupo == "")) {
        alert("El id area es incorrectos o el campo esta vacio");
        document.form_opcion.id_grupo.focus();
        return;
    }

    document.form_opcion.submit();

}