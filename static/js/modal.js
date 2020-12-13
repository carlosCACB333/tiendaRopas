$(document).ready(function() {

    $(".boton-modal").click(function() {

        let padre = $(this).parent()
        let titulo = padre.children().wrap()[0].outerText;
        let precio = padre.children().wrap()[2].outerText;
        let ruta = padre.children().wrap()[5].src;


        $(".contenedor-contenedor-modal").load("../plantillas/modal.html .contenedor-modal", function() {

            $(".modal-imagen").attr("src", ruta);
            $('.modal-titulo').text(titulo);
            $('.modal-precio').text(precio);
        })
        return false;
    });


})