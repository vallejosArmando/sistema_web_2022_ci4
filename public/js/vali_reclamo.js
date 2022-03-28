"use strict"
function validar_reclamo(){
    var reg = document.formulario_reclamo.reg.value;
    var nombres = document.formulario_reclamo.nombres.value;
    var ap = document.formulario_reclamo.ap.value;
    var am = document.formulario_reclamo.am.value;
    var telefono = document.formulario_reclamo.telefono.value;
    var correo = document.formulario_reclamo.correo.value;
    var barrio = document.formulario_reclamo.barrio.value;
    var calle_avenida = document.formulario_reclamo.calle_avenida.value;
    var entre_que_calles = document.formulario_reclamo.entre_que_calles.value;
    var numero_de_casa = document.formulario_reclamo.numero_de_casa.value;
    var codigo_usuario = document.formulario_reclamo.codigo_usuario.value;
    var referencias = document.formulario_reclamo.referencias.value;
    var descripcion_del_reclamo = document.formulario_reclamo.descripcion_del_reclamo.value;
 
    var otro_recurrente = document.formulario_reclamo.otro_recurrente.value;
    var telefono_del_recurrente = document.formulario_reclamo.telefono_del_recurrente.value;
    var tipo_de_calzada = document.formulario_reclamo.tipo_de_calzada.value;

 
    if ((!v2.test(reg)) || (reg == "")) {
        alert("El Registro es incorrecto o el campo esta vacio ");
        document.formulario_reclamo.reg.focus();
        return;
    }

    if (nombres == "") {
        alert("El nombre es incorrecto o el campo esta vacio.");
        document.formulario_reclamo.nombres.focus();
        return;

    }
    if (ap == "") {
        alert("El apellido paterno es incorrecto o el campo esta vacio.");
        document.formulario_reclamo.ap.focus();
        return;

    }
    if (am == "") {
        alert("El apellido materno es incorrecto o el campo esta vacio.");
        document.formulario_reclamo.am.focus();
        return;
    }
    if ((!v2.test(telefono)) || (telefono == "")) {
        alert("El telefono es incorrecto o el campo esta vacio ");
        document.formulario_reclamo.telefono.focus();
        return;
    }
    if ((!expReg.test(correo)) || (correo == "")) {
        alert("El correo es incorrecto o el campo esta vacio.");
        document.formulario_reclamo.correo.focus();
        return;

    }
    if (barrio == "") {
        alert("El barrio es incorrecto o el campo esta vacio.");
        document.formulario_reclamo.barrio.focus();
        return;
        
    }
    if (calle_avenida == "") {
        alert("La calle o avenida es incorrecto o el campo esta vacio.");
        document.formulario_reclamo.calle_avenida.focus();
        return;
        
    }
        if (entre_que_calles == "") {
            alert("Entre que calles es incorrecto o el campo esta vacio.");
            document.formulario_reclamo.entre_que_calles.focus();
            return;
    
        }

    if ((!v2.test(numero_de_casa)) || (numero_de_casa == "")) {
        alert("El numero de casa es incorrecto o el campo esta vacio.");
        document.formulario_reclamo.numero_de_casa.focus();
        return;
    }
    if ((!v2.test(codigo_usuario)) || (codigo_usuario == "")) {
        alert("El codigo del usuario es incorrecto o el campo esta vacio.");
        document.formulario_reclamo.codigo_usuario.focus();
        return;
    }
  
    if (referencias == "") {
        alert("La referencia es incorrecto o el campo esta vacio.");
        document.formulario_reclamo.referencias.focus();
        return;

    }
    if (descripcion_del_reclamo == "") {
        alert("La descripcion del reclamo es incorrecto o el campo esta vacio.");
        document.formulario_reclamo.descripcion_del_reclamo.focus();
        return;

    }
    if (otro_recurrente == "") {
        alert("El nombre del recurrente es incorrecto o el campo esta vacio.");
        document.formulario_reclamo.otro_recurrente.focus();
        return;

    }
    if ((!v2.test(telefono_del_recurrente)) || (telefono_del_recurrente == "")) {
        alert("El telefono del recurrente  es incorrecto o el campo esta vacio.");
        document.formulario_reclamo.telefono_del_recurrente.focus();
        return;

    }
    if (tipo_de_calzada == "") {
        alert("El tipo de calzada  es incorrecto o el campo esta vacio.");
        document.formulario_reclamo.tipo_de_calzada.focus();
        return;

    }
   

    document.formulario_reclamo.submit();

};