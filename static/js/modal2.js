$(document).ready(function() {

    $(".boton-modal").click(function() {

        padre = $(this).parent()
        let titulo = padre.children().wrap()[0].outerText;
        //  precio = padre.children().wrap()[2].outerText;
        var precio = padre.children()[2];
        let ruta = padre.children().wrap()[5].src;


        $(".contenedor-contenedor-modal").load("../plantillas/modal.html .contenedor-modal", function() {

            $(".modal-imagen").attr("src", ruta);
            $('.modal-titulo').text(titulo);
            // $('.modal-precio').append(precio);

            $(precio).clone().appendTo('.modal-precio');


            /* obtenemos datos de la base datos */

            $.ajax({
                    // En data puedes utilizar un objeto JSON, un array o un query string
                    data: { 'producto_id': padre[0].querySelector(".producto_id").value },
                    //Cambiar a type: POST si necesario
                    type: "POST",
                    // Formato de datos que se espera en la respuesta
                    dataType: "json",
                    // URL a la que se enviará la solicitud Ajax
                    url: "../static/php/obtenerDatosProductos.php",
                })
                .done(function(data, textStatus, jqXHR) {
                    //datos del producto
                    let producto = data[0][0]["producto"];
                    let id = data[0][0]["id"];
                    let imagen = data[0][0]["imagen"];
                    let precio = data[0][0]["precio"];
                    let stock = data[0][0]["stock"];
                    let descuecto = data[0][0]["descuento"];
                    let talla = data[0][0]["talla"];
                    let color = data[0][0]["color"];
                    let detalle = data[0][0]["detalle"];
                    let precio_final = precio - precio * (descuecto) / 100;

                    console.log(precio_final);
                    console.log(id)
                    console.log(producto)
                    console.log(imagen)
                    console.log(precio)
                    console.log(stock)
                    console.log(descuecto)
                    console.log(talla)
                    console.log(color)
                    console.log(detalle)

                    $(".radio-colores").prepend("<li><input type='radio' name='colores'><div class='radio' style='background-color: " + color + ";'></div></li>")

                    $(".detalle-prendas").append("<p>" + detalle + "</p>");

                    //imagenes asociados a la imagen

                    $("#galeria").append("<img class='galeria-imagen' onclick='cambiarGaleria(event);' alt='error al cargar imagen' src='../servidorImagenes/" + imagen + "'>");
                    for (foto of data[1]) {
                        console.log(foto["ruta"]);
                        $("#galeria").append("<img class='galeria-imagen' onclick='cambiarGaleria(event);' alt='error al cargar imagen' src='../servidorImagenes/" + foto["ruta"] + "'>");
                    }


                })
                .fail(function(jqXHR, textStatus, errorThrown) {

                    console.log("La solicitud a fallado: " + textStatus);

                });



        })



    });





})

/* cambiamos la galeria de imagenes por la seleccionada */
function cambiarGaleria(e) {
    elemento = e.target;
    $(".modal-imagen").attr("src", elemento.src);
}