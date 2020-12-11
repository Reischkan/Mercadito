<?php


    include ("Basedatos.php");


    $id = $_GET["id"]; 

    $transaccion = new Basedatos();

    $consultasql = "DELETE FROM productos WHERE id = '$id'";


    $transaccion -> eliminarproducto($consultasql);

    header("location:productos.php");


?>