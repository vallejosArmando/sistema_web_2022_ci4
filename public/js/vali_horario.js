"use strict"

function validar_horario() {
    var hora_entrada = document.form_horario.hora_entrada.value;
    var hora_salida = document.form_horario.hora_salida.value;
    var empleado = document.form_horario.empleado.value;

    if (hora_entrada == "") {
        alert("El horario de entrada es incorrecto o el campo esta vacio");
        document.form_horario.hora_entrada.focus();
        return;


    }

    if (hora_salida == "") {
        alert("El horario de salida es incorrecto o el campo esta vacio");
        document.form_horario.hora_salida.focus();
        return;


    }
    if (empleado == "") {
        alert("El nombre del  empleado  es incorrecto o el campo esta vacio");
        document.form_horario.empleado.focus();
        return;


    }
    document.form_horario.submit();
};