document.addEventListener('DOMContentLoaded', () => {
    var carusel = document.querySelectorAll('.principal');
    M.Carousel.init(carusel, {
        duration: 100,
        dist: -180,
        shift: 10,
        numVisible: 8,
        indicators: true


    });
    //segundo modelo de carrusel
    var carusel2 = document.querySelectorAll('.secundario');
    var m = M.Carousel.init(carusel2, {
        duration: 500,
        dist: 10,
        shift: 0,
        numVisible: 15,
        indicators: true,

    });

    //visualizar imagen agrandado
    var elems = document.querySelectorAll('.materialboxed');
    var instances = M.Materialbox.init(elems, {});



    //---------
    var e = document.querySelectorAll('.sidenav');
    var instances = M.Sidenav.init(e, {});


    //---------
    var elemento = document.querySelectorAll('.fixed-action-btn');
    var instances = M.FloatingActionButton.init(elemento, {});

    // select

    var selecion = document.querySelectorAll('.material-select');
    var instances = M.FormSelect.init(selecion);

});