<?php

include_once 'conexion.php';

class obtenerDatosProductos
{
    var $producto_id;
    function __construct()
    {
        $this->producto_id = $_POST['producto_id'];
        $this->obtenerDato();
    }

    function obtenerDato()
    {
        $datos_productos = conexion::getDatos("select * from productos where id=$this->producto_id");
        $datos_fotos = conexion::getDatos("select ruta from imagenes where productos_id=$this->producto_id");
        echo json_encode(array($datos_productos,$datos_fotos));
    }
}

$ra = new obtenerDatosProductos();
