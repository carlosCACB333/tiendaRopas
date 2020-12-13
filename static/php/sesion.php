<?php
include_once 'conexion.php';
class sesion
{
    var $email;
    var $clave;
    function __construct()
    {
        $this->email = $_POST['email'];
        $this->clave = $_POST['clave'];
    }

    function validar()
    {
        $conexion = conexion::conectar();



        $datos = conexion::getDatos("select * from usuarios where email='$this->email' and clave=md5('$this->clave')");
        if (count($datos) != 0) {

            $arreglo = new stdClass();
            $arreglo->email = $datos[0]->email;
            $arreglo->perfil = $datos[0]->imagen;

            /* iniciamos una sesion  */
            session_start();
            $_SESSION['email'] = $datos[0]->email;
            $_SESSION['perfil'] = $datos[0]->imagen;
            /* ------------- */

            echo json_encode($arreglo);
        } else {
            echo "false";
        }
    }
}

$con = new sesion();
$con->validar();
