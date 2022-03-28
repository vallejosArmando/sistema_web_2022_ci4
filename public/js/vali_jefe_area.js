"use strict"

function validar_jefe_area() {
    var nombres = document.form_jefe_area.nombres.
    value;
    var ap = document.form_jefe_area.ap.value;
    var am = document.form_jefe_area.am.value;
    var ci = document.form_jefe_area.ci.value;
    var telefono = document.form_jefe_area.telefono.value;
    var correo = document.form_jefe_area.correo.value;
    var fec_inicio = document.form_jefe_area.fec_inicio.value;
    var fec_fin = document.form_jefe_area.fec_fin.value;
    var area = document.form_jefe_area.area.value;

  
    if ((!v1.test(nombres)) || (nombres == "")) {
        alert("El valor de nombres es incorrecto o el campo esta vacio ");
        document.form_jefe_area.nombres.focus();
        return;
    }
    if ((!v1.test(ap)) || (ap == "")) {
        alert("El valor de ap  es incorrectos o el campo esta vacio");
        document.form_jefe_area.ap.focus();
        return;
    }
    if ((!v1.test(am)) || (am == "")) {
        alert("El valor de am  es incorrectos o el campo esta vacio");
        document.form_jefe_area.am.focus();
        return;
    }


    if ((!v22.test(ci)) || (ci == "")) {
        alert("El ci es incorrectos o el campo esta vacio");
        document.form_jefe_area.ci.focus();
        return;
    }
    if ((!expReg.test(correo)) || (correo == "")) {
        alert("El valor de el correo es incorrectos o el campo esta vacio");
        document.form_jefe_area.correo.focus();
        return;
    }
    if ((!v2.test(telefono)) || (telefono == "")) {
        alert("El valor de el telefono es incorrectos o el campo esta vacio");
        document.form_jefe_area.telefono.focus();
        return;
    }
    if (fec_inicio == "") {
        alert("El valor de fecha de inicio  es incorrectos o el campo esta vacio");
        document.form_jefe_area.fec_inicio.focus();
        return;
    }
    if (fec_fin == "") {
        alert("El valor de fecha fin  es incorrectos o el campo esta vacio");
        document.form_jefe_area.fec_fin.focus();
        return;
    }
  if ( (area == "")) {
        alert("El area es incorrectos o el campo esta vacio");
        document.form_jefe_area.area.focus();
        return;
    }

    document.form_jefe_area.submit();

}