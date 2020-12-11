<?php 

    include ("Basedatos.php");

  

    if (isset($_POST["botonEnvio"]))
    {

        $nombre = $_POST["nombre"];
        $precio = $_POST["precio"];
        $foto = $_POST["foto"];

        $transaccion = new Basedatos();

        $consultasql = "INSERT INTO productos (nombre,descripcion,precio,foto) VALUES ('$nombre',$descripcion','$precio','$foto')";
    
        $transaccion -> agregarproducto($consultasql);
    
        header("location:productos.php");
    }


    
    if (isset($_POST["botonEditar"]))
    {


        $id = $_GET['id'];

        $nombre = $_POST['nombreEditar'];
        $descripcion = $_POST['descripcionEditar'];
        $precio = $_POST['precioeditar'];

        $transaccion = new Basedatos();

        $consultasql = "UPDATE productos SET nombre='$nombre', descripcion='$descripcion', precio='$precio' WHERE id = '$id'";
    
    
        $transaccion -> editarproducto($consultasql);

        header("location:productos.php");
    }

    






?>

