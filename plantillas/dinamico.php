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

    <link rel="stylesheet" href="../static/css/modal.css">
    


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


</head>

<body onload="init();">

    <div class="fondo_animado">
        <header>
            <nav id="nav">

                <a href="home.php">
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

            <div class="container ">
                <div class="row ">
                    <div class="col s12 ">
                        <h2 class="center-align titulo ">seccion abrigos</h2>
                        <div class="carousel center_align principal">

                            <?php
                            include_once '../static/php/conexion.php';
                            $datos = conexion::getDatos("select  id, producto,precio,ROUND(precio-(descuento*precio/100),2) as oferta,imagen from v_productos");
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
                        <h4>Mas informacion de la empresa</h4>

                    </td>
                    <td>
                        <h4>redes sociales</h4>

                    </td>
                    <td>
                        <h4>informacion de contactos</h4>

                    </td>
                </tr>
                <tr>
                    <td>
                        <p>Ofrecemos ropa de la mejor calidad que satisfaga las necesidades y gustos del mercado potencial, vender ropa a la moda que cumpla con los requerimientos de estilo en el segmento del mercado</p>
                    </td>
                    <td>
                        <h4>
                            <a href="#">
                                <li class="btn-floating disabled"><img alt="" src="../static/img/iconos/facebook.png" height="40px"></li>facebook
                            </a>
                        </h4>
                        <h4>
                            <a href="#">
                                <li class="btn-floating disabled"><img alt="" src="../static/img/iconos/instagram.png" height="40px"></li>instagram
                            </a>
                        </h4>
                        <h4>
                            <a href="#">
                                <li class="btn-floating disabled"><img alt="" src="../static/img/iconos/tw.png" height="40px"></li>twiter
                            </a>
                        </h4>
                        <h4>
                            <a href="#">
                                <li class="btn-floating disabled"><img alt="" src="../static/img/iconos/whatsapp.png" height="40px"></li>watsapp
                            </a>
                        </h4>
                    </td>
                    <td>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur, voluptas distinctio in quasi provident sed harum quod eius nihil ab obcaecati earum veritatis temporibus iusto recusandae reprehenderit quidem incidunt vel!</p>

                        <div class="boton">
                            <p> enviar</p>
                        </div>
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

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    
    <script src="../static/js/modal2.js"></script>  
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

    <script src="../static/js/animacion.js"></script>


    <script src="../static/js/login.js"></script>



    <script src="../static/js/carrusel.js"></script>
</body>

</html>