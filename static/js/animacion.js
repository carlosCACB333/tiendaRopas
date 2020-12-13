document.addEventListener('DOMContentLoaded', function() {



    const bt_categorias = document.getElementById('contenedor-grid'),
        grid = document.getElementById('grid');


    bt_categorias.addEventListener('mouseover', () => {
        grid.classList.add('activo');
    })
    bt_categorias.addEventListener('mouseleave', () => {
        grid.classList.remove('activo');
    })

    document.querySelectorAll("#menu #categorias a").forEach((categ) => {
        categ.addEventListener('mouseenter', (e) => {

            document.querySelectorAll('#menu .sub-categorias').forEach((sub) => {
                sub.classList.remove('activo');
                if (sub.dataset.categoria == e.target.dataset.categoria) {

                    sub.classList.add('activo');

                }

            });

        })
    });

    //-------------- mostramos y ocultamos formulario----------------------
    $('#tbn_login').click(function() {
        $('#formulario').slideToggle(400);
        console.log("no me toques");
    });

    //desplazamos el carrito

    $('#carrito').click(function() {
        console.log("no me toques");
        $('#btn_carrito').click();

    });



});

//