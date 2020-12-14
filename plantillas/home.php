<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="../static/css/estilos.css">
    <link rel="stylesheet" href="../static/css/login.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="../static/woSlider/engine1/style.css" />

    <script type="text/javascript" src="../static/woSlider/engine1/jquery.js"></script>
    <link rel="stylesheet" href="../static/css/modal.css">
    <link rel="stylesheet" href="../static/css/novedades.css">
    <!--  ------------- -->

    <script src="https://code.createjs.com/1.0.0/createjs.min.js"></script>
    <script src="../static/js/titulo.js"></script>

    <script>
        var canvas, stage, exportRoot, anim_container, dom_overlay_container, fnStartAnimation;

        function init() {
            canvas = document.getElementById("canvas");
            anim_container = document.getElementById("animation_container");
            dom_overlay_container = document.getElementById("dom_overlay_container");
            var comp = AdobeAn.getComposition("BE4B3D9035CC0047BF7CB3952285B029");
            var lib = comp.getLibrary();
            handleComplete({}, comp);
        }

        function handleComplete(evt, comp) {
            //This function is always called, irrespective of the content. You can use the variable "stage" after it is created in token create_stage.
            var lib = comp.getLibrary();
            var ss = comp.getSpriteSheet();
            exportRoot = new lib.titulo();
            stage = new lib.Stage(canvas);
            //Registers the "tick" event listener.
            fnStartAnimation = function() {
                stage.addChild(exportRoot);
                createjs.Ticker.framerate = lib.properties.fps;
                createjs.Ticker.addEventListener("tick", stage);
            }
            //Code to support hidpi screens and responsive scaling.
            AdobeAn.makeResponsive(false, 'both', false, 1, [canvas, anim_container, dom_overlay_container]);
            AdobeAn.compositionLoaded(lib.properties.id);
            fnStartAnimation();
        }
    </script>
    <script src="../static/js/modal2.js"></script>

    <style>
        .contactos h3,
        .contactos h5 {
            padding: 0;
            margin: 0;
        }

        .contactos a {
            display: inline;
        }

        .oferta-flotante {
            position: absolute;
            left: 5px;
            top: 60px;

        }



        .texto-flotante {

            text-align: center;
            color: white;
            font-size: 4rem;

            color: #FFFFFF;
            text-shadow: 2px 2px 0 #4074b5, 2px -2px 0 #4074b5, -2px 2px 0 #4074b5, -2px -2px 0 #4074b5, 2px 0px 0 #4074b5, 0px 2px 0 #4074b5, -2px 0px 0 #4074b5, 0px -2px 0 #4074b5;
            color: #FFFFFF;

        }

        .novedades {
            background-color: #3a0b4259;
        }

        .novedades img {
            -webkit-box-shadow: 0px 10px 13px -7px #000000, 5px 5px 15px 5px rgba(0, 0, 0, 0);
            box-shadow: 0px 10px 13px -7px #000000, 5px 5px 15px 5px rgba(0, 0, 0, 0);
        }

        .cuatro {
            background-color: green !important;
            width: 100%;
            max-width: 450px;
        }

        .cuatro:hover {
            background-color: #8bc34a !important;

        }

        .destacados video {
            padding: 0;
            margin: 0;
        }

        .destacados {
            display: flex;
            position: relative;
        }

        .destacados-panel {
            position: absolute;
            text-align: center;
            width: 100%;
            height: 100%;
            display: flex;
            justify-content: center;
            align-items: center;

            /* fallback for old browsers */

            background: linear-gradient(to left, #44a08da4, #093637f1);
            /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

        }

        .texto-flotante2 {
            margin: 10px 100px;
            text-align: left;
            font-family: Comic Sans MS;
            font-weight: bold;
            color: #EBD758;
            text-shadow: -1px 0 #414D68, 0 1px #414D68, 1px 0 #414D68, 0 -1px #414D68, -2px 2px 0 #414D68, 2px 2px 0 #414D68, 1px 1px #414D68, 2px 2px #414D68, 3px 3px #414D68, 4px 4px #414D68, 5px 5px #414D68;


        }
    </style>

</head>

<body onload="init();">

    <div class="fondo_animado">
        <header>
            <nav id="nav">

                <a href="home.html">
                    <!--    <h4>ropasCLS</h4> -->

                    <div id="animation_container" style="background-color:rgba(143, 237, 232, 0.00); width:397px; height:71px">
                        <canvas id="canvas" width="397" height="71" style="position: absolute; display: block; background-color:rgba(143, 237, 232, 0.00);"></canvas>
                        <div id="dom_overlay_container" style="pointer-events:none; overflow:hidden; width:397px; height:71px; position: absolute; left: 0px; top: 0px; display: block;">
                        </div>
                    </div>


                </a>
                <input type="text" placeholder="buscar...">

                <ul>
                    <li><a href="#">tiendas</a></li>
                    <li><a href="Reclamos.html">reclamos</a></li>
                    <li><a href="Servicios.html">servicio</a></li>
                    <li><a href="Nosotros.html">nosotros</a></li>

                </ul>

                <ul class="right hide-on-med-and-down " id="tbn_login">
                    <li><a href="#" class="waves-effect waves-light btn" id="boton-formulario">¡Regístrate!</a></li>

                </ul>
                <div class="contenedor-formulario">
                    <div class="formulario" id="formulario">

                        <form class="formulario-login" id="formulario-login" method="POST">

                            <div class="form">
                                <h1>Iniciar Sesión</h1>
                                <div class="redes face">
                                    <a href="#">Iniciar sesión con Facebook</a>
                                </div>
                                <div class="redes tw">
                                    <a href="#"> Iniciar sesión con Twitter</a>
                                </div>

                                <div class="division">
                                    <p>o</p>
                                </div>

                                <div class="grupo">
                                    <input type="email" class="caja" id="email" name="email" required>
                                    <label for="">Correo Electrónico:</label>
                                </div>

                                <div class="grupo">
                                    <input type="password" class="caja" id="clave" name="clave" required>
                                    <label for="">Contraseña:</label>
                                </div>

                                <button type="submit" class="primero" id="iniciar-sesion">Iniciar sesión</button>

                                <div class="recuperar ">
                                    <a href="# "> ¿Olvisdate tu contraseña?</a>
                                </div>

                                <button type="button " class="segundo " OnClick="location.href ='registrarse.html'"> Registrarse</button>


                            </div>
                        </form>

                    </div>
                </div>
                <li class="btn" id="carrito"><img alt="" src="../static/img/iconos/carrito.png" height="40px"></li>

            </nav>

            <ul id="slide-out" class="sidenav contenedor-carrito">
                <h3 style="color: rgb(0, 60, 139);">Mi Carrito</h3>




                <table>
                    <tr>
                        <td rowspan="4">
                            <img src="../static/img/niños/6.jpg" width="120px" alt="">
                        </td>
                        <td>
                            <b> polo rojo manga larga </b>
                        </td>
                    </tr>



                    <tr>
                        <td>cantidad :
                            <input type="number" value="1" style="width: 30px; margin-left: 10px;margin-left: 20px;">
                        </td>


                    </tr>
                    <tr>
                        <td>
                            talla:
                            <select name="tallas" id="" style="display: inline;">
                                <option value="0">S</option>
                                <option value="1">M</option>
                                <option value="1">L</option>
                                <option value="2">XL</option>
                                <option value="2">XXL</option>
                            </select>
                        </td>

                    </tr>

                    <tr>
                        <td>S/ 62.93
                        </td>

                    </tr>

                </table>
                <table>
                    <tr>
                        <td rowspan="4">
                            <img src="../static/img/niños/4.jpg" width="120px" alt="">
                        </td>
                        <td>
                            <b> Blusa Manga Corta </b>
                        </td>
                    </tr>



                    <tr>
                        <td>cantidad :
                            <input type="number" value="1" style="width: 30px; margin-left: 10px;margin-left: 20px;">
                        </td>


                    </tr>
                    <tr>
                        <td>
                            talla:
                            <select name="tallas" id="" style="display: inline;">
                                <option value="0">S</option>
                                <option value="1">M</option>
                                <option value="1">L</option>
                                <option value="2">XL</option>
                                <option value="2">XXL</option>
                            </select>
                        </td>

                    </tr>

                    <tr>
                        <td>S/ 62.93
                        </td>

                    </tr>

                </table>
                <table>
                    <tr>
                        <td rowspan="4">
                            <img src="../static/img/niños/2.jpg" width="120px" alt="">
                        </td>
                        <td>
                            <b> Blusa Manga Corta 28072</b>
                        </td>
                    </tr>



                    <tr>
                        <td>cantidad :
                            <input type="number" value="1" style="width: 30px; margin-left: 10px;margin-left: 20px;">
                        </td>


                    </tr>
                    <tr>
                        <td>
                            talla:
                            <select name="tallas" id="" style="display: inline;">
                                <option value="0">S</option>
                                <option value="1">M</option>
                                <option value="1">L</option>
                                <option value="2">XL</option>
                                <option value="2">XXL</option>
                            </select>
                        </td>

                    </tr>

                    <tr>
                        <td>S/ 62.93
                        </td>

                    </tr>

                </table>




                <div style="width: 100%;" class="boton uno">
                    <p>
                        pagar ahora s/700.00
                    </p>
                </div>
                <br><br><br>
            </ul>
            <a href="#" data-target="slide-out" class="sidenav-trigger"><i class="material-icons" id="btn_carrito"> </i></a>

            <nav class="menu" id="menu">

                <div class="contenedor-grid" id="contenedor-grid">
                    <h4>
                        <li class="btn-floating disabled"><img alt="" src="../static/img/iconos/menu.png" height="40px"></li>Categorias
                    </h4>
                    <div class="grid" id="grid">
                        <div class="categorias" id="categorias">
                            <a href="damas.html" data-categoria="moda-mujer"> Moda Mujer<i><img src="../static/img/iconos/siguiente.png" height="10px" alt=""></i></a>
                            <a href="hombres.html" data-categoria="moda-hombre"> Moda Hombres<i><img src="../static/img/iconos/siguiente.png" height="10px" alt=""></i> </a>
                            <a href="dniños.html" data-categoria="moda-bebe"> Moda Niños<i><img src="../static/img/iconos/siguiente.png" height="10px" alt=""></i> </a>
                            <a href="peruanas.html" data-categoria="hecho-peru"> Hecho En Perú<i><img src="../static/img/iconos/siguiente.png" height="10px" alt=""></i></a>
                            <a href="internacionales.html" data-categoria="internacionales"> Marcas Internacionales<i><img src="../static/img/iconos/siguiente.png" height="10px" alt=""></i></a>
                            <a href="accesorios.html" data-categoria="accesorios"> Accesosorio<i><img src="../static/img/iconos/siguiente.png" height="10px" alt=""></i></a>
                        </div>
                        <div class="contenedor-sub-categorias">
                            <div class="sub-categorias" data-categoria="moda-mujer">
                                <div class="sub-categorias-enlaces" id="">
                                    <h3 class="subtitulo">Moda Mujer</h3>
                                    <a href="damas.html#gala"> De Gala</a>
                                    <a href="damas.html#especial"> Marcas Especiales</a>
                                    <a href="damas.html#jeans"> Jeans</a>
                                    <a href="dinamico.php"> abrigos</a>
                                    <a href="damas.html#lencerias"> Lencerías y Ropa Interior </a>
                                    <a href="damas.html#vestidos"> vestidos </a>
                                    <a href="damas.html#accesorios"> accesorios</a>
                                    <a href="damas.html#zapatos"> Zapatos</a>
                                    <a href="damas.html#tacones"> Tacones</a>
                                </div>
                                <div class="categorias-baner">
                                    <a href="#">
                                        <img src="../static/img/damas/9.jpg" alt="">
                                    </a>
                                </div>
                                <div class="categorias-galeria">
                                    <a href="#">
                                        <img src="../static/img/damas/1.png" alt="">
                                    </a>
                                    <a href="#">
                                        <img src="../static/img/damas/2.jpg" alt="">
                                    </a>
                                    <a href="#">
                                        <img src="../static/img/damas/3.jpg" alt="">
                                    </a>
                                    <a href="#">
                                        <img src="../static/img/damas/4.jpg" alt="">
                                    </a>
                                </div>

                            </div>
                            <div class="sub-categorias" data-categoria="moda-hombre">
                                <div class="sub-categorias-enlaces" id="">
                                    <h3 class="subtitulo">Moda Hombres</h3>
                                    <a href="hombres.html#gala"> De Gala</a>
                                    <a href="hombres.html#jeans"> Jeans</a>
                                    <a href="hombres.html#lencerias"> Ropa Interior </a>
                                    <a href="hombres.html#pantalones"> Pantalones </a>
                                    <a href="hombres.html#accesorios"> accesorios</a>
                                    <a href="hombres.html#zapatos"> Zapatos</a>
                                    <a href="hombres.html#zapatillas"> Zapatillas</a>

                                </div>
                                <div class="categorias-baner">
                                    <a href="#">
                                        <img src="../static/img/caballeros/1.jpg" alt="">
                                    </a>
                                </div>
                                <div class="categorias-galeria">
                                    <a href="#">
                                        <img src="../static/img/caballeros/2.jpg" alt="">
                                    </a>
                                    <a href="#">
                                        <img src="../static/img/caballeros/3.jpg" alt="">
                                    </a>
                                    <a href="#">
                                        <img src="../static/img/caballeros/5.jpg" alt="">
                                    </a>
                                    <a href="#">
                                        <img src="../static/img/caballeros/9.jpg" alt="">
                                    </a>
                                </div>

                            </div>
                            <div class="sub-categorias" data-categoria="moda-bebe">
                                <div class="sub-categorias-enlaces" id="">
                                    <h3 class="subtitulo">Niños</h3>
                                    <a href="dniños.html#gala"> De Gala</a>

                                    <a href="dniños.html#camisas"> Camisas</a>
                                    <a href="dniños.html#polos" polos> polos</a>
                                    <a href="dniños.html#casacas"> casacas </a>

                                    <a href="dniños.html#zapatos"> Zapatos</a>
                                    <a href="dniños.html#Zapatillas">Zapatillas</a>
                                </div>
                                <div class="categorias-baner">
                                    <a href="#">
                                        <img src="../static/img/niños/7.jpg" alt="">
                                    </a>
                                </div>
                                <div class="categorias-galeria">
                                    <a href="#">
                                        <img src="../static/img/niños/1.jpg" alt="">
                                    </a>
                                    <a href="#">
                                        <img src="../static/img/niños/2.jpg" alt="">
                                    </a>
                                    <a href="#">
                                        <img src="../static/img/niños/3.jpg" alt="">
                                    </a>
                                    <a href="#">
                                        <img src="../static/img/niños/4.jpg" alt="">
                                    </a>
                                </div>

                            </div>

                            <div class="sub-categorias" data-categoria="hecho-peru">
                                <div class="sub-categorias-enlaces" id="">
                                    <h3 class="subtitulo">Hechos en Peru</h3>
                                    <a href="peruanas.html"> seccion especial</a>

                                </div>
                                <div class="categorias-baner">
                                    <a href="#">
                                        <img src="../static/img/imagenes carpetas/hechos en peru/eb0866f08173bc20bb71f3ddff8c6ba9.jpg" alt="">
                                    </a>
                                </div>
                                <div class="categorias-galeria">
                                    <a href="#">
                                        <img src="../static/img/imagenes carpetas/hechos en peru/DfgAxY1W4AQjTQx.jpg" alt="">
                                    </a>
                                    <a href="#">
                                        <img src="../static/img/imagenes carpetas/hechos en peru/1710582.jpg" alt="">
                                    </a>
                                    <a href="#">
                                        <img src="../static/img/imagenes carpetas/hechos en peru/3afe6bd88d2946620e6a98e54866ffde.jpg" alt="">
                                    </a>
                                    <a href="#">
                                        <img src="../static/img/imagenes carpetas/hechos en peru/DlQd00-WwAABBav.jpg" alt="">
                                    </a>
                                </div>

                            </div>

                            <div class="sub-categorias" data-categoria="internacionales">
                                <div class="sub-categorias-enlaces" id="">
                                    <h3 class="subtitulo">Importadas</h3>
                                    <a href="dniños.html"> De Gala</a>
                                    <a href="#"> Marcas Especiales</a>
                                    <a href="#"> Jeans</a>
                                    <a href="#"> Ropa Interior </a>
                                    <a href="#"> Pantalones </a>
                                    <a href="#"> accesorios</a>
                                    <a href="#"> Zapatos</a>
                                    <a href="#"> Zapatillas</a>
                                </div>
                                <div class="categorias-baner">
                                    <a href="#">
                                        <img src="../static/img/damas/12.jpg" alt="">
                                    </a>
                                </div>
                                <div class="categorias-galeria">
                                    <a href="#">
                                        <img src="../static/img/imagenes carpetas/internacionales/FOTO_0037.jpg" alt="">
                                    </a>
                                    <a href="#">
                                        <img src="../static/img/imagenes carpetas/internacionales/HTB1sNeYbCSD3KVjSZFKq6z10VXa8.jpg" alt="">
                                    </a>
                                    <a href="#">
                                        <img src="../static/img/imagenes carpetas/internacionales/images.jpg" alt="">
                                    </a>
                                    <a href="#">
                                        <img src="../static/img/imagenes carpetas/internacionales/multiwear_fireline_weldin_chaqueta.jpg" alt="">
                                    </a>
                                </div>

                            </div>

                            <div class="sub-categorias" data-categoria="accesorios">
                                <div class="sub-categorias-enlaces" id="">
                                    <h3 class="subtitulo">accesorios</h3>
                                    <a href="accesorios.html#carteras"> Carteras</a>
                                    <a href="accesorios.html#billeteras"> Billeteras para hombres</a>
                                    <a href="accesorios.html#lentes"> lentes de sol</a>
                                    <a href="accesorios.html#reloj"> reloj </a>

                                </div>
                                <div class="categorias-baner">
                                    <a href="#">
                                        <img src="../static/img/imagenes carpetas/hombres/accesorios/fizili-reloj-de-pulsera-para-hombre-ultra-fino-minimalista-moderno-ogtbdewpupaufhpvxz142r9vhcywdlp6ibvm0p6hs8.jpg" alt="">
                                    </a>
                                </div>
                                <div class="categorias-galeria">
                                    <a href="#">
                                        <img src="../static/img/imagenes carpetas/hombres/accesorios//images (1).jpg" alt="">
                                    </a>
                                    <a href="#">
                                        <img src="../static/img/imagenes carpetas/hombres/accesorios/HTB1LsjgaErrK1RkSne1q6ArVVXaR.jpg" alt="">
                                    </a>
                                    <a href="#">
                                        <img src="../static/img/imagenes carpetas/hombres/accesorios/gafas-de-sol-tendencia-jog-para-hombres-todo.jpg" alt="">
                                    </a>
                                    <a href="#">
                                        <img src="../static/img/imagenes carpetas/hombres/accesorios/images.jpg" alt="">
                                    </a>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>

                <ul>
                    <li class=""><a href="novedades.html">novedades</a></li>
                    <li><a href="ofertas.html">ofertas</a></li>
                    <li><a href="masVendidos.html">más vendidos</a></li>
                    <li><a href="vistas/damas.html">más buscados</a></li>


                </ul>



            </nav>
        </header>



        <section class="contenido">

            <div class="contenedor-contenedor-modal"></div>
            <div id="wowslider-container1">
                <div class="ws_images">
                    <ul>
                        <li>
                            <a href="http://wowslider.net"><img src="../static/woSlider/data1/images/7_5349.jpg" alt="carousel jquery" title="7 (5)-349" id="wows1_0" /></a>
                        </li>
                        <li><img src="../static/woSlider/data1/images/banner5031.jpg" alt="banner50-31" title="banner50-31" id="wows1_1" /></li>
                    </ul>
                </div>
                <div class="ws_bullets">
                    <div>
                        <a href="#" title="7 (5)-349"><span><img src="../static/woSlider/data1/tooltips/banner5031.jpg" alt="7 (5)-349" />1</span></a>
                        <a href="#" title="banner50-31"><span><img src="../static/woSlider/data1/tooltips/7_5349.jpg" alt="banner50-31" />2</span></a>
                    </div>
                </div>
                <div class="ws_script" style="position:absolute;left:-99%"><a href="http://wowslider.net">slider</a> by WOWSlider.com v9.0</div>
                <div class="ws_shadow"></div>
            </div>


            <section class="destacados">
                <video src="../static/img/damas/3c924dab0009c27bc93abdfafa82c921.mp4" loop autoplay width="25%"></video>
                <video src="../static/img/damas/5dbf184fd4063fb280e40001b4bad87b" loop autoplay width="25%"></video>
                <video src="../static/img/damas/3c924dab0009c27bc93abdfafa82c921.mp4" loop autoplay width="25%"></video>
                <video src="../static/img/damas/5dbf184fd4063fb280e40001b4bad87b" loop autoplay width="25%"></video>

                <div class="destacados-panel">

                    <div>
                        <h1 class="texto-flotante"> LOS MÁS POPULARES</h1>
                        <h6 class="texto-flotante2">
                            La ropa de la mejor calidad que satisfaga tus necesidades y gusto
                        </h6>

                        <div class="boton cuatro">
                            <p> ver catálogo</p>
                        </div>
                    </div>
                </div>

                <!-- Generated by https://smooth.ie/blogs/news/svg-wavey-transitions-between-sections -->

                <div style="height: 150px; overflow: hidden; position: absolute;width: 100%;bottom: 0;">
                    <svg viewBox="0 0 500 150" preserveAspectRatio="none" style="height: 100%; width: 100%;">
                        <path d="M-6.54,152.26 C150.00,150.00 349.20,-49.99 500.00,49.99 L500.00,150.00 L0.00,150.00 Z" style="stroke: none; fill: #0d4530;"></path>
                    </svg>

                </div>

            </section>



            <div class="novedades">
                <!-- Generated by https://smooth.ie/blogs/news/svg-wavey-transitions-between-sections -->

                <div style="height: 150px; overflow: hidden;">
                    <svg viewBox="0 0 500 150" preserveAspectRatio="none" style="height: 100%; width: 100%;">
                        <path d="M-23.47,31.88 C347.85,61.48 346.73,-69.76 604.62,171.01 L500.00,0.00 L-5.42,-31.27 Z" style="stroke: none; fill: #0d4530;"></path>
                    </svg>
                </div>
                <h1 class="texto-flotante"> LO MÁS NUEVO</h1>

                <div>

                    <img src="../static/img/damas/20.jpg" width="400px" alt="">
                    <div class="detalle">
                        <h1 class="light-green-text">LOOK DE LA SEMANA </h1>
                        <p>Mix & Match. Combina lo sofisticado de nuestro saco de Suede Scuba (27070) con una cafarena (27128) y unas leggings del mismo tono (27137) para crear un contraste de encanto. Se convertirá en tu favorito de la temporada. #ColecciónOI20</p>
                        <div class="boton cuatro">
                            <p> comprar ahora</p>
                        </div>
                    </div>
                </div>
                <div>

                    <div class="detalle">
                        <h1 class="light-green-text">LOOK DE LA SEMANA </h1>
                        <p>Mix & Match. Combina lo sofisticado de nuestro saco de Suede Scuba (27070) con una cafarena (27128) y unas leggings del mismo tono (27137) para crear un contraste de encanto. Se convertirá en tu favorito de la temporada. #ColecciónOI20</p>
                        <div class="boton cuatro">
                            <p> comprar ahora</p>
                        </div>
                    </div>
                    <img src="../static/img/caballeros/12.webp" width="400px" alt="">
                </div>
            </div>
            <!-- Generated by https://smooth.ie/blogs/news/svg-wavey-transitions-between-sections -->

            <div class="ola" style="height: 150px; overflow: hidden;"><svg viewBox="0 0 500 150" preserveAspectRatio="none" style="height: 100%; width: 100%;">
                    <path d="M0.00,49.99 C150.00,150.00 271.49,-49.99 500.00,49.99 L500.00,0.00 L0.00,0.00 Z" style="stroke: none; fill: #3a0b4259;"></path>
                </svg></div>
            <div class="container ">
                <div class="row ">
                    <div class="col s12 ">
                        <h2 class="center-align titulo ">OFERTAS DEL DÍA

                        </h2>
                        <div class="carousel center_align secundario">

                            <?php
                            include_once '../static/php/conexion.php';
                            $datos = conexion::getDatos("select  id, producto,precio,ROUND(precio-(descuento*precio/100),2) as oferta,imagen,descuento from v_productos where descuento>=40");
                            foreach ($datos as $fila) :
                            ?>

                                <div class="carousel-item ">

                                    <h2 class="subtitulo"><?php echo $fila->producto ?></h2>
                                    <div class="linea-division "></div>
                                    <div class="detalle ">
                                        <p><?php echo $fila->oferta ?> &nbsp;&nbsp;&nbsp;<del><?php echo $fila->precio ?></del></p>
                                    </div>
                                    <div class="boton">
                                        <p>agregar al carrito</p>
                                    </div>

                                    <li class="boton-modal" style="padding-top: 10px;">
                                        <a class="waves-effect waves-light btn">ver</a>

                                    </li>
                                    <img src="../servidorImagenes/<?php echo $fila->imagen ?>" alt="">




                                    <input type="hidden" class="producto_id" value=<?php echo $fila->id ?>>
                                    <a style="font-size: 1.5rem;" class="btn-floating btn-large cyan pulse oferta-flotante"><?php echo $fila->descuento ?>%</a>
                                </div>


                            <?php

                            endforeach;
                            ?>
                        </div>
                    </div>
                </div>


            </div>

        </section>


        <section class="contactos">
            <table>

                <tr>
                    <td>
                        <h4 class="light-green-text">Mas informacion de la empresa</h4>

                    </td>
                    <td>

                        <h4 class="light-green-text">ropasCLS</h4>
                    </td>
                    <td>
                        <h4 class="light-green-text">contactos</h4>

                    </td>
                </tr>
                <tr>
                    <td>
                        <p>Ofrecemos ropa de la mejor calidad que satisfaga las necesidades y gustos del mercado potencial, vender ropa a la moda que cumpla con los requerimientos de estilo en el segmento del mercado</p>

                        <div class="notificar">

                            <label for="notificar-email">dejame tu email</label>
                            <input type="email" name="notificar-email" placeholder="ejemplo@gmail.com" width="10px">
                            <div class="boton">
                                <p> enviar</p>
                            </div>
                        </div>


                    </td>
                    <td>
                        <ul>
                            <li>
                                <a href="">¿quienes somos?</a>
                            </li>
                            <li> <a href="">reporte de sostenibilidad</a></li>
                            <li> <a href="">preguntas frecuentes</a></li>
                            <li><a href="">mis comprobantes electrónicos</a></li>
                            <li> <a href="">responder nuestra encuesta</a></li>
                        </ul>
                        <br>

                        <img src="../static/img/iconos/logopago.png" width="250px">
                        <ul>
                            <li> <a href="">consultar más medios de pago</a></li>
                        </ul>
                    </td>
                    <td>
                        <h5 class="light-green-text">atencion por telófono de 7 a 8 pm</h5>
                        <h3><i class="small material-icons">local_phone</i>&nbsp;513-3355</h3>
                        <h5 class="light-green-text">atencion por whatsapp las 24 horas</h5>
                        <h3><i class="small material-icons">textsms</i>&nbsp;921011900</h3>


                        <a href="#">
                            <li class="btn-floating disabled"><img alt="" src="../static/img/iconos/facebook.png" height="40px"></li>
                        </a>


                        <a href="#">
                            <li class="btn-floating disabled"><img alt="" src="../static/img/iconos/instagram.png" height="40px"></li>
                        </a>


                        <a href="#">
                            <li class="btn-floating disabled"><img alt="" src="../static/img/iconos/tw.png" height="40px"></li>
                        </a>


                        <a href="#">
                            <li class="btn-floating disabled"><img alt="" src="../static/img/iconos/whatsapp.png" height="40px"></li>
                        </a>


                    </td>


                </tr>
            </table>

        </section>
        <section class="footer">

            <footer>
                <div class="copi">
                    &copy; Copyrigth Ropa CLS todos los derechos de esta pagina nos pertenecen
                </div>
            </footer>

        </section>

    </div>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous">
    </script>
    <script src="../static/js/animacion.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.0.js " integrity="sha256-r/AaFHrszJtwpe+tHyNi/XCfMxYpbsRg2Uqn0x3s2zc=" crossorigin=" anonymous "></script>

    <script src="../static/js/login.js"></script>


    <script type="text/javascript" src="../static/woSlider/engine1/wowslider.js"></script>
    <script type="text/javascript" src="../static/woSlider/engine1/script.js"></script>
    <script src="../static/js/carrusel.js"></script>

</body>

</html>