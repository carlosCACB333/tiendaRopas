

<?php
include_once 'conexion.php';
class registrarProducto
{

    var $nombre;
    var $codigo;
    var $precio;
    var $stock;
    var $descuento;
    var $talla;
    var $color;
    var $categorias;
    var $sub_categorias;
    var $foto_principal;
    var $foto_secundario;
    var $detalle;

    function __construct()
    {
        $this->nombre = $_POST["nombre"];
        $this->codigo = $_POST["codigo"];
        $this->precio = $_POST["precio"];
        $this->stock = $_POST["stock"];
        $this->descuento = $_POST["descuento"];
        $this->talla = $_POST["talla"];
        $this->color = $_POST["color"];
        $this->categorias = $_POST["categorias"];
        $this->sub_categorias = $_POST["sub-categorias"];
        $this->foto_principal = $_FILES['foto-principal']['name'];
        $this->detalle = $_POST["detalle"];

        print($this->nombre . "</br>");
        print($this->codigo . "</br>");
        print($this->precio . "</br>");
        print($this->stock . "</br>");
        print($this->descuento . "</br>");
        print($this->talla . "</br>");
        print($this->color . "</br>");
        print($this->categorias . "</br>");
        print($this->sub_categorias . "</br>");
        print($this->foto_principal . "</br>");
        print($this->detalle . "</br>");

        print("  fotos auxiliares </br>");
        //obtenemos el id de la categoria
        $query = "select b.id from categorias as a inner join categorias_sub_categorias as  b on a.id=b.categorias_id inner join sub_categorias as c on b.sub_categorias_id=c.id where a.id=$this->categorias and c.id=$this->sub_categorias";



        $datos = conexion::getDatos($query, array());
        /* movemos la imagen principal al servidor */
        conexion::subirImagenServidor($this->foto_principal, $_FILES['foto-principal']['tmp_name']);

        print(count($datos));
        if (count($datos) != 0) {
            $categorias_subcategorias_id = $datos[0]->id;

            //insertar  a la base de datos los productos
            $query = "insert into productos values(null,?,?,?,?,?,?,?,?,?,?)";
            conexion::setQuery($query, array($this->nombre, $this->codigo, $this->foto_principal, $this->precio, $this->stock, $this->descuento, $this->talla, $this->color, $this->detalle, $categorias_subcategorias_id));

            if ($_FILES['fotos-secundarios']) {
                $file_ary = $this->reArrayFiles($_FILES['fotos-secundarios']);
                foreach ($file_ary as $file) {
                    print 'File Name: ' . $file['name'];
                    print '<br/>';
                    /* print 'File Type: ' . $file['type'];
                print 'File Size: ' . $file['size']; */

                    //subimos al servidor
                    conexion::subirImagenServidor($file['name'], $file['tmp_name']);
                    //guardar datos a la base de datos
                    $productos_id = (conexion::getDatos("select MAX(id) as id from productos"))[0]->id;
                    conexion::setQuery("insert into imagenes values(null,?,?)", array($file['name'], $productos_id));
                }
            }

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
                        window.open(document.referrer);
                    });
                </script>
            
            </body>
            
            </html>";
        } else {
            print("relacion entre categoria y subcategoria incorrecta");
        }
    }


    function reArrayFiles(&$file_post)
    {

        $file_ary = array();
        $file_count = count($file_post['name']);
        $file_keys = array_keys($file_post);

        for ($i = 0; $i < $file_count; $i++) {
            foreach ($file_keys as $key) {
                $file_ary[$i][$key] = $file_post[$key][$i];
            }
        }

        return $file_ary;
    }
}


$p = new registrarProducto();
