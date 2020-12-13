$(document).ready(function() {
    var cajas = document.getElementsByClassName('caja');
    for (var i = 0; i < cajas.length; ++i) {

        cajas[i].addEventListener('focus', function() {
            var selector = '#' + this.id + '~label';
            $(selector).addClass('foco')
        })

        cajas[i].addEventListener('focusout', function() {
            if (this.value.length === 0) {
                var selector = '#' + this.id + '~label';
                $(selector).removeClass('foco')
            }

        })

        //ponemos de color rojo el contorno y el texto si la informacion no es correcta en tiempo real
        cajas[i].addEventListener('input', function() {
            if (this.validity.valid == false) {
                var selector = '#' + this.id;
                $(selector).css('border', ' 2px solid red')

                var selector = '#' + this.id + '~label';
                $(selector).css('color', 'red')

            } else {
                var selector = '#' + this.id;
                $(selector).css('border', ' 2px solid #2E86C1')

                var selector = '#' + this.id + '~label';
                $(selector).css('color', '#2E86C1')

            }

        })

    }


    // funcion para validar login con ajax

    $("#formulario-login").submit(function() {



        let email = $("#email").val();
        let clave = $("#clave").val();

        let datos = {
            email: email,
            clave: clave
        }

        $.post("../static/php/sesion.php", datos, respuesta, 'json');

        return false;


    });



    function respuesta(resp) {


        if (resp == false) {
            console.log("no tienes permiso");
            if (!document.getElementById("error")) {
                let h6 = document.createElement("h6");
                h6.setAttribute("id", "error");
                h6.style.color = "red";
                h6.style.padding = "0";
                h6.style.textAlign = "center";
                let txto = document.createTextNode("ud no se encuetra registrado!!")
                h6.append(txto)
                $("#iniciar-sesion")[0].before(h6);
            }

        } else {
            if (document.getElementById("error")) {
                $("#error").remove();
            }

            if ((resp.perfil).length == 0) {
                $("#boton-formulario").html("<img  src='../static/img/iconos/user.png' style='border-radius: 100%; height: 50px;width: 50px;margin:3px'>" + resp.email);
            } else {
                $("#boton-formulario").html("<img  src='../ServidorImagenes/" + resp.perfil + "' style='border-radius: 100%; height: 50px;width: 50px;margin:3px'>" + resp.email);
            }


            $("#formulario-login").append("<input type='hidden' value='" + resp.email + "' id='usuario-activo'>");



            $('#formulario').hide();

            $("#formulario-login").append(" <a style='color: rgb(73 172 172);text-align: center;justify-content: center;' href='../static/php/cerrarSesion.php'>cerrar sesion</a>")

            M.toast({ html: 'bienvenido a tu tienda preferida!!' })
        }

    }

    //funcion para verificar la sesion del usuario

    $.post("../static/php/validarSesion.php", {}, validarSesion, 'json');

    function validarSesion(resp) {
        if (document.getElementById("error")) {
            $("#error").remove();
        }
        if (resp) {
            if ((resp.perfil) == null) {
                $("#boton-formulario").html("<img  src='../static/img/iconos/user.png' style='border-radius: 100%; height: 50px;width: 50px;margin:3px'>" + resp.email);
            } else {
                $("#boton-formulario").html("<img  src='../ServidorImagenes/" + resp.perfil + "' style='border-radius: 100%; height: 50px;width: 50px;margin:3px'>" + resp.email);
            }


            $("#formulario-login").append("<input type='hidden' value='" + resp.email + "' id='usuario-activo'>");



            $('#formulario').hide();

            $("#formulario-login").append(" <a style='color: rgb(73 172 172);text-align: center;justify-content: center;' href='../static/php/cerrarSesion.php'>cerrar sesion</a>")
        }
    }

})