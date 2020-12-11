<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="estulos.css">
    <title>Mercaditos</title>
    <link rel="shortcut icon" href="img/Logo.png" type="image/x-icon">
</head>

<body class="body">

    <header>

        <nav class="navbar navbar-expand-lg navbar-light bg-transparent ">
            <img src="img/Logo.png" width="60" height="60" alt="" loading="lazy">
            <a class="navbar-brand text-warning tamañotextonavbar margennavbar magenicon" href="index.html">Mercadito</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">

            </div>
        </nav>

    </header>

    <main>

        <div class="jumbotron jumbotron-fluid jumbo">
            <div class="container">
                <h1 class="display-5 bordecarrusel">Canasta</h1>
                <p class="lead textjumbo bordecarrusel">¡HOLA!, estamos muy contentos de que elijas nuestros productos, en este espacio encontraras cosas maravillosas.</p>
            </div>
        </div>

        <div class="container">
            <div class="row justify-content-center">
                <a class="btn btn-warning btn-lg textjumbo" href="agregarproducto.php" role="button">Agrega un producto nuevo</a>
            </div>
        </div>

        <?php

    include ("Basedatos.php");

    $transaccion = new Basedatos();

    $consultasql = "SELECT * FROM productos WHERE 1";

    $producto = $transaccion -> lista($consultasql);

?>

                <h2 class="centrartitulos ">Canastas</h2>

            <div class="container">

                <div class="row row-cols-1 row-cols-md-3">



                    <?php foreach($producto as $productos): ?>

                    <div class="col mb-4">
                        <div class="card h-100 bordecarrusel">
                        <img src="<?php echo ($productos["foto"])  ?>" class="card-img-top bordecarrusel">
                            <div class="card-body body">
                                <h5 class="card-title">Nombre: <?php echo ($productos["nombre"]) ?></h5>
    
                                <p class="card-text">Descripcion: <?php echo ($productos["descripcion"]) ?></p>
                                <p class="card-text">Precio: <?php echo ($productos["precio"]) ?></p>

                                
                                <a href="elliminar.php?id=<?php echo($productos ["id"]) ?>"
                                class="btn btn-danger">Eliminar</a>

                                <button type="button" class="btn btn-danger " data-toggle="modal"
                                    data-target="#editar<?php echo($productos ["id"]) ?>">
                                    Editar
                                </button>

                            </div>

                            <div class="modal fade" id="editar<?php echo($productos ["id"]) ?>" tabindex="-1" aria-labelledby="exampleModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Edicion</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>

                                    <div class="modal-body">
                                        <form action="crudproducto.php?id=<?php echo($productos ["id"]) ?>" method="POST">

                                            <div class="form-group">
                                                <label>Nombre</label>
                                                <input type="text" class="form-control" name="nombreEditar" value="<?php echo($productos["nombre"]) ?>">
                                            </div>

                                            <div class="form-group">
                                                <label>Descripcion</label>
                                                <textarea maxlength="200" class="form-control" rows="3" name="descripcionEditar"><?php echo($productos["descripcion"]) ?></textarea>
                                            </div>

                                            <div class="form-group">
                                                <label>Precio</label>
                                                <input type="text" class="form-control" name="precioeditar" value="<?php echo ($productos["precio"]) ?>">
                                            </div>

                                            <button type="submit" class="btn btn-info" name="botonEditar">Enviar</button>

                                        </form>
                                    </div>

                                </div>
                            </div>
                        </div>

                        </div>
                    </div>

                    <?php endforeach ?>

                </div>

            </div>



    </main>


    <footer>

    </footer>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
    </script>
</body>

</html>