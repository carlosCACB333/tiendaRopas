<?php
class conexion
{
    static function conectar()
    {
        try {
            $conexion = new PDO('mysql: host=localhost ; dbname=tienda_ropas', 'root', 'mysql');
            $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $conexion;
        } catch (Exception $e) {
            echo 'se produjo un error en la conexion a la base de datos ' . $e->getMessage();
            exit();
        }
    }

    static function getDatos($sql)
    {
        $conexion = conexion::conectar();
        $res = $conexion->query($sql);
        return $res->fetchAll(PDO::FETCH_OBJ);
    }

    static function checkQuery($query)
    {
        try {
            //code...

            $conexion = conexion::conectar();
            $res = $conexion->query($query);
            if ($res->rowCount() > 0) {
                return true;
            } else {
                return false;
            }
        } catch (Exception $e) {
            //throw $th;

        }
    }


    static function setQuery($query, $datos)
    {
        try {
            $conexion = conexion::conectar();
            $res = $conexion->prepare($query);
            $res->execute($datos);
            $res->closeCursor();
        } catch (Exception $e) {
            $e->getMessage();
        }
    }

    static function subirImagenServidor($nombre,$file)
    {
        $ruta = $_SERVER['DOCUMENT_ROOT'] . '/ejemplos/tiendaRopas/ServidorImagenes/' . $nombre;

        if (move_uploaded_file($file, $ruta)) {
            return true;
        } else {
           return false;
        }
    }
}
