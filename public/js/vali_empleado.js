"use strict"

function validar() {
    var nombres = document.form_empleado.nombres.
    value;
    var ap = document.form_empleado.ap.value;
    var am = document.form_empleado.am.value;
    var ci = document.form_empleado.ci.value;
    var id_area = document.form_empleado.id_area.value;
    var id_tipo = document.form_empleado.id_tipo.value;



    if ((!v1.test(nombres)) || (nombres == "")) {
        alert("El valor de nombres es incorrecto o el campo esta vacio ");
        document.form_empleado.nombres.focus();
        return;
    }
    if ((!v1.test(ap)) || (ap == "")) {
        alert("El apellido  es incorrrectos o el campo esta vacio");
        document.form_empleado.ap.focus();
        return;
    }
    if ((!v1.test(am)) || (am == "")) {
        alert("El apellido  es incorrrectos o el campo esta vacio");
        document.form_empleado.am.focus();
        return;
    }

    if ((!v22.test(ci)) || (ci == "")) {
        alert("El ci es incorrectos o el campo esta vacio");
        document.form_empleado.ci.focus();
        return;
    }
    if (id_area == "") {
        alert("El id de area es incorrecto o el campo esta vacio");
        document.form_empleado.id_area.focus();
        return;
    }
    if (id_tipo == "") {
        alert("El id de tipo es incorrecto o el campo esta vacio");
        document.form_empleado.id_tipo.focus();
        return;
    }

    document.form_empleado.submit();

}