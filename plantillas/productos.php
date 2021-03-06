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
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"><!--  para el icono de la seccion contactos -->
    <link rel="stylesheet" href="../static/css/texto.css">


    <link rel="stylesheet" href="../static/css/novedades.css">

    <style>
        .contenido {
            width: 60%;
            margin: auto;   
        }

        .form-re {
            color: white;
            background-color: rgba(0, 0, 0, 0.514);
            margin-top: 50px;
            padding: 80px;
            border-radius: 5px;
            display: grid;
            grid-template-columns: 1fr 1fr;
        }

        .form-re * {
            margin: 10px;
        }

        .form-re textarea {
            color: white;
        }

        .form-re input {
            color: white;
        }
    </style>
</head>



<body>

    <div class="fondo_animado">
        <header>
            <nav id="nav">

                 <a href="home.php">
                    <!--    <h4>ropasCLS</h4> -->
                    <div class="logo-empresa">

                        <svg class="svg-text" width="2.2em" height="0.55em" xmlns="http://www.w3.org/2000/svg">
                            <defs>
                                <symbol id="stroke-2">
                                    <text class="bold" x="50%" y="67%" fill="none" stroke-width=".1em" stroke-linecap="round" stroke-linejoin="round" paint-order="stroke fill" text-anchor="middle">ropasCLS</text>
                                </symbol>
                                <symbol id="fill-2">
                                    <text class="bold" x="50%" y="60%" text-anchor="middle">ropasCLS</text>
                                </symbol>
                            </defs>
                            <g class="svg-text__shaded__stroke" stroke="#00cccc">
                                <use y="5%" xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#stroke-2" opacity="0.5" filter="url(#drop-stroke-shadow)"></use>
                                <use y="3%" xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#stroke-2"></use>
                                <use y="2%" xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#stroke-2"></use>
                                <use y="1%" xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#stroke-2"></use>
                                <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#stroke-2" stroke="cyan"></use>
                            </g>
                            <g fill="#e6e6e6">
                                <use class="svg-text__shaded" y="7%" xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#fill-2"></use>
                                <use y="6.5%" xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#fill-2"></use>
                                <use y="6%" xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#fill-2"></use>
                                <use y="5.5%" xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#fill-2"></use>
                                <use y="5%" xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#fill-2"></use>
                                <use y="4.5%" xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#fill-2"></use>
                                <use y="4%" xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#fill-2"></use>
                                <use y="3.5%" xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#fill-2"></use>
                                <use y="3%" xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#fill-2" fill="white"></use>
                            </g>
                        </svg>
                    </div>


                </a>
                <input type="text" placeholder="buscar...">

                <ul>
                    <li><a href="#">tiendas</a></li>
                    <li><a href="Reclamos.html" class="active">reclamos</a></li>
                    <li><a href="#">servicio</a></li>
                    <li><a href="Nosotros.html">nosotros</a></li>

                </ul>

                <ul class="right hide-on-med-and-down " id="tbn_login">
                    <li><a href="#" class="waves-effect waves-light btn">¡Regístrate!</a></li>




                </ul>
                <div class="contenedor-formulario">
                    <div class="formulario" id="formulario">

                        <form action="" class="formulario-login ">

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
                                    <input type="password" class="caja" id="contraseña" name="clave" required>
                                    <label for="">Contraseña:</label>
                                </div>

                                <button type="submit" class="primero">Iniciar sesión</button>

                                <div class="recuperar ">
                                    <a href="# "> ¿Olvisdate tu contraseña?</a>
                                </div>

                                <button type="button " class="segundo " OnClick=""> Registrarse</button>


                            </div>
                        </form>

                    </div>
                </div>
                <li class=" btn" id="carrito"><img alt="" src="../static/img/iconos/carrito.png" height="40px"></li>

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
                    <li class=""><a href="ofertas.html">ofertas</a></li>
                    <li class=""><a href="masVendidos.html">más vendidos</a></li>
                    <li class=""><a href="damas.html">más buscados</a></li>


                </ul>



            </nav>
        </header>




        <section class="contenido">
            <form action="../static/php/registrarProductos.php" class="form-re" enctype="multipart/form-data" method="POST">

                <h3 style=" grid-column-start: 1;grid-column-end: 3;">registro de productos</h3>

                <div>
                    <label for=""> nombre del producto</label>
                    <input type="text"  name="nombre">
                </div>

                <div>
                    <label for="">codigo del producto</label>
                    <input type="text" name="codigo">
                </div>

                <div>
                    <label for="">precio del producto</label>
                    <input type="number" name="precio" step="0.01">
                </div>

                <div>
                    <label for="">stock</label>
                    <input type="number" name="stock">
                </div>

                <div>
                    <label for="">descuento</label>
                    <input type="number" name="descuento">
                </div>

                <div>
                    <label for="">talla del producto</label>
                    <input type="text" name="talla">
                </div>

                <div>
                    <label for="">color del producto</label>
                    <input type="color" name="color">

                </div>

                <div>
                    <div class="input-field col s12">
                        <select name="categorias">
                            <?php


                            include_once '../static/php/conexion.php';
                            $datos = conexion::getDatos("select * from categorias");

                            foreach ($datos as $fila) :

                            ?>

                                <option value=" <?php echo $fila->id;  ?>"><?php echo $fila->categoria;  ?></option>

                        <?php
                            endforeach;

                        ?>

                        </select>
                        <label>categoría del producto</label>
                    </div>

                </div>

                <div>
                    <div class="input-field col s12">
                        <select name="sub-categorias">
                            <?php
                            $datos = conexion::getDatos("select * from sub_categorias");

                            foreach ($datos as $fila) :

                            ?>

                                <option value="<?php echo $fila->id;  ?>"><?php echo $fila->sub_categoria;  ?></option>

                            <?php
                            endforeach;

                            ?>

                        </select>
                        <label>subcategoría del producto</label>
                    </div>

                </div>

                <div style=" grid-column-start: 1;grid-column-end: 3;">
                    
                        <div class="file-field input-field">
                            <div class="btn">
                                <span>foto principal</span>
                                <input type="file" name="foto-principal" accept="image/*">
                            </div>
                            <div class="file-path-wrapper">
                                <input class="file-path validate" type="text">
                            </div>
                        </div>
                  
                </div>

                <div  style=" grid-column-start: 1;grid-column-end: 3;">
                    
                        <div class="file-field input-field">
                            <div class="btn">
                                <span>fotos secuandarios</span>
                                <input type="file" multiple name="fotos-secundarios[]" accept="image/*">
                            </div>
                            <div class="file-path-wrapper">
                                <input class="file-path validate" type="text" placeholder="seleccione toda las imagenes secundarias">
                            </div>
                        </div>
           
                </div>


                <div style=" grid-column-start: 1;grid-column-end: 3;">
                    <label for="">detalle del producto</label>
                    <textarea name="detalle" id="" cols="30" rows="1" style="height: 10rem;"></textarea>
                </div>



                <input type="submit" class="btn" value="guardar datos" style=" grid-column-start: 1;grid-column-end: 3;">
                


            </form>



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



    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>


    <script src="../static/js/animacion.js"></script>


    <script src="../static/js/login.js"></script>
    <script src="../static/js/carrusel.js"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            $(document).ready(function() {
                $('select').formSelect();
            });
        });
    </script>
</body>

</html>