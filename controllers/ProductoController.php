<?php

class ProductoController
{
    public function __construct()
    {
        require_once "models/Producto.php";
    }

    public function index()
    {
        $productos = new Producto();
        $data["productos"] = $productos->listar();
        //cargar la vista
        require_once "views/productos/index.php";
    }

    //mostrar la vista, para crear un nuevo registro (producto)
    public function insert()
    {
        require_once "views/productos/insert.php";
    }

    //guarda el registro
    public function store()
    {
        
        //recibir los datos a aguardar
        $nombre = $_POST['nombre'];
        $marca = $_POST['marca'];
        $precio = $_POST['precio'];
        $cantidad = $_POST['cantidad'];
        
        //TODO: Realizar las validacion
        $patron_texto = "/^[a-zA-ZáéíóúÁÉÍÓÚäëïöüÄËÏÖÜàèìòùÀÈÌÒÙ\s]+$/";


        if(empty($_POST['nombre']))
        {
            echo'Digite el nombre.';
        }
        else if(!preg_match($patron_texto, $_POST['nombre']) )
            {    
            echo "El nombre sólo puede contener letras y espacios";
            }             
        else
        {
            if( empty($_POST['marca']) )
            {
                echo'Digite la marca.';
            }
            else if(!preg_match($patron_texto, $_POST['marca']) )
            {    
                echo "La marca sólo puede contener letras y espacios";
            }
            else
            {
                if( empty($_POST['precio']) )
                {
                    echo'Digite el precio.';
                }
                else if( $precio <= 0 )
                {
                    echo 'El precio digitado no es admitido por el sistema';
                }
                else
                {
                    if( empty($_POST['cantidad']) )
                    {
                        echo'Digite la cantidad.';
                    }
                    else if( $cantidad < 1 )
                    {
                        echo 'La cantidad digitada no es admitida por el sistema';
                    }
                    else
                    {
                        $producto = new Producto();  
                        $producto->insert($nombre, $marca, $precio, $cantidad);
                        $this->index();           
                    }
                }   
            }
        }
    }
    
    public function edit($id)
    {
        $producto = new Producto();
        //Pasar a la vista el id y el producto
        $data["id"] = $id;
        $data["producto"] = $producto->getProducto($id);
        require_once "views/productos/edit.php";
    }

    public function update()
    {
        $id = $_POST['id'];
        $nombre = $_POST['nombre'];
        $marca = $_POST['marca'];
        $precio = $_POST['precio'];
        $cantidad = $_POST['cantidad'];

        $producto = new Producto();
        $producto->update($id, $nombre, $marca, $precio, $cantidad);
        $this->index();
    }
    public function delete($id)
    {
        $producto = new Producto();
        $producto->delete($id);
        $this->index();
    }

    public function view($id)
    {
        $producto = new Producto();
        $data["id"] = $id;
        $data["producto"] = $producto->getProducto($id);
        require_once "views/productos/view.php";
    }
}
?>