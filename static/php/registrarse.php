<?php
include_once 'conexion.php';
class registro
{
    var $email;
    var $clave;
    var $nombre;
    var $apellido;
    var $dni;
    var $celular;
    var $direccion;
    var $foto;

    function __construct()
    {
        $this->email = $_POST['email'];
        $this->clave = $_POST['clave'];
        $this->nombre = $_POST['nombre'];
        $this->apellido = $_POST['apellido'];
        $this->dni = $_POST['dni'];
        $this->celular = $_POST['celular'];
        $this->direccion = $_POST['direccion'];
        $this->foto = $_FILES['foto']['name'];

        $this->registrar();
        $this->guardarImagenServidor($this->foto);

        /* echo ($this->email . "</br>");
        echo ($this->clave . "</br>");
        echo ($this->nombre . "</br>");
        echo ($this->apellido . "</br>");
        echo ($this->dni . "</br>");
        echo ($this->celular . "</br>");
        echo ($this->direccion . "</br>");
        echo ($this->foto . "</br>"); */
    }

    function registrar()
    {
        $conexion = conexion::conectar();

        $st = $conexion->prepare("insert into usuarios values(null,?,?,?,md5(?),?,?,?,?)");

        $st->execute(array($this->nombre, $this->apellido, $this->email, $this->clave, $this->dni, $this->celular, $this->direccion, $this->foto));
        if ($st->rowCount() != 0) {
            echo "<!DOCTYPE html>
            <html lang='en' dir='ltr'>
            
            <head>
                <meta charset='utf-8'>
                <title></title>
            
                <script src='https://cdn.jsdelivr.net/npm/sweetalert2@10'></script>
            </head>
            
            <body>
            
                <script>
                    Swal.fire({
                        title: 'exito',
                        text: 'se registro con éxito',
                        icon: 'success',
                        confirmButtonColor: '#3085d6',
                        cancelButtonColor: '#d33',
                        confirmButtonText: 'aceptar',
                    }).then((result) => {
                        window.parent.close();
                        window.open('../../plantillas/home.html');
                    });
                </script>
            
            </body>
            
            </html>";
        } else {
            echo "<!DOCTYPE html>
            <html lang='en' dir='ltr'>
            
            <head>
                <meta charset='utf-8'>
                <title></title>
            
                <script src='https://cdn.jsdelivr.net/npm/sweetalert2@10'></script>
            </head>
            
            <body>
            
                <script>
                    Swal.fire({
                        title: 'error',
                        text: 'se produjo  un error, verifique los datos',
                        icon: 'warning',
                        confirmButtonColor: '#3085d6',
                        cancelButtonColor: '#d33',
                        confirmButtonText: 'aceptar',
                    }).then((result) => {
                        window.parent.close();
                        window.open(document.referrer);
                    });
                </script>
            
            </body>
            
            </html>";
        }
    }

    function guardarImagenServidor($nombre)
    {
        $ruta = $_SERVER['DOCUMENT_ROOT'] . '/ejemplos/tiendaRopas/ServidorImagenes/' . $nombre;

        if (move_uploaded_file($_FILES['foto']['tmp_name'], $ruta)) {
            echo "se movio correctamente";
        } else {
            echo "error al mover";
        }
    }
}

$con = new registro();
