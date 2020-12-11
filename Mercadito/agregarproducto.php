<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="estulos.css">
    <title>Agrega un producto</title>
    <link rel="shortcut icon" href="img/Logo.png" type="image/x-icon">
</head>

<body class="body">

    <header>

        <nav class="navbar navbar-expand-lg navbar-light bg-transparent ">
            <img src="img/Logo.png" width="60" height="60" alt="" loading="lazy">
            <a class="navbar-brand text-warning tamañotextonavbar margennavbar magenicon" href="index.html">EndulSar</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">

            </div>
        </nav>
        <hr>


    </header>

    <main>

        <div class="container">

            <form action="crudproducto.php" method="POST">
                <h1>Agrega un producto</h1>

                <div class="row">
                    <div class="col-6">
                        <input type="text" class="form-control" placeholder="Nombre" name="nombre">
                    </div>
                    <div class="col-6">
                        <input type="text" class="form-control" placeholder="Precio" name="precio">
                    </div>
                </div>

                    <div class="col">
                        <label class="font-weight-bold">Descripción:</label>
                        <textarea class="form-control" maxlength="200" rows="4" name="descipcion"></textarea>
                    </div>
                </div>


                <div class="row mt-3">

                    <div class="col">
                        <label class="font-weight-bold">Foto:</label>
                        <input type="text" class="form-control" placeholder="Foto URL" name="foto">
                    </div>
                </div>
                <br>
                <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#agregar">
                    Agregar producto
                </button>

                <div class="modal" id="agregar">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-body">
                                <p>Producto agregado con exito</p>
                            </div>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-warning btn-block textjumbtroncupcake"
                                    name="botonEnvio">Aceptar</button>

                            </div>
                        </div>
                    </div>
                </div>

            </form>
        </div>



        </form>
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